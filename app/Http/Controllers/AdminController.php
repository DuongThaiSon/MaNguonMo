<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function postLogin(Request $request){
        if (Auth::attempt(['email'=>$request->Email,'password'=>$request->Pass])) {
            return redirect ('admin');
        }
        else {
            return redirect ('login')->with('thongbao','Sai thông tin đăng nhập');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect ('login');
    }
    public function getDanhSach(){
        $dsnv = account::all();
        return view('admin.views.user.user',['dsnv'=>$dsnv]);
    }
}
