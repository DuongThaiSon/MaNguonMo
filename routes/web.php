<?php

Route::get('/', function () {
    return view('client.views.home.index');
});
Route::get('about', function (){
    return view('client.views.about.about');
});
Route::get('cart', function (){
    return view('client.views.cart.cart');
});
Route::get('order', function (){
    return view('client.views.order.order');
});
Route::get('contact', function (){
    return view('client.views.contact.contact');
});
Route::get('menu', function (){
    return view('client.views.menu.menu');
});
Route::get('shop', function (){
    return view('client.views.products.shop');
});
Route::get('service', function (){
    return view('client.views.service.services');
});
Route::get('product-detail', function (){
    return view('client.views.products.product-detail');
});

Route::get('admin', function (){
    return view('admin.views.home.index');
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'product'],function(){
        Route::get('danhsach','product_controller@getDanhSach')->name('dssp'); 
        Route::get('delete/{id}','product_controller@xoaSanPham')-> name('xoasp');
        Route::get('add-product','product_controller@getThemSanPham')->name('themsp');
        Route::post('add-product','product_controller@postThemSanPham')-> name('themsanpham'); 
        Route::get('change-product/{id}','product_controller@getSuaSanPham');
        Route::post('change-product/{id}','product_controller@postSuaSanPham');
    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('danhsach','category_controller@getDanhSach')->name('dsdm');  
        Route::get('delete/{id}','category_controller@xoaDanhMuc')-> name('xoadanhmuc'); 
        Route::get('add-category','category_controller@getThemDanhMuc')->name('themdm');
        Route::post('add-category','category_controller@postThemDanhMuc')-> name('themdanhmuc'); 
        Route::get('change-category/{id}','category_controller@getSuaDanhMuc')->name('suadm/{id}');
        Route::post('change-category/{id}','category_controller@postSuaDanhMuc')-> name('suadanhmuc{id}');
    });
    Route::group(['prefix'=>'cart'],function(){
        // danh sach dang xu ly
        Route::get('dsdangxuly','order_controller@getDanhSachDXL')->name('dsdhdxl');
        // danh sach da xu ly  
        Route::get('dsdaxuly','order_controller@getDanhSachDaXL')->name('dsdhdaxl');  
        // danh sach dong hang bi huy
        Route::get('dsbihuy','order_controller@getDanhSachBH')->name('dsdhbh');  
        // danh sach don hang da nhan duoc tien
        Route::get('dsdagiao','order_controller@getDanhSachDaGiao')->name('dsdg');
        // huy don hang dang xu ly
        Route::get('cancel_dxl/{id}','order_controller@huyDonHangDXL')-> name('huydonhangdxl'); 
        // huy don hang da xu ly
        Route::get('cancel_daxl/{id}','order_controller@huyDonHangDaXL')-> name('huydonhangdaxl'); 
        // xac nhan don hang dang xu ly
        Route::get('accept_dxl/{id}','order_controller@xacNhan')->name('xacnhan');
        // xac nhan don hang da giao
        Route::get('accept_daxl/{id}','order_controller@xacNhanDaGiao')->name('xacnhandagiao');
    });
    Route::get('danhsachnhanvien','account_controller@getDanhSach')->name('dsnv');

    Route::get('login', function (){
        return view('admin.views.login.login');
    });
});

        

