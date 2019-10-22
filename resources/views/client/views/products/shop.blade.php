@extends('client.layouts.main')
@section('title','Shop')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client') }}/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Sản phẩm</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Shop</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
                                role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

                            <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                                aria-controls="v-pills-1" aria-selected="false">Món chính</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Đồ uống</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Tráng miệng</a>
                        </div>
                    </div>
                    <div class="col-md-12 align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                aria-labelledby="v-pills-0-tab">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="product-detail" class="img"
                                                style="background-image: url({{ asset('assets/client') }}/images/menu-1.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single">Coffee Capuccino</a></h3>
                                                <p class="price"><span>50.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to Cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="product-detail" class="img"
                                                style="background-image: url({{ asset('assets/client') }}/images/menu-2.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single">Coffee Capuccino</a></h3>
                                                <p class="price"><span>50.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to Cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="product-detail" class="img"
                                                style="background-image: url({{ asset('assets/client') }}/images/menu-3.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single">Coffee Capuccino</a></h3>
                                                <p class="price"><span>50.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to Cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="product-detail" class="img"
                                                style="background-image: url({{ asset('assets/client') }}/images/menu-4.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single">Coffee Capuccino</a></h3>                                                
                                                <p class="price"><span>50.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to Cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-4.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-5.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dish-6.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Grilled Beef</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Lemonade Juice</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Pineapple Juice</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Soda Drinks</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-4.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Lemonade Juice</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-5.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Pineapple Juice</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-6.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Soda Drinks</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-4.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-5.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="product-detail" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-6.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single">Hot Cake Honey</a></h3>
                                                <p class="price"><span>45.000VND</span></p>
                                                <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                        to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection