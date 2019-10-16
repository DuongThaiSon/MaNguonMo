@extends('client.layouts.main')
@section('title','Đặt hàng')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client/asset') }}/images/bg_3.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Đặt hàng</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Đặt hàng</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 ftco-animate">
                <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                    <h3 class="mb-4 billing-heading">Thông tin</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Tên</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Họ</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Địa chỉ nhận hàng</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Điện thoại</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>
            </div> 

            <div class="col-xl-4 sidebar ftco-animate">
                <div class="row mt-5 pt-3 d-flex">
                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Đơn hàng</h3>
                        <p class="d-flex">
                            <span>Đơn giá</span>
                            <span>$20.60</span>
                        </p>
                        <p class="d-flex">
                            <span>Vận chuyển</span>
                            <span>$0.00</span>
                        </p>
                        <p class="d-flex">
                            <span>Giảm giá</span>
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Tổng cộng</span>
                            <span>$17.60</span>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-4 text-uppercase">Đặt hàng</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- .section -->

<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });

</script>
@endsection
