<?php

namespace App\Http\Controllers;
use App\categories;
use Illuminate\Http\Request;

class category_controller extends Controller
{
    public function getDanhSach(){
        $dsdm = categories::all();
        return view('admin.views.products.product-categories',['dsdm'=>$dsdm]);  
    }
    public function getThemDanhMuc(){
        return view('admin.views.products.add-product-categories');
    }
    public function postThemDanhMuc(Request $request){
        $danhmuc = new categories;
        $danhmuc->name = $request ->TenDanhMuc;
        $danhmuc->save();
        return redirect('admin/category/add-category/')->with('thongbao','Thêm Thành Công');
    }
    public function getSuaDanhMuc($id){
        $danhmuc = categories::find($id);
        return view('admin.views.products.change-product-categories',['danhmuc'=>$danhmuc]);
    }
    
    public function postSuaDanhMuc(Request $request,$id){
        $danhmuc = categories::find($id);
        $danhmuc->name = $request ->TenDanhMuc;
        $danhmuc->save();
        return redirect('admin/category/change-category/'.$id)->with('thongbao','Sửa Thành Công');
    }

}
