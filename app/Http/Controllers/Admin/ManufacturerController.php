<?php

namespace App\Http\Controllers\Admin;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ManufacturerRequest;
class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('admin.Manufacturer.index',compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::select('name')->get();
        return response()->json($manufacturers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManufacturerRequest $request)
    {
        $manufacturer_array = $request->all();
        $manufacturer_array['slug'] = $request->name;
        $manufacturer = Manufacturer::create($manufacturer_array);
        $count = Manufacturer::count();
        return response()->json([$manufacturer,$count],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer = Manufacturer::findorFail($id);
        return response()->json($manufacturer,200);
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
    public function update(ManufacturerRequest $request, $id)
    {
        $manufacturer_array = $request->all();
        $manufacturer_array['slug'] = str_slug($request->name);
        $manufacturer = Manufacturer::findorFail($id);
        $manufacturer->update($manufacturer_array);
        return response()->json($manufacturer,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacturer = Manufacturer::destroy($id);
        return response()->json($manufacturer,200);
    }
}
