@extends('client.layouts.main')
@section('title','Chi tiết')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client/asset') }}/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Chi tiết sản phẩm</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home</a>
                        </span> 
                        <span>Chi tiết</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="{{ asset('assets/client/asset') }}/images/menu-2.jpg" class="image-popup"><img src="{{ asset('assets/client/asset') }}/images/menu-2.jpg" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Creamy Latte Coffee</h3>
                <p class="price"><span>50.000 VND</span></p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group d-flex">
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Small</option>
                                    <option value="">Large</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn mr-2">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="icon-minus"></i>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                            min="1" max="100">
                        <span class="input-group-btn ml-2">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="icon-plus"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <p><a href="cart" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
            </div>
        </div>
    </div>
</section>
@endsection