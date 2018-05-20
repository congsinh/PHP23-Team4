<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->has('search') && !empty($request->search)) {
            $query = $query->where('id', 'like','%'. $request->search.'%')
                ->orWhere('name', 'like','%'. $request->search.'%')
                ->orWhere('phone', 'like','%'. $request->search.'%')
                ->orWhere('email', 'like','%'. $request->search.'%');
        }
        if(!empty($request->date_start) && !empty($request->date_end)){
            $query = $query->whereBetween('created_at', [ $request->date_start, $request->date_end ]);
        }
        if($request->ajax()){
            $users = $query->orderByDesc('created_at')
                ->paginate(10)
                ->appends(request()->query());
            $view = view('admin.ajax.components.users',compact(['users']))->render();
            return response()->json(['view' => $view],200);
        }
        $users = $query->orderByDesc('created_at')->paginate(10)->appends(request()->query());
        return view('admin.users.list',compact(['users']));
    }

    public function resetPassWord(Request $request){
        try{
            $user = User::findOrFail($request->id);
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json(['success'=> 'Reset mật khẩu thành công !']);
        }
        catch(\Exception $e){
            return response()->json(['error'=> 'Không reset được mật khẩu !']);
        }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('orders.products')->findOrFail($id);
        return view('admin.users.detail',compact(['user']));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
