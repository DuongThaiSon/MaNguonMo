@extends('client.layouts.main')
@section('title', 'Trang chủ')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/client') }}/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome</span>
                    <h1 class="mb-4">Trải nghiệm những thức uống ngon nhất</h1>
                    <p>
                        <a href="shop" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('assets/client') }}/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome</span>
                    <h1 class="mb-4">Hương Vị Tuyệt Vời Và Không gian thoáng mát</h1>
                    <p>
                        <a href="shop" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('assets/client') }}/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome</span>
                    <h1 class="mb-4">Luôn sẵn sàng phục vụ</h1>
                    <p>
                        <a href="shop" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ asset('assets/client') }}/images/about.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p>Một cái quán bé xíu xiu nằm lọt thỏm giữa muôn vàn những tòa nhà cao tầng. Trong lòng thành phố bận
                    rộn, cánh cửa thủy tinh ấy vẫn đóng vào mở ra đều đặn mỗi ngày, chào đón những vị khách lạ mặt lẫn
                    quen mặt. Họ đến. Có người kể dăm ba câu về những chuyện vô thưởng vô phạt. Có người nén tiếng thở
                    dài trong lúc chờ lấy cà phê. Rồi họ rời khỏi quán sau vài phút chờ đợi ngắn ngủi, gặp nhau một đời
                    cũng không được mấy lần.
                    </br>
                    Chuông kêu linh đinh. Vị khách tiếp theo trong ngày đẩy cánh cửa kính và bước đến quầy order. Trên
                    đó có đặt một tấm bảng xinh xắn.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-choices"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Dễ dàng đặt hàng</h3>
                        <p>Bạn có thể đặt hàng một cách nhanh gọn và thuận lợi nhất 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-delivery-truck"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Vận chuyển nhanh</h3>
                        <p>Bạn sẽ không bao giờ phải chờ đồ quá 30p
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-coffee-bean"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Chất Lượng Coffee</h3>
                        <p>Với đội ngũ nhân viên được đào tạo kĩ càng, chúng tôi cam đoan sẽ tạo ra những sản phẩm chất lượng nhất
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Menu</h2>
                    <p class="mb-4">Menu chúng tôi cung cấp đầy đủ những đồ uống và đồ ăn nhanh ngon và chất lượng mà bạn không thể tìm được ở đâu khác</p>
                    <p><a href="menu" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="shop" class="img"
                                style="background-image: url({{ asset('assets/client') }}/images/menu-1.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="shop" class="img"
                                style="background-image: url({{ asset('assets/client') }}/images/menu-2.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="shop" class="img"
                                style="background-image: url({{ asset('assets/client') }}/images/menu-3.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="shop" class="img"
                                style="background-image: url({{ asset('assets/client') }}/images/menu-4.jpg);"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter"
    style="background-image: url({{ asset('assets/client') }}/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Chi nhánh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="85">0</strong>
                                <span>Giải thưởng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="10567">0</strong>
                                <span>Khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="900">0</strong>
                                <span>Nhân viên</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">bán chạy nhất</h2>
                <p>Dưới đây là những món ăn và thức uống được ưa chuộng nhất của chúng tôi
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('assets/client') }}/images/menu-1.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('assets/client') }}/images/menu-2.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('assets/client') }}/images/menu-3.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img"
                        style="background-image: url({{ asset('assets/client') }}/images/menu-4.jpg);"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Coffee Capuccino</a></h3>
                        <p class="price"><span>$5.90</span></p>
                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">sản phẩm của chúng tôi</h2>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                role="tab" aria-controls="v-pills-1" aria-selected="true">Coffee
                            </a>
                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Drinks
                            </a>
                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Desserts
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Grilled Beef</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Lemonade Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Pineapple Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/drink-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Soda Drinks</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ asset('assets/client') }}/images/dessert-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Hot Cake Honey</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
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

<section class="ftco-section img" id="ftco-testimony"
    style="background-image: url({{ asset('assets/client') }}/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Customers Says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters">
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{ asset('assets/client') }}/images/person_1.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name of
                            Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{ asset('assets/client') }}/images/person_2.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name.
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{ asset('assets/client') }}/images/person_3.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however.&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{ asset('assets/client') }}/images/person_2.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost unorthographic life One day however a small line of blind text by the name.
                            &rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="{{ asset('assets/client') }}/images/person_3.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Louise Kelly <span class="position">Illustrator
                                Designer</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
