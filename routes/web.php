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
Route::get('admin/login', function (){
    return view('admin.views.login.login');
});
Route::get('admin', function (){
    return view('admin.views.home.index');
});

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