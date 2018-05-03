<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_parent = Category::where('parent_id',null)->get();
        $categories_children = Category::where('parent_id','<>',null)->with('category')->get();
        return view('admin.Categories.index',compact('categories_parent','categories_children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('name')->get();
        return response()->json($categories,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category_array = $request->all();
        $category_array['slug'] = str_slug($request->name);
        $category = Category::create($category_array);
        $count = Category::where('parent_id', null)->count();

        if($request->parent_id){
            $nameCategory = Category::select('name')
                ->where(['parent_id'=> null, 'id' => $request->parent_id])
                ->first();
            return response()->json([$category,$count,$nameCategory],200);
        }

        return response()->json([$category,$count],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findorFail($id);
        return response()->json($category,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        if($request->parent_id){
            $category_array = $request->all();
            $category_array['slug'] = str_slug($request->name);
            $category = Category::findorFail($id);
            $category->update($category_array);
            $nameCategory = Category::select('name')->where('parent_id',null)->where('id',$request->parent_id)->first();
            return response()->json([$category,$nameCategory],200);
        }else{
            $category_array = $request->all();
            $category_array['slug'] = str_slug($request->name);
            $category = Category::findorFail($id);
            $category->update($category_array);
            return response()->json($category,200);
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
        $cate = Category::where('parent_id',$id)->count();
        if($cate > 0){
            return response('NoRequest');
        }else{
            $category = Category::destroy($id);
            return response()->json($category,200);
        }

    }
}
