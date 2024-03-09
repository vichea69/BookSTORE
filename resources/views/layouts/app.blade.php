<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Reading Books Store</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/logo/logo2.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @livewireStyles
</head>

<body>
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i
                                        class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/1600px-Flag_of_Cambodia.svg.png?20230518014357"
                                                alt="">
                                            Khmer</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great Book up to 50% off <a href="#">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="#">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        @auth
                            <ul>
                                <li><i class="fi-rs-user"></i> {{Auth::user()->name}} /
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <a href="{{route('logout')}}"
                                           onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul>

                                <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a> / <a
                                        href="{{route('register')}}">Sign Up</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                            <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.2,3.2)"><path d="M40,71.5c-1.554,0 -3.045,-0.668 -4.091,-1.834l-0.148,-0.166h-33.094c-1.195,0 -2.167,-0.972 -2.167,-2.167v-50.666c0,-1.195 0.972,-2.167 2.167,-2.167h74.666c1.195,0 2.167,0.972 2.167,2.167v50.666c0,1.195 -0.972,2.167 -2.167,2.167h-33.094l-0.148,0.166c-1.046,1.166 -2.537,1.834 -4.091,1.834z" fill="#8bb7f0"></path><path d="M77.333,15c0.919,0 1.667,0.748 1.667,1.667v50.667c0,0.918 -0.748,1.666 -1.667,1.666h-32.87h-0.446l-0.298,0.332c-0.951,1.06 -2.306,1.668 -3.719,1.668c-1.413,0 -2.768,-0.608 -3.719,-1.668l-0.298,-0.332h-0.446h-32.87c-0.919,0 -1.667,-0.748 -1.667,-1.667v-50.666c0,-0.919 0.748,-1.667 1.667,-1.667h74.666M77.333,14h-74.666c-1.473,0 -2.667,1.194 -2.667,2.667v50.667c0,1.472 1.194,2.666 2.667,2.666h32.87c1.099,1.225 2.688,2 4.463,2c1.775,0 3.365,-0.775 4.463,-2h32.87c1.473,0 2.667,-1.194 2.667,-2.667v-50.666c0,-1.473 -1.194,-2.667 -2.667,-2.667z" fill="#4e7ab5"></path><path d="M38.473,67.5c-0.25,-2.247 -2.16,-4 -4.473,-4h-29.5v-55h30.167c2.681,0 4.938,2.476 4.961,2.501l0.372,0.413l0.372,-0.413c0.022,-0.025 2.28,-2.501 4.961,-2.501h30.167v55h-29.5c-2.313,0 -4.223,1.753 -4.473,4z" fill="#ffffff"></path><path d="M75,9v54h-29c-2.415,0 -4.435,1.721 -4.9,4h-2.2c-0.465,-2.279 -2.485,-4 -4.9,-4h-29v-54h29.667c2.451,0 4.569,2.312 4.588,2.334l0.743,0.826l0.745,-0.825c0.022,-0.023 2.139,-2.335 4.59,-2.335h29.667M76,8h-30.667c-2.945,0 -5.333,2.667 -5.333,2.667c0,0 -2.388,-2.667 -5.333,-2.667h-30.667v56h30c2.209,0 4,1.791 4,4h4c0,-2.209 1.791,-4 4,-4h30v-56z" fill="#788b9c"></path><path d="M45.333,9c-2.431,0 -4.567,2.31 -4.588,2.334l-0.745,0.832v54.834h1.1c0.465,-2.279 2.485,-4 4.9,-4h29v-54z" fill="#e1ebf2"></path><g fill="#66798f"><path d="M12,35h22v1h-22zM12,19h22v1h-22zM12,27h22v1h-22zM12,43h22v1h-22zM46,35h22v1h-22zM46,43h22v1h-22zM46,19h22v1h-22zM46,27h22v1h-22zM46,51h12v1h-12zM12,51h22v1h-22z"></path></g></g></g>
                        </svg>
                           </a>
                </div>
                <div class="header-right">
                    @livewire('header-search-component')
                    <div class="header-action-right">
                        <div class="header-action-2">
                            @livewire('cart-icon-component')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0,0,256,256">
                            <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.2,3.2)"><path d="M40,71.5c-1.554,0 -3.045,-0.668 -4.091,-1.834l-0.148,-0.166h-33.094c-1.195,0 -2.167,-0.972 -2.167,-2.167v-50.666c0,-1.195 0.972,-2.167 2.167,-2.167h74.666c1.195,0 2.167,0.972 2.167,2.167v50.666c0,1.195 -0.972,2.167 -2.167,2.167h-33.094l-0.148,0.166c-1.046,1.166 -2.537,1.834 -4.091,1.834z" fill="#8bb7f0"></path><path d="M77.333,15c0.919,0 1.667,0.748 1.667,1.667v50.667c0,0.918 -0.748,1.666 -1.667,1.666h-32.87h-0.446l-0.298,0.332c-0.951,1.06 -2.306,1.668 -3.719,1.668c-1.413,0 -2.768,-0.608 -3.719,-1.668l-0.298,-0.332h-0.446h-32.87c-0.919,0 -1.667,-0.748 -1.667,-1.667v-50.666c0,-0.919 0.748,-1.667 1.667,-1.667h74.666M77.333,14h-74.666c-1.473,0 -2.667,1.194 -2.667,2.667v50.667c0,1.472 1.194,2.666 2.667,2.666h32.87c1.099,1.225 2.688,2 4.463,2c1.775,0 3.365,-0.775 4.463,-2h32.87c1.473,0 2.667,-1.194 2.667,-2.667v-50.666c0,-1.473 -1.194,-2.667 -2.667,-2.667z" fill="#4e7ab5"></path><path d="M38.473,67.5c-0.25,-2.247 -2.16,-4 -4.473,-4h-29.5v-55h30.167c2.681,0 4.938,2.476 4.961,2.501l0.372,0.413l0.372,-0.413c0.022,-0.025 2.28,-2.501 4.961,-2.501h30.167v55h-29.5c-2.313,0 -4.223,1.753 -4.473,4z" fill="#ffffff"></path><path d="M75,9v54h-29c-2.415,0 -4.435,1.721 -4.9,4h-2.2c-0.465,-2.279 -2.485,-4 -4.9,-4h-29v-54h29.667c2.451,0 4.569,2.312 4.588,2.334l0.743,0.826l0.745,-0.825c0.022,-0.023 2.139,-2.335 4.59,-2.335h29.667M76,8h-30.667c-2.945,0 -5.333,2.667 -5.333,2.667c0,0 -2.388,-2.667 -5.333,-2.667h-30.667v56h30c2.209,0 4,1.791 4,4h4c0,-2.209 1.791,-4 4,-4h30v-56z" fill="#788b9c"></path><path d="M45.333,9c-2.431,0 -4.567,2.31 -4.588,2.334l-0.745,0.832v54.834h1.1c0.465,-2.279 2.485,-4 4.9,-4h29v-54z" fill="#e1ebf2"></path><g fill="#66798f"><path d="M12,35h22v1h-22zM12,19h22v1h-22zM12,27h22v1h-22zM12,43h22v1h-22zM46,35h22v1h-22zM46,43h22v1h-22zM46,19h22v1h-22zM46,27h22v1h-22zM46,51h12v1h-12zM12,51h22v1h-22z"></path></g></g></g>
                        </svg></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="/">Home </a></li>
{{--                                <li><a href="">About</a></li>--}}
                                <li><a href="{{route('shop')}}">Shop</a></li>
{{--                                <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>--}}
{{--                                </li>--}}
{{--                                <li><a href="">Blog </a></li>--}}
{{--                                <li><a href="">Contact</a></li>--}}
                                @auth
                                    <li>
                                        <a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                <li><a href="#">Coupons</a></li>
                                                <li><a href="#">Orders</a></li>
                                                <li><a href="#">Customers</a></li>
                                            </ul>
                                        @elseif(Auth::user()->utype == 'SELL')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('seller.dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{route('seller.product')}}">Products</a></li>
                                            </ul>
                                        @else {{-- Add this else block --}}
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                        </ul>
                                        @endif
                                    </li>
                                @endauth

                            </ul>

                        </nav>
                    </div>
                </div>
{{--                <div class="hotline d-none d-lg-block ">--}}
{{--                    <p><i></i><span class="text-brand">Reading Book Store</span> </p>--}}
{{--                </div>--}}
                <style>
                    @keyframes myAnimation {
                        0% {
                            transform: translateX(5px);
                        }
                        50% {
                            transform: translateX(0px);
                        }
                        100% {
                            transform: translateX(5px);
                        }
                    }
                    .animated-svg {
                        animation: myAnimation 2s infinite;
                    }
                </style>
                <div class="hotline d-none d-lg-block">
                    <p style="margin: 0;">
                        <svg class="animated-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 64 64">
                            <path fill="#cda1a7" stroke="#8d6c9f" stroke-miterlimit="10" stroke-width="2" d="M7,9H5c-1.105,0-2,0.895-2,2v40 c0,1.105,0.895,2,2,2h21.22c1.046,0,1.958,0.712,2.212,1.727v0.001C28.766,56.063,29.966,57,31.342,57h3.315 c1.377,0,2.577-0.937,2.91-2.272v-0.001C37.822,53.712,38.734,53,39.78,53H61c1.105,0,2-0.895,2-2V11c0-1.105-0.895-2-2-2h-2H7z"></path><path fill="#faefde" d="M57,7H37c-2.209,0-4,1.791-4,4c0-2.209-1.791-4-4-4H9C7.895,7,7,7.895,7,9v38c0,1.105,0.895,2,2,2 h20c2.209,0,4,1.791,4,4c0-2.209,1.791-4,4-4h20c1.105,0,2-0.895,2-2V9C59,7.895,58.105,7,57,7z"></path><path fill="none" stroke="#8d6c9f" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M57,7H37c-2.209,0-4,1.791-4,4c0-2.209-1.791-4-4-4H9C7.895,7,7,7.895,7,9v38c0,1.105,0.895,2,2,2h20c2.209,0,4,1.791,4,4 c0-2.209,1.791-4,4-4h20c1.105,0,2-0.895,2-2V9C59,7.895,58.105,7,57,7z"></path><path fill="#8d6c9f" d="M39,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C38,15.553,38.448,16,39,16z"></path><path fill="#8d6c9f" d="M44,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C43,15.553,43.448,16,44,16z"></path><path fill="#8d6c9f" d="M49,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C48,15.553,48.448,16,49,16z"></path><path fill="#8d6c9f" d="M54,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C53,15.553,53.448,16,54,16z"></path><path fill="#faefde" d="M57,7H37c-2.209,0-4,1.791-4,4c0-2.209-1.791-4-4-4H9C7.895,7,7,7.895,7,9v38c0,1.105,0.895,2,2,2 h20c2.209,0,4,1.791,4,4c0-2.209,1.791-4,4-4h20c1.105,0,2-0.895,2-2V9C59,7.895,58.105,7,57,7z"></path><path fill="#efd8be" d="M39,7h-2c-2.209,0-4,1.791-4,4v41l2.333-3H39V7z"></path><path fill="#8d6c9f" d="M12,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C11,15.553,11.448,16,12,16z"></path><path fill="#8d6c9f" d="M17,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C16,15.553,16.448,16,17,16z"></path><path fill="#8d6c9f" d="M22,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C21,15.553,21.448,16,22,16z"></path><path fill="#8d6c9f" d="M27,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C26,15.553,26.448,16,27,16z"></path><g><path fill="#8d6c9f" d="M39,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C38,15.553,38.448,16,39,16z"></path><path fill="#8d6c9f" d="M44,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C43,15.553,43.448,16,44,16z"></path><path fill="#8d6c9f" d="M49,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C48,15.553,48.448,16,49,16z"></path><path fill="#8d6c9f" d="M54,16c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C53,15.553,53.448,16,54,16z"></path></g><g><path fill="#8d6c9f" d="M33,40c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1s1-0.447,1-1v-4C34,40.447,33.552,40,33,40z"></path><path fill="#8d6c9f" d="M33,9c-0.552,0-1,0.448-1,1v27c0,0.553,0.448,1,1,1c0.553,0,1-0.447,1-1V10 C34,9.448,33.553,9,33,9z"></path></g><g><path fill="none" stroke="#8d6c9f" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M57,7H37c-2.209,0-4,1.791-4,4c0-2.209-1.791-4-4-4H9C7.895,7,7,7.895,7,9v38c0,1.105,0.895,2,2,2h20c2.209,0,4,1.791,4,4 c0-2.209,1.791-4,4-4h20c1.105,0,2-0.895,2-2V9C59,7.895,58.105,7,57,7z"></path></g>
                        </svg>
                        <span class="text-brand" style="margin-left: 10px">Reading Book Store</span>
                    </p>
                </div>




                {{--                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>--}}
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            @livewire('cart-icon-component')
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0,0,256,256">
                        <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.2,3.2)"><path d="M40,71.5c-1.554,0 -3.045,-0.668 -4.091,-1.834l-0.148,-0.166h-33.094c-1.195,0 -2.167,-0.972 -2.167,-2.167v-50.666c0,-1.195 0.972,-2.167 2.167,-2.167h74.666c1.195,0 2.167,0.972 2.167,2.167v50.666c0,1.195 -0.972,2.167 -2.167,2.167h-33.094l-0.148,0.166c-1.046,1.166 -2.537,1.834 -4.091,1.834z" fill="#8bb7f0"></path><path d="M77.333,15c0.919,0 1.667,0.748 1.667,1.667v50.667c0,0.918 -0.748,1.666 -1.667,1.666h-32.87h-0.446l-0.298,0.332c-0.951,1.06 -2.306,1.668 -3.719,1.668c-1.413,0 -2.768,-0.608 -3.719,-1.668l-0.298,-0.332h-0.446h-32.87c-0.919,0 -1.667,-0.748 -1.667,-1.667v-50.666c0,-0.919 0.748,-1.667 1.667,-1.667h74.666M77.333,14h-74.666c-1.473,0 -2.667,1.194 -2.667,2.667v50.667c0,1.472 1.194,2.666 2.667,2.666h32.87c1.099,1.225 2.688,2 4.463,2c1.775,0 3.365,-0.775 4.463,-2h32.87c1.473,0 2.667,-1.194 2.667,-2.667v-50.666c0,-1.473 -1.194,-2.667 -2.667,-2.667z" fill="#4e7ab5"></path><path d="M38.473,67.5c-0.25,-2.247 -2.16,-4 -4.473,-4h-29.5v-55h30.167c2.681,0 4.938,2.476 4.961,2.501l0.372,0.413l0.372,-0.413c0.022,-0.025 2.28,-2.501 4.961,-2.501h30.167v55h-29.5c-2.313,0 -4.223,1.753 -4.473,4z" fill="#ffffff"></path><path d="M75,9v54h-29c-2.415,0 -4.435,1.721 -4.9,4h-2.2c-0.465,-2.279 -2.485,-4 -4.9,-4h-29v-54h29.667c2.451,0 4.569,2.312 4.588,2.334l0.743,0.826l0.745,-0.825c0.022,-0.023 2.139,-2.335 4.59,-2.335h29.667M76,8h-30.667c-2.945,0 -5.333,2.667 -5.333,2.667c0,0 -2.388,-2.667 -5.333,-2.667h-30.667v56h30c2.209,0 4,1.791 4,4h4c0,-2.209 1.791,-4 4,-4h30v-56z" fill="#788b9c"></path><path d="M45.333,9c-2.431,0 -4.567,2.31 -4.588,2.334l-0.745,0.832v54.834h1.1c0.465,-2.279 2.485,-4 4.9,-4h29v-54z" fill="#e1ebf2"></path><g fill="#66798f"><path d="M12,35h22v1h-22zM12,19h22v1h-22zM12,27h22v1h-22zM12,43h22v1h-22zM46,35h22v1h-22zM46,43h22v1h-22zM46,19h22v1h-22zM46,27h22v1h-22zM46,51h12v1h-12zM12,51h22v1h-22z"></path></g></g></g>
                    </svg></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{route('shop')}}">shop</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Blog</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Khmer</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href=""> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{route('login')}}">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{route('register')}}">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+885) 0000-000-000 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

