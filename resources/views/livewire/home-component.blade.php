<div>
    {{-- Do your work, then step back. --}}
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all Our Books</h1>
                                    <p class="animated">Save more with coupons & up to 70% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="#"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('assets/imgs/slider/ideas-to-get-scholarship.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Books Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 20% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="#"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="{{asset('assets/imgs/slider/email-service-providers-offer-advanced-spam-and-virus-protection.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/pablo-866.svg')}}" height="120"alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/juicy-lettering-order-today-with-a-girl-who-orders-online.svg')}}" height="120" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/marginalia-savings-1.svg')}}" height="120" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/sammy-lettering-holiday-sale-with-browser-and-gift-boxes.svg')}}" height="120" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/juicy-lettering-happy-holidays-with-woman-looking-at-christmas-decorations.svg')}}" height="120" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/florid-support-service.svg')}}" height="120" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured Book</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($fproducts as $fproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                                                <img class="default-img"  src="{{asset('assets/imgs/products')}}/{{$fproduct->image}}"  alt="{{$fproduct->name}} ">
                                               <!-- <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">--}} -->
                                            </a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="">Reading Book</a>
                                        </div>
                                        <h2><a href="">{{$fproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <!-- <span>90%</span> -->
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{$fproduct->regular_price}} </span>
                                            <span class="old-price">${{$fproduct->sell_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="" wire:click.prevent="store({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                   <img src="{{asset('assets/imgs/Banner2/new.jpg')}}"alt="banner">

                    <div class="banner-text d-md-block d-none">
{{--                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>--}}
{{--                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>--}}
{{--                        <a href="#" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($pcategories as $pcategory)
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{route('product.category',['slug'=>$pcategory->name])}}"><img src="{{asset('assets/imgs/categories')}}/{{$pcategory->image}}" alt="{{$pcategory->name}}"></a>
                            </figure>
                            <h5><a href="">{{$pcategory->name}}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{asset('assets/imgs/Banner2/bookbanner/notebooks-closed-open-notepads-different-size-design-diary-with-colorful-cover-bookmarks-lined-pages-spiral-memo-office-planner-list-isolated-cartoon-vector-illustration_107791-9799.avif')}}" alt="">
                            <div class="banner-text">
{{--                                <span>Smart Offer</span>--}}
{{--                                <h4>Save 20% on <br>Woman Bag</h4>--}}
{{--                                <a href="#">Shop Now <i class="fi-rs-arrow-right"></i></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{asset('assets/imgs/Banner2/bookbanner/2112.w015.n001.662B.p15.662.jpg')}}" alt="">
                            <div class="banner-text">
{{--                                <span>Sale off</span>--}}
{{--                                <h4>Great Summer <br>Collection</h4>--}}
{{--                                <a href="#">Shop Now <i class="fi-rs-arrow-right"></i></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{asset('assets/imgs/Banner2/bookbanner/2112.w015.n001.660B.p15.660.jpg')}}" alt="">
                            <div class="banner-text">
{{--                                <span>New Arrivals</span>--}}
{{--                                <h4>Shop Today’s <br>Deals & Offers</h4>--}}
{{--                                <a href="#">Shop Now <i class="fi-rs-arrow-right"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($lproducts as $lproduct)
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                        <img class="default-img" src={{asset('assets/imgs/products')}}/{{$lproduct->image}} alt="{{$lproduct->name}}">
{{--                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">--}}
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">new</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="">{{$lproduct->name}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>${{$lproduct->regular_price}} </span>
                                    <span class="old-price">${{$lproduct->sell_price}}</span>
                                </div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Books</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/acer.svg')}}" alt="Acer" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/apple.svg')}}" alt="Apple" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/asus.svg')}}" alt="ASUS" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/huawei.svg')}}" alt="Huawei" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/rog.svg')}}" alt="ROG" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/xiaomi.svg')}}" alt="Xiaomi" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/samsung.svg')}}" alt="Samsung" width="80" height="100">--}}
{{--                        </div>--}}
{{--                        <div class="brand-logo">--}}
{{--                            <img class="img-grey-hover" src="{{asset('assets/imgs/Brand/vivo.svg')}}" alt="vivo" width="80" height="100">--}}
{{--                        </div>--}}
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-1.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-2.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-3.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-4.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-5.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-6.png')}}" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{asset('assets/imgs/banner/brand-3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>



