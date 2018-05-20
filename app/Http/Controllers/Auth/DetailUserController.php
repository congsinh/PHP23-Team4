<?php

namespace App\Http\Controllers\Auth;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
class DetailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $user = User::findorFail($id);
        $index = 1;
        return view('auth.profile_customer.index',compact('user','index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('auth.profile_customer.edit',compact('user'));
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
        $user = User::findorFail($id);
        $user->update($request->all());
        return redirect('/info/'.$id);
    }


    public function editPassword(){
        return view('auth.profile_customer.edit_password');
    }

    public function putPassword(Request $request,$id){
        $this->validate($request,[
            'password'=>'required',
            'new_password' => 'required',
            're_password' => 'same:new_password',
        ],[
            'password.required' => 'Vui Lòng Nhập Password',
            'new_password.required' => 'Vui Lòng Nhập Password',
            're_password.same' => '2 Password Phải Giống Nhau'
        ]);
        $user = User::findorFail($id);
        if(Hash::check($request->password,$user['password'])){
            $user->password = Hash::make($request->new_password);
            $user->remember_token = $request->_token;
            $user->save();
            return redirect('/info/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function deleteProductCart($id_order,$id_product){
        $order = Order::findorFail($id_order);
        $order->products()->detach($id_product);
        if($order->products->count() === 0){
            $order->destroy($id_order);
        }
        return redirect()->back();
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
