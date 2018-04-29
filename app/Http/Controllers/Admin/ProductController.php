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
    public function index()
    {
        $products = Product::with('imageDetail')->paginate(10);
        return view('admin.products.list',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::with('subcate')->where('parent_id',null)->get();
        $manufacturers = Manufacturer::all();
        return view('admin.products.add',compact(['category','manufacturers']));
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
        $category = Category::with('subcate')->where('parent_id',null)->get();
        $manufacturers = Manufacturer::all();
        return view('admin.products.edit',compact(['product','category','manufacturers']));
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
            $images = $request->file('image_detail');
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
            foreach($image as $img){
                $path = 'uploads/images/products/'.$img->image_detail;
                if(file_exists($path)){
                unlink($path);
                }
            }
            $product->delete();
            DB::commit();
            return redirect()->route('products.index')->with(['success'=>'Đã xóa thành công !']);
        }catch( \Exception $e){
            DB::rollBack();
            return redirect()->route('products.index')->with(['error'=>'Đã xảy ra lỗi. Không thể xóa !']);
        }

    }
}
