<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $shopid = Auth()->user()->shop_id;
        $shop = Shop::where('id','=',$shopid)->paginate(10)[0];
        $userid = Auth()->user()->id;
        $user = Shop::where('id','=',$userid)->paginate(10)[0];
//        return $user;
        return view('users.index',compact('shop','user'));
    }

    public function edit()
    {
        $user = Auth()->user()->id;
        return view('users.edit',compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'old_password'=>'required',
            'new_password'=>'required|confirmed',//confirmed 要求new_password字段值和new_password_confirmation一致
            'new_password_confirmation'=>'required',
        ]);
        $user = Auth::user();
        if(!Hash::check($request->old_password,$user->password)){
            return back()->with('danger','旧密码不正确');
        }
        $user->update(['password'=>Hash::make($request->new_password)]);
        $request->session()->flash('success','修改成功');
        return redirect()->route('users.index');
    }
}
