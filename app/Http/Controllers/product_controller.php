<?php

namespace App\Http\Controllers;
use App\product;
use App\categories;
use App\product_order;
use Illuminate\Http\Request;

class product_controller extends Controller
{
    //
    public function getDanhSach(){
        $dssp = product::all();
        return view('admin.views.products.product-list',['dssp'=>$dssp]);  
    }
}
