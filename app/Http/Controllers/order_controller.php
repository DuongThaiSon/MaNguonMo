<?php

namespace App\Http\Controllers;
use App\orders;
use App\product_order;
use Illuminate\Http\Request;

class order_controller extends Controller
{
    //
    public function getDanhSachDXL(){
        $dsdxl = orders::where('status',1)->get();
        $dssp = product_order::all();
        return view('admin.views.cart.cart-processing',['dsdxl'=>$dsdxl,'dssp'=>$dssp]);  
    }
    
    public function getDanhSachDaXL(){
        $dsdaxl = orders::where('status',2)->get();
        $dssp = product_order::all();
        return view('admin.views.cart.cart-done',['dsdaxl'=>$dsdaxl,'dssp'=>$dssp]);  
    }
    public function getDanhSachBH(){
        $dsbh = orders::where('status',0)->get();
        $dssp = product_order::all();
        return view('admin.views.cart.cart-abort',['dsbh'=>$dsbh,'dssp'=>$dssp]);  
    }
    public function getDanhSachDaGiao(){
        $dsdg = orders::where('status',3)->get();
        $dssp = product_order::all();
        return view('admin.views.cart.cart-complete',['dsdg'=>$dsdg,'dssp'=>$dssp]);  
    }
    public function huyDonHangDXL($id){
        $dhbh = orders::find($id);
        $dhbh -> status = 0;
        $dhbh -> price = 0;
        $dhbh -> save();
        return redirect('admin/cart/dsdangxuly')->with('thongbao','Đã Hủy');;
    }
    public function huyDonHangDaXL($id){
        $dhbh = orders::find($id);
        $dhbh -> status = 0;
        $dhbh -> save();
        return redirect('admin/cart/dsdaxuly')->with('thongbao','Đã Hủy');;
    }
    public function xacNhan($id){
        $dhbh = orders::find($id);
        $dhbh -> status = 2;
        $dhbh -> save();
        return redirect('admin/cart/dsdangxuly')->with('thongbao','Xác Nhận Thành Công');;
    }
    public function xacNhanDaGiao($id){
        $dhbh = orders::find($id);
        $dhbh -> status = 3;
        $dhbh -> save();
        return redirect('admin/cart/dsdaxuly')->with('thongbao','Xác Nhận Thành Công');;
    }
     

}
