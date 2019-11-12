<?php

namespace App\Http\Controllers;
use App\account;
use Illuminate\Http\Request;

class account_controller extends Controller
{
    //
    public function getDanhSach(){
        $dsnv = account::all();
        return view('admin.views.user.user',['dsnv'=>$dsnv]);
    }
}
