@extends('client.layouts.main')
@section('title', 'Menu')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client/asset') }}/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Menu</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 pb-3">
                <h3 class="mb-5 heading-pricing ftco-animate">Coffe</h3>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-1.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Cornish - Mackerel</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-2.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Roasted Steak</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-3.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Seasonal Soup</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-4.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chicken Curry</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-5 pb-3">
                <h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-5.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Sea Trout</span></h3>
                            <span class="price">$49.91</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-6.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Roasted Beef</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-7.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Butter Fried Chicken</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dish-8.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chiken Filet</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dessert-1.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Cornish - Mackerel</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dessert-2.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Roasted Steak</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dessert-3.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Seasonal Soup</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/dessert-4.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chicken Curry</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/drink-5.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Sea Trout</span></h3>
                            <span class="price">$49.91</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/drink-6.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Roasted Beef</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/drink-7.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Butter Fried Chicken</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url({{ asset('assets/client/asset') }}/images/drink-8.jpg);"></div>
                    <div class="desc pt-3 pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chiken Filet</span></h3>
                            <span class="price">20.000VND</span>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
