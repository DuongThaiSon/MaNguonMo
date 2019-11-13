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
    public function getThemSanPham(){
        
        $dsdm = categories::all();
        // dd($dsdm);
        return view('admin.views.products.add-product',compact('dsdm'));
    }
    public function postThemSanPham(Request $request){
        $SanPham = new product;
        $SanPham->name = $request ->TenSanPham;
        $SanPham->description = $request ->MoTa;
        $SanPham->price = $request ->GiaSizeM;
        $SanPham->price1 = $request ->GiaSizeL;
        $SanPham->image = $request->file('Anh')->getClientOriginalName();
        $SanPham->id_category =$request->TheLoai;
        $SanPham->save();
        return redirect('admin/product/add-product/')->with('thongbao','Thêm Thành Công');
    }
    public function getSuaSanPham($id){
        $SanPham = product::find($id);
        $dsdm = categories::all();
        return view('admin.views.products.change-product',['SanPham'=>$SanPham,'dsdm'=>$dsdm]);
    }
    
    public function postSuaSanPham(Request $request,$id){
        $SanPham = product::find($id);
        $SanPham->name = $request ->TenSanPham;
        $SanPham->description = $request ->MieuTa;
        $SanPham->price = $request ->GiaSizeM;
        $SanPham->price1 = $request ->GiaSizeL;
        $SanPham->image = $request->Anh->getClientOriginalName();;
        $SanPham->id_category =$request->TheLoai;
        $SanPham->save();
        return redirect('admin/product/change-product/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function xoaSanPham($id){
        $SanPham = product::find($id);
        $SanPham->delete();
        return redirect('admin/product/danhsach')->with('thongbao','Xóa Thành Công');;

    }   
}
