<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required'
        ]);
        if($request->parent_id){
            $category = new Category;
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->parent_id = $request->parent_id;
            $category->save();
            $count = Category::where('parent_id',null)->count();
            $nameCategory = Category::select('name')->where('parent_id',null)->where('id',$request->parent_id)->first();
            return response()->json([$category,$count,$nameCategory],200);
        }else{
            $category = new Category;
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->save();
            $count = Category::where('parent_id',null)->count();
            return response()->json([$category,$count],200);
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
    public function update(Request $request, $id)
    {
        if($request->parent_id){
            $category = Category::findorFail($id);
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->parent_id = $request->parent_id;
            $category->save();
            $nameCategory = Category::select('name')->where('parent_id',null)->where('id',$request->parent_id)->first();
            return response()->json([$category,$nameCategory],200);
        }else{
            $category = Category::findorFail($id);
            $category->name = $request->name;
            $category->slug = str_slug($request->name);
            $category->save();
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
