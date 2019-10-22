@extends('client.layouts.main')
@section('title','Giỏ hàng')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client') }}/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Giỏ hàng</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Giỏ hàng</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Size</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url({{ asset('assets/client') }}/images/menu-2.jpg);"></div>
                                </td>

                                <td>
                                    <p class="text-white">Nhỏ</p>
                                </td>

                                <td class="product-name">
                                    <h3>Creamy Latte Coffee</h3>
                                </td>

                                <td class="price">20.000</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number"
                                            value="1" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total">40.000</td>
                            </tr>

                            <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url({{ asset('assets/client') }}/images/dish-2.jpg);"></div>
                                </td>
                                
                                <td>
                                    <p class="text-white">Lớn</p>
                                </td>

                                <td class="product-name">
                                    <h3>Grilled Ribs Beef</h3>
                                </td>

                                <td class="price">30.000</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                    </div>
                                </td>

                                <td class="total">30.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Đơn hàng</h3>
                    <p class="d-flex">
                        <span>Đơn giá</span>
                        <span>70.000</span>
                    </p>
                    <p class="d-flex">
                        <span>Vận chuyển</span>
                        <span>0</span>
                    </p>
                    <p class="d-flex">
                        <span>Giảm giá</span>
                        <span>5000</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng cộng</span>
                        <span>65.000</span>
                    </p>
                </div>
                <p class="text-center"><a href="order" class="btn btn-primary py-3 px-4">Tiếp tục</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection