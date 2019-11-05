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

<<<<<<< HEAD
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'product'],function(){
        Route::get('danhsach','product_controller@getDanhSach')->name('dssp'); 

    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('danhsach','category_controller@getDanhSach')->name('dsdm');   
        Route::get('add-category','category_controller@getThemDanhMuc')->name('themdm');
        Route::post('add-category','category_controller@postThemDanhMuc')-> name('themdanhmuc'); 
        Route::get('change-category/{id}','category_controller@getSuaDanhMuc')->name('suadm/{id}');
        Route::post('change-category/{id}','category_controller@postSuaDanhMuc')-> name('suadanhmuc{id}');
    });
    Route::get('login', function (){
        return view('admin.views.login.login');
    });
});
        

=======
Route::get('admin/product-list', function (){
    return view('admin.views.products.product-list');
});

Route::get('admin/product-categories', function (){
    return view('admin.views.products.product-categories');
});
Route::get('admin/add-product', function (){
    return view('admin.views.products.add-product');
});
Route::get('admin/add-product-categories', function (){
    return view('admin.views.products.add-product-categories');
});
Route::get('admin/user', function (){
    return view('admin.views.user.user');
});
Route::get('admin/cart-process', function (){
    return view('admin.views.cart.cart-processing');
});
Route::get('admin/cart-done', function (){
    return view('admin.views.cart.cart-done');
});
Route::get('admin/cart-abort', function (){
    return view('admin.views.cart.cart-abort');
});
>>>>>>> 170bfe1a6c440b434bfc7b12c4198493c087e03b
