<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\ImageDetail;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductsRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = Product::getListStatusWithBootstrapLabels();
        $query = Product::query();
        if ($request->has('cate') && !empty($request->cate)) {
            $query = $query->where('category_id', $request->cate);
        }

        if ($request->has('manu') && !empty($request->manu)) {
            $query = $query->where('manufacture_id', $request->manu);
        }

        if ($request->has('search') && !empty($request->search)) {
            $query = $query->where('id', 'like','%'. $request->search.'%')
                ->orWhere('name', 'like','%'. $request->search.'%')
                ->orWhere('configuration', 'like','%'. $request->search.'%');
        }

        if ($request->has('status') && !empty($request->status)) {
            switch ($request->status){
                case 1://bán chạy
                    $query = $query->orderByDesc('sales')->limit(10);
                    break;
                case 2://bán it
                    $query = $query->orderBy('sales','asc')->limit(10);
                    break;
                case 3:// sắp hết hàng
                    $query = $query->where('quantity_store', '<=',5);
                    break;
                case 4:// hết hàng
                    $query = $query->where('quantity_store',0);
                    break;
            }
        }
        if($request->has('min_price') && $request->has('max_price')){
            $min = $request->min_price;
            $max = $request->max_price;
            $query = $query->whereBetween('price',[$min,$max]);
        }
        if($request->ajax()){
            $products = $query
                ->with('imageDetail')
                ->paginate(10)
                ->appends(request()->query()); // appends :  gán params request lên url paginate
            $view = view('admin.ajax.components.products',compact(['products','status']))->render();
            return response()->json(['view' => $view],200);
        }
        $products = $query->with('imageDetail')->orderByDesc('created_at')->paginate(10)->appends(request()->query());

        return view('admin.products.list',compact(['products','status']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {

        $key = $request->configuration['key'];
        $value = $request->configuration['value'];
        $configuration = array_combine($key,$value);
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['slug'] = str_slug($request->name);
            $data['configuration'] = $configuration;
            $product = Product::create($data);
            $images = $request->file('image_detail');
            if($images){
                foreach ($images as $image){
                    $name = time() . "_" . $image->getClientOriginalName();
                    ImageDetail::create([
                        'image_detail' => $name,
                        'product_id' => $product->id,
                    ]);
                    $image->move('uploads/images/products',$name);
                }
            }
            DB::commit();
            return redirect()->route('products.index')->with('success','Đã lưu sản phẩm thành công !');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error',"Đã xảy ra lỗi. Xin thử lại : ".$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $key = $request->configuration['key'];
        $value = $request->configuration['value'];
        $configuration = array_combine($key,$value);
        try {
            DB::beginTransaction();
            $product = Product::findOrFail($id);
            $data = $request->all();
            $data['slug'] = str_slug($request->name);
            $data['configuration'] = $configuration;
            $product->update($data);
            $images_del = $request->id_del_image;
            if(!empty($images_del)){
                $array_img = explode(',',$images_del);
                foreach($array_img as $id_del){
                    $img = ImageDetail::find($id_del);
                    $path = 'uploads/images/products/'.$img->image_detail;
                    if(file_exists($path)){
                        unlink($path);
                    }
                    $img->delete();
                }
            }
            $images = $request->file('image_detail');
            if($images){
                foreach ($images as $image){
                    $name = time() . "_" . $image->getClientOriginalName();
                    ImageDetail::create([
                        'image_detail' => $name,
                        'product_id' => $product->id,
                    ]);
                    $image->move('uploads/images/products',$name);
                }
            }
            DB::commit();
            return redirect()->route('products.index')->with('success','Đã cập nhật thành công !');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error',"Đã xảy ra lỗi. Xin thử lại : ".$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            $product = Product::findOrFail($id);
            $image = $product->imageDetail;
            if(empty($image->toArray())){
                foreach($image as $img){
                    $path = 'uploads/images/products/'.$img->image_detail;
                    if(file_exists($path)){
                        unlink($path);
                    }
                }
            }
            $product->delete();
            DB::commit();
            return redirect()->route('products.index')->with(['success'=>'Đã xóa thành công !']);
        }catch( \Exception $e){
            DB::rollBack();
            return redirect()->route('products.index')->with(['error'=>'Đã xảy ra lỗi. Không thể xóa !' ]);
        }

    }
}
