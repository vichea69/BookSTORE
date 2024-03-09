
<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}" alt="product image">
                                            </figure>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Brands: <a href="">Device Plaza</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{$product->regular_price}}</span></ins>
                                                <ins><span class="old-price font-md ml-15">${{$product->sell_price}}</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
{{--                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>--}}
                                            {{$product->description}}
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
{{--                                        <div class="attr-detail attr-color mb-15">--}}
{{--                                            <strong class="mr-10">Color</strong>--}}
{{--                                            <ul class="list-filter color-filter">--}}
{{--                                                <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>--}}
{{--                                                <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>--}}
{{--                                                <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>--}}
{{--                                                <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>--}}
{{--                                                <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>--}}
{{--                                                <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>--}}
{{--                                                <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="attr-detail attr-size">--}}
{{--                                            <strong class="mr-10">Storage</strong>--}}
{{--                                            <ul class="list-filter size-filter font-small">--}}
{{--                                                <li><a href="#">128G</a></li>--}}
{{--                                                <li class="active"><a href="#">256G</a></li>--}}
{{--                                                <li><a href="#">512G</a></li>--}}
{{--                                                <li><a href="#">1T</a></li>--}}
{{--                                                <li><a href="#">2T</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" >Add to cart</button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
{{--                            <div class="tab-style3">--}}
{{--                                <ul class="nav nav-tabs text-uppercase">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="tab-content shop_info_tab entry-main-content">--}}
{{--                                    <div class="tab-pane fade show active" id="Description">--}}
{{--                                        <div class="">--}}
{{--                                            {{$product->short_description}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($rproducts as $rproduct)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{route('product.details',['slug'=>$rproduct->slug])}}" tabindex="0">
                                                            <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$rproduct->image}}" alt="{{$rproduct->name}}">
{{--                                                            <img class="hover-img" src="{{asset('assets/imgs/shop/product-2-2.jpg')}}" alt="">--}}
                                                        </a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="3" tabindex="0">{{$rproduct->name}}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>${{$rproduct->regular_price}} </span>
                                                        <span class="old-price">${{$rproduct->sell_price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach($categories as $category)
                                    <li><a href="{{route('product.category',['slug'=>$category->name])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach($nproducts as $nproduct)
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{asset('assets/imgs/products')}}/{{$nproduct->image}}" alt="{{$product->name}}">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="{{route('product.details',['slug'=>$nproduct->slug])}}">{{$nproduct->name}}</a></h5>
                                    <p class="price mb-0 mt-5">${{$nproduct->regular_price}}</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