{{$slot}}

<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
{{--                            <img class="icon-email" src="{{asset('assets/imgs/theme/icons/icon-email.svg')}}" alt="">--}}
{{--                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>--}}
                        </div>
                        <div class="col my-4 my-md-0 des">
{{--                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first--}}
{{--                                    shopping.</strong></h5>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
{{--                    <form class="form-subcriber d-flex wow fadeIn animated">--}}
{{--                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">--}}
{{--                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>--}}
{{--                    </form>--}}
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                                    <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.2,3.2)"><path d="M40,71.5c-1.554,0 -3.045,-0.668 -4.091,-1.834l-0.148,-0.166h-33.094c-1.195,0 -2.167,-0.972 -2.167,-2.167v-50.666c0,-1.195 0.972,-2.167 2.167,-2.167h74.666c1.195,0 2.167,0.972 2.167,2.167v50.666c0,1.195 -0.972,2.167 -2.167,2.167h-33.094l-0.148,0.166c-1.046,1.166 -2.537,1.834 -4.091,1.834z" fill="#8bb7f0"></path><path d="M77.333,15c0.919,0 1.667,0.748 1.667,1.667v50.667c0,0.918 -0.748,1.666 -1.667,1.666h-32.87h-0.446l-0.298,0.332c-0.951,1.06 -2.306,1.668 -3.719,1.668c-1.413,0 -2.768,-0.608 -3.719,-1.668l-0.298,-0.332h-0.446h-32.87c-0.919,0 -1.667,-0.748 -1.667,-1.667v-50.666c0,-0.919 0.748,-1.667 1.667,-1.667h74.666M77.333,14h-74.666c-1.473,0 -2.667,1.194 -2.667,2.667v50.667c0,1.472 1.194,2.666 2.667,2.666h32.87c1.099,1.225 2.688,2 4.463,2c1.775,0 3.365,-0.775 4.463,-2h32.87c1.473,0 2.667,-1.194 2.667,-2.667v-50.666c0,-1.473 -1.194,-2.667 -2.667,-2.667z" fill="#4e7ab5"></path><path d="M38.473,67.5c-0.25,-2.247 -2.16,-4 -4.473,-4h-29.5v-55h30.167c2.681,0 4.938,2.476 4.961,2.501l0.372,0.413l0.372,-0.413c0.022,-0.025 2.28,-2.501 4.961,-2.501h30.167v55h-29.5c-2.313,0 -4.223,1.753 -4.473,4z" fill="#ffffff"></path><path d="M75,9v54h-29c-2.415,0 -4.435,1.721 -4.9,4h-2.2c-0.465,-2.279 -2.485,-4 -4.9,-4h-29v-54h29.667c2.451,0 4.569,2.312 4.588,2.334l0.743,0.826l0.745,-0.825c0.022,-0.023 2.139,-2.335 4.59,-2.335h29.667M76,8h-30.667c-2.945,0 -5.333,2.667 -5.333,2.667c0,0 -2.388,-2.667 -5.333,-2.667h-30.667v56h30c2.209,0 4,1.791 4,4h4c0,-2.209 1.791,-4 4,-4h30v-56z" fill="#788b9c"></path><path d="M45.333,9c-2.431,0 -4.567,2.31 -4.588,2.334l-0.745,0.832v54.834h1.1c0.465,-2.279 2.485,-4 4.9,-4h29v-54z" fill="#e1ebf2"></path><g fill="#66798f"><path d="M12,35h22v1h-22zM12,19h22v1h-22zM12,27h22v1h-22zM12,43h22v1h-22zM46,35h22v1h-22zM46,43h22v1h-22zM46,19h22v1h-22zM46,27h22v1h-22zM46,51h12v1h-12zM12,51h22v1h-22z"></path></g></g></g>
                                </svg></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>Cambodia
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+885 0000-000-000
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Email: </strong>smart.vichea@gmail.com
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#">
                                <svg width="30" height="30" viewBox="0 0 80 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="40" cy="40" r="35" fill="url(#paint0_linear)"/>
                                    <path
                                        d="M53.0343 50.7039L54.589 40.8252H44.863V34.4175C44.863 31.7143 46.2192 29.0777 50.5754 29.0777H55V20.6675C55 20.6675 50.9863 20 47.1507 20C39.1371 20 33.9042 24.7323 33.9042 33.2961V40.8252H25V50.7039H33.9042V74.5862C35.6918 74.8599 37.5206 75 39.3836 75C41.2466 75 43.0754 74.8599 44.863 74.5862V50.7039H53.0343Z"
                                        fill="white"/>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="40" y1="5" x2="40" y2="74.7924"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#18ACFE"/>
                                            <stop offset="1" stop-color="#0163E0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="30" height="30" viewBox="0 0 80 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M29.4719 70C21.3844 70 13.8454 67.6477 7.5 63.589C12.8875 63.9377 22.3952 63.1028 28.3089 57.462C19.4127 57.0538 15.4007 50.2307 14.8773 47.3149C15.6332 47.6065 19.2383 47.9564 21.2733 47.14C11.0397 44.574 9.46982 35.5933 9.81869 32.8524C11.7375 34.1937 14.9936 34.6602 16.2728 34.5436C6.73698 27.7206 10.1676 17.4569 11.8538 15.2409C18.6971 24.7217 28.953 30.0464 41.6409 30.3426C41.4017 29.2934 41.2754 28.2011 41.2754 27.0791C41.2754 19.0273 47.7835 12.5 55.8117 12.5C60.0064 12.5 63.786 14.2819 66.4392 17.1321C69.2423 16.4753 73.4608 14.9377 75.5231 13.608C74.4836 17.3403 71.2473 20.4537 69.2897 21.6077C69.306 21.6469 69.2738 21.5683 69.2897 21.6077C71.0093 21.3476 75.662 20.4534 77.5 19.2064C76.591 21.3031 73.16 24.7893 70.3443 26.7411C70.8682 49.8451 53.1912 70 29.4719 70Z"
                                        fill="#47ACDF"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="30" height="30" viewBox="0 0 80 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect x="5" y="5" width="70" height="70" rx="15" fill="url(#paint0_radial)"/>
                                    <rect x="5" y="5" width="70" height="70" rx="15" fill="url(#paint1_radial)"/>
                                    <rect x="5" y="5" width="70" height="70" rx="15" fill="url(#paint2_radial)"/>
                                    <path
                                        d="M57.5 26.25C57.5 28.3211 55.8211 30 53.75 30C51.6789 30 50 28.3211 50 26.25C50 24.1789 51.6789 22.5 53.75 22.5C55.8211 22.5 57.5 24.1789 57.5 26.25Z"
                                        fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40 52.5C46.9036 52.5 52.5 46.9036 52.5 40C52.5 33.0964 46.9036 27.5 40 27.5C33.0964 27.5 27.5 33.0964 27.5 40C27.5 46.9036 33.0964 52.5 40 52.5ZM40 47.5C44.1421 47.5 47.5 44.1421 47.5 40C47.5 35.8579 44.1421 32.5 40 32.5C35.8579 32.5 32.5 35.8579 32.5 40C32.5 44.1421 35.8579 47.5 40 47.5Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15 39C15 30.5992 15 26.3988 16.6349 23.1901C18.073 20.3677 20.3677 18.073 23.1901 16.6349C26.3988 15 30.5992 15 39 15H41C49.4008 15 53.6012 15 56.8099 16.6349C59.6323 18.073 61.927 20.3677 63.3651 23.1901C65 26.3988 65 30.5992 65 39V41C65 49.4008 65 53.6012 63.3651 56.8099C61.927 59.6323 59.6323 61.927 56.8099 63.3651C53.6012 65 49.4008 65 41 65H39C30.5992 65 26.3988 65 23.1901 63.3651C20.3677 61.927 18.073 59.6323 16.6349 56.8099C15 53.6012 15 49.4008 15 41V39ZM39 20H41C45.2829 20 48.1944 20.0039 50.4448 20.1878C52.6369 20.3669 53.7579 20.6915 54.5399 21.0899C56.4215 22.0487 57.9513 23.5785 58.9101 25.4601C59.3085 26.2421 59.6331 27.3631 59.8122 29.5552C59.9961 31.8056 60 34.7171 60 39V41C60 45.2829 59.9961 48.1944 59.8122 50.4448C59.6331 52.6369 59.3085 53.7579 58.9101 54.5399C57.9513 56.4215 56.4215 57.9513 54.5399 58.9101C53.7579 59.3085 52.6369 59.6331 50.4448 59.8122C48.1944 59.9961 45.2829 60 41 60H39C34.7171 60 31.8056 59.9961 29.5552 59.8122C27.3631 59.6331 26.2421 59.3085 25.4601 58.9101C23.5785 57.9513 22.0487 56.4215 21.0899 54.5399C20.6915 53.7579 20.3669 52.6369 20.1878 50.4448C20.0039 48.1944 20 45.2829 20 41V39C20 34.7171 20.0039 31.8056 20.1878 29.5552C20.3669 27.3631 20.6915 26.2421 21.0899 25.4601C22.0487 23.5785 23.5785 22.0487 25.4601 21.0899C26.2421 20.6915 27.3631 20.3669 29.5552 20.1878C31.8056 20.0039 34.7171 20 39 20Z"
                                          fill="white"/>
                                    <defs>
                                        <radialGradient id="paint0_radial" cx="0" cy="0" r="1"
                                                        gradientUnits="userSpaceOnUse"
                                                        gradientTransform="translate(30 57.5) rotate(-55.3758) scale(63.799)">
                                            <stop stop-color="#B13589"/>
                                            <stop offset="0.79309" stop-color="#C62F94"/>
                                            <stop offset="1" stop-color="#8A3AC8"/>
                                        </radialGradient>
                                        <radialGradient id="paint1_radial" cx="0" cy="0" r="1"
                                                        gradientUnits="userSpaceOnUse"
                                                        gradientTransform="translate(27.5 77.5) rotate(-65.1363) scale(56.4856)">
                                            <stop stop-color="#E0E8B7"/>
                                            <stop offset="0.444662" stop-color="#FB8A2E"/>
                                            <stop offset="0.71474" stop-color="#E2425C"/>
                                            <stop offset="1" stop-color="#E2425C" stop-opacity="0"/>
                                        </radialGradient>
                                        <radialGradient id="paint2_radial" cx="0" cy="0" r="1"
                                                        gradientUnits="userSpaceOnUse"
                                                        gradientTransform="translate(1.25 7.5) rotate(-8.1301) scale(97.2272 20.7959)">
                                            <stop offset="0.156701" stop-color="#406ADC"/>
                                            <stop offset="0.467799" stop-color="#6A45BE"/>
                                            <stop offset="1" stop-color="#6A45BE" stop-opacity="0"/>
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="30" height="30" viewBox="0 0 80 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="40" cy="40" r="35" fill="white"/>
                                    <path
                                        d="M40 75C59.33 75 75 59.33 75 40C75 20.67 59.33 5 40 5C20.67 5 5 20.67 5 40C5 54.2003 13.4567 66.4254 25.6087 71.9138C25.625 71.5352 25.6434 71.188 25.6591 70.8902C25.6805 70.4844 25.6971 70.1705 25.6971 69.994C25.6971 68.9423 26.4123 63.7259 26.4123 63.7259L30.7873 45.7632C30.1142 44.6694 29.6094 42.3557 29.6094 40.5889C29.6094 32.4279 34.1527 30.661 36.9291 30.661C40.4627 30.661 41.262 34.4892 41.262 37.3077C41.262 38.7985 40.4887 41.1321 39.6929 43.5335C38.8494 46.0786 37.9808 48.6999 37.9808 50.4747C37.9808 53.9243 41.3882 55.649 43.744 55.649C49.97 55.649 55.6911 47.8245 55.6911 40C55.6911 32.1755 52.0313 22.7103 40.0421 22.7103C28.0529 22.7103 22.6683 31.8389 22.6683 38.8221C22.6683 43.5336 24.4351 46.9831 25.3185 47.5721C25.5709 47.7964 26 48.4892 25.6971 49.4651C25.3942 50.4411 24.8418 52.6202 24.6034 53.5877C24.5753 53.8121 24.3089 54.1935 23.4676 53.9243C22.4159 53.5877 15.7272 49.381 15.7272 38.8221C15.7272 28.2632 24.0144 15.9795 40.0421 15.9795C56.0697 15.9795 64.2728 26.7488 64.2728 40C64.2728 53.2512 53.5457 61.7067 45.3846 61.7067C38.8558 61.7067 36.2981 58.79 35.8353 57.3317L33.3534 66.7968C32.7673 68.3671 31.6741 71.1894 30.3259 73.6459C33.3984 74.5277 36.644 75 40 75Z"
                                        fill="#BB0F23"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="30" height="30" viewBox="0 0 80 80" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="40" cy="40" r="35" fill="url(#paint0_linear)"/>
                                    <path
                                        d="M57.4664 25.522C57.7781 23.5083 55.8635 21.9189 54.0731 22.705L18.412 38.3621C17.1281 38.9258 17.222 40.8706 18.5537 41.2947L25.9079 43.6367C27.3115 44.0837 28.8313 43.8526 30.057 43.0058L46.6374 31.5507C47.1374 31.2052 47.6824 31.9162 47.2552 32.3566L35.3203 44.6616C34.1625 45.8553 34.3923 47.8779 35.7849 48.7512L49.1474 57.1307C50.6461 58.0706 52.5742 57.1264 52.8545 55.3154L57.4664 25.522Z"
                                        fill="white"/>
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="40" y1="5" x2="40" y2="75"
                                                        gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#37BBFE"/>
                                            <stop offset="1" stop-color="#007DBB"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Team member</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">Sao Vichheka</a></li>
                        <li><a href="#">Srin Vichea</a></li>
                        <li><a href="#">Sem Monytola</a></li>
                        <li><a href="#">Han Sokna</a></li>
                        <li><a href="#">PP GROUP 29</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mob-center">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated mob-app">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                                                                  src="{{asset('assets/imgs/theme/app-store.jpg')}}"
                                                                                  alt=""></a>
                                <a href="#" class="hover-up"><img src="{{asset('assets/imgs/theme/google-play.jpg')}}"
                                                                  alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="{{asset('assets/imgs/theme/payment-method.png')}}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated mob-center">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">
                    <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    &copy; <strong class="text-brand">Reading Book Store</strong> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Vendor JS-->
{{--<script src="{{ asset('js/alpine.js') }}"></script>--}}
<script src="{{ asset('js/livewire.js') }}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.js')}}"></script>
<!-- Template  JS -->
<script src="{{asset('assets/js/main.js?v=3.3')}}"></script>
<script src="{{asset('assets/js/shop.js?v=3.3')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
{{--<script src="{{ mix('js/app.js') }}"></script>--}}
@livewireScripts
</body>

</html>
