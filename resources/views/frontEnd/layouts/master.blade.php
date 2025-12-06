<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') - {{ $generalsetting->name ?? null }}</title>

    <meta name="facebook-domain-verification" content="2f7vvnzbpug91a8t8gp4ei177bkf2x" />
    <!-- App favicon -->

    <link rel="shortcut icon" href="{{ asset($generalsetting->favicon) }}" alt="Super Ecommerce Favicon" />
    <meta name="author" content="Digital Web Solution Bangladesh" />


    <link rel="canonical" href="" />
    @stack('seo')
    @stack('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/mobile-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/select2.min.css') }}" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{ asset('public/backEnd/') }}/assets/css/toastr.min.css" />

    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/wsit-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/main.css') }}" />
    @foreach ($pixels as $pixel)
    @endforeach


    <!-- TikTok Pixel Code Start -->
    <script>
        ! function(w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
                "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"
            ], ttq.setAndDefer = function(t, e) {
                t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function(t) {
                for (
                    var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function(e, n) {
                var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                    o = n && n.partner;
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                    ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                n = document.createElement("script");
                n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
                e = document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(n, e)
            };


            ttq.load('D2HCQ23C77UCCBANIUEG');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->




    @foreach ($gtm_code as $gtm)
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })
            (window, document, 'script', 'dataLayer', 'GTM-TTX3FRHZ');
        </script>
        <!-- End Google Tag Manager -->
    @endforeach

    <style>
        .cat_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo-area {
            padding: 10px 0;
        }

        .main-search {
            margin: 15px 0px 15px 163px;
            position: relative;
        }

        .header-list-items {
            text-align: right;
            margin: 16px 0;
        }

        ul.social_link {
            text-align: center;
            margin-top: 0px;
        }

        .campaign_item {
            height: 80% !important;
        }

        ul.social_link li {
            display: inline-block;
            margin-right: 0px;
            font-size: 20px;
        }

        .footer-about ul li a {
            display: block;
            height: 35px;
            line-height: 35px;
            width: 35px;
            border-radius: 50px;
            margin: 0 2px;
            text-align: center;
            color: #000000;
        }

        .slider-item {
            width: 100%;
            height: 480px;
        }

        .main-logo {
            height: 70px;
            text-align: center;
        }

        .footer-about a img {
            height: auto;
            width: 250px;
            object-fit: contain;
        }

        .product_item_inner .sale-badge {
            position: absolute;
            top: 0;
            right: 4px;
            z-index: 1;
        }


        .product-details-discount-badge span.sale-badge-text {
            background-color: #28a745;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }

        }

        .indicator_thumb {
            display: grid;
            grid-template-columns: .5fr 1fr 1fr 1fr;
            grid-gap: 5px;
            margin: 10px 0;
        }

        .product_item_inner .sale-badge-box {
            background-color: #28a745;
            border-radius: 50%;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /*.mobile_home{*/

        /*	background: #3AC371 !important;*/

        /*	box-shadow: 2px 2px 3px 2px rgba(0,0,0,.3);*/
        /*}*/


        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .slider-item {
                width: 100%;
                height: 190px;
            }

            .footer-about a img {
                height: auto;
                width: 190px;
                object-fit: contain;
            }

            .footer-menu {
                margin-bottom: 60px;
            }

            .footer-about {
                text-align: start;
                padding: 0;

            }

            ul.social_link {

                margin-top: 0px;
            }

            .topcategory .cat_item .cat_img a img {

                width: 80px !important;
                height: 80px;
                border-radius: 40%;
                border: 1px solid #100;
            }

            .footer-menu .stay_conn a {
                text-align: center !important;
            }

            .footer-hotlint {

                font-size: 14px;
                font-weight: 500;

            }

            .footer-about p {
                text-align: start;
                font-size: 14px;
            }

            .footer-menu {
                margin-bottom: 0;
            }

            .footer-menu ul li a {
                text-align: start;

            }

            .mobile_home {
                /*border: 2px solid #ddd;*/
                border: none !important;

                background: none !important;
                padding-top: 0px !important;

                border-radius: 50%;
                width: 75px;
                height: 75px;
                position: absulate;
            }

            .dimage_item img {
                height: 300px !important;
                object-fit: cover;
            }

            .indicator_thumb {
                display: grid;
                grid-template-columns: 2fr 1fr 0fr 2fr;
                grid-gap: 5px;
                margin: 10px 0;
            }

            .indicator-item img {
                height: 130px !important;
                width: 100%;
                object-fit: contain;
            }

            #content {
                margin-left: 0;
                padding-top: 0;
                margin-top: 80px;
            }
        }

        #myOverlay {
            display: none;
        }
    </style>
</head>

<body class="gotop">
    @php $subtotal = Cart::instance('shopping')->subtotal(); @endphp
    <div class="mobile-menu">
        <div class="mobile-menu-logo">
            <div class="logo-image">
                <img src="{{ asset($generalsetting->white_logo) }}" alt="" />
            </div>
            <div class="mobile-menu-close">
                <i class="fa fa-times"></i>
            </div>
        </div>

        <ul class="first-nav">
            @foreach ($menucategories as $scategory)
                <li class="parent-category" style="border: solid #3c7d17 1px;     margin: 3px;">
                    <a href="{{ url('category/' . $scategory->slug) }}" class="menu-category-name">
                        <img src="{{ asset($scategory->image) }}" alt="" class="side_cat_img" />
                        {{ $scategory->name }}
                    </a>
                    @if ($scategory->subcategories->count() > 0)
                        <span class="menu-category-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    @endif
                    <ul class="second-nav" style="display: none;">
                        @foreach ($scategory->subcategories as $subcategory)
                            <li class="parent-subcategory">
                                <a href="{{ url('subcategory/' . $subcategory->slug) }}"
                                    class="menu-subcategory-name">{{ $subcategory->subcategoryName }}</a>
                                @if ($subcategory->childcategories->count() > 0)
                                    <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                @endif
                                <ul class="third-nav" style="display: none;">
                                    @foreach ($subcategory->childcategories as $childcat)
                                        <li class="childcategory"><a href="{{ url('products/' . $childcat->slug) }}"
                                                class="menu-childcategory-name">{{ $childcat->childcategoryName }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <header id="navbar_top ">
        <div class="mobile-header sticky">
            <div class="mobile-logo">
                <div class="menu-bar">
                    <a class="toggle">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div class="menu-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset($generalsetting->white_logo) }}"
                            alt="" /></a>
                </div>

                <div class="menu-bag d-none">
                    <a href="{{ route('customer.checkout') }}">
                        <p class="margin-shopping">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="mobilecart-qty">{{ Cart::instance('shopping')->count() }}</span>
                        </p>
                    </a>
                </div>
                <div class="menu-bag">

                    <div onclick="openSearch()" class="margin-shopping">
                        <i class="fa fa-search fs-3"></i>
                    </div>

                </div>
            </div>
        </div>

        <div id="myOverlay" class="mobile-search">
            <form action="{{ route('search') }}">
                <input type="text" placeholder="Search Product ... " value=""
                    class="msearch_keyword msearch_click" name="keyword" />
                <button><i data-feather="search"></i></button>
            </form>
            <div class="search_result"></div>
        </div>
        <script>
            function openSearch() {
                var x = document.getElementById("myOverlay");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


        <div class="main-header">
            <!-- header to end -->
            <div class="logo-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="logo-header">
                                <div class="main-logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset($generalsetting->white_logo) }}" alt="" /></a>
                                </div>
                                <div class="main-search">
                                    <form action="{{ route('search') }}">
                                        <input type="text" placeholder="Search Product..."
                                            class="search_keyword search_click" name="keyword" />
                                        <button>
                                            <i data-feather="search"></i>
                                        </button>
                                    </form>
                                    <div class="search_result"></div>
                                </div>
                                <div class="header-list-items">
                                    <ul>
                                        <li class="track_btn">
                                            <a href="{{ route('customer.order_track') }}"> <i
                                                    class="fa fa-truck"></i>Track Order</a>
                                        </li>
                                        @if (Auth::guard('customer')->user())
                                            <li class="for_order">
                                                <p>
                                                    <a href="{{ route('customer.account') }}">
                                                        <i class="fa-regular fa-user"></i>

                                                        {{ Str::limit(Auth::guard('customer')->user()->name, 14) }}
                                                    </a>
                                                </p>
                                            </li>
                                        @else
                                            <li class="for_order">
                                                <p>
                                                    <a href="{{ route('customer.login') }}">
                                                        <i class="fa-regular fa-user"></i>
                                                        Login
                                                    </a>
                                                </p>
                                            </li>
                                        @endif

                                        <li class="cart-dialog" id="cart-qty">
                                            <a href="{{ route('customer.checkout') }}">
                                                <p class="margin-shopping">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                    <span>{{ Cart::instance('shopping')->count() }}</span>
                                                </p>
                                            </a>
                                            <div class="cshort-summary">
                                                <ul>
                                                    @foreach (Cart::instance('shopping')->content() as $key => $value)
                                                        <li>
                                                            <a href=""><img
                                                                    src="{{ asset($value->options->image) }}"
                                                                    alt="" /></a>
                                                        </li>
                                                        <li><a href="">{{ Str::limit($value->name, 30) }}</a>
                                                        </li>
                                                        <li>Qty: {{ $value->qty }}</li>
                                                        <li>
                                                            <p>৳{{ $value->price }}</p>
                                                            <button class="remove-cart cart_remove"
                                                                data-id="{{ $value->rowId }}"><i
                                                                    data-feather="x"></i></button>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <p><strong>সর্বমোট : ৳{{ $subtotal }}</strong></p>
                                                <a href="{{ route('customer.checkout') }}" class="go_cart"> অর্ডার
                                                    করুন </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="catagory_menu">
                                <ul>
                                    @foreach ($menucategories as $scategory)
                                        <li class="cat_bar ">
                                            <a href="{{ url('category/' . $scategory->slug) }}">
                                                <span class="cat_head">{{ $scategory->name }}</span>
                                                @if ($scategory->subcategories->count() > 0)
                                                    <i class="fa-solid fa-angle-down cat_down"></i>
                                                @endif
                                            </a>
                                            @if ($scategory->subcategories->count() > 0)
                                                <ul class="Cat_menu">
                                                    @foreach ($scategory->subcategories as $subcat)
                                                        <li class="Cat_list cat_list_hover">
                                                            <a href="{{ url('subcategory/' . $subcat->slug) }}">
                                                                <span>{{ Str::limit($subcat->subcategoryName, 25) }}</span>
                                                                @if ($subcat->childcategories->count() > 0)
                                                                    <i class="fa-solid fa-chevron-right cat_down"></i>
                                                                @endif
                                                            </a>
                                                            @if ($subcat->childcategories->count() > 0)
                                                                <ul class="child_menu">
                                                                    @foreach ($subcat->childcategories as $childcat)
                                                                        <li class="child_main">
                                                                            <a
                                                                                href="{{ url('products/' . $childcat->slug) }}">{{ $childcat->childcategoryName }}</a>

                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-header end -->
    </header>
    <div id="content">
        @yield('content')
    </div>
    <!-- content end -->




    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="footer-about">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset($generalsetting->white_logo) }}" alt="" />
                            </a>
                            <p>Largest product search engine, maximum, categorized online shopping mall and quickest
                                home delivery system.</p>



                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-3 mb-3 mb-sm-0 ">
                        <div class="footer-menu">
                            <ul>
                                <li class="title"><a>Contact Us</a></li>
                                <li class="text-left">
                                    <strong>Address:</strong> {{ $contact->address }}
                                </li>

                                <li class="">
                                    <a href="tel:{{ $contact->hotline }}" class="footer-hotlint ">Email:
                                        {{ $contact->email }}</a>
                                </li>
                                <li class="">
                                    <a href="tel:{{ $contact->hotline }}" class="footer-hotlint ">Phone:
                                        {{ $contact->hotline }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-sm-2 mb-3 mb-sm-0 col-12">
                        <div class="footer-menu">
                            <ul>
                                <li class="title"><a>Useful Link</a></li>
                                <li>
                                    <a href="{{ route('contact') }}"> <a
                                            href="{{ route('contact') }}">Contact</a></a>
                                </li>
                                @foreach ($pages as $page)
                                    <li><a
                                            href="{{ route('page', ['slug' => $page->slug]) }}">{{ $page->name }}</a>
                                    </li>
                                @endforeach

                                <a href="{{ route('customer.order_track') }}"> Tracking Your Order</a>
                                </li>
                                @foreach ($pagesright as $key => $value)
                                    <li>
                                        <a
                                            href="{{ route('page', ['slug' => $value->slug]) }}">{{ $value->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <!-- col end -->
                    <div class="col-sm-2 mb-5 mb-sm-0 premium-social">
                        <ul>
                            <li class="title stay_conn"><a>Stay Connected</a></li>
                        </ul>

                        <ul class="social_link">
                            @foreach ($socialicons as $value)
                                <li class="social_list">
                                    <a class="mobile-social-link" href="{{ $value->link }}" target="_blank">
                                        <i class="{{ $value->icon }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <style>
                        .premium-social .stay_conn a {
                            font-size: 18px;
                            font-weight: 700;
                            color: #222;
                            letter-spacing: 0.5px;
                            position: relative;
                            padding-bottom: 8px;
                            display: inline-block;

                        }

                        /* Title underline premium effect */
                        .premium-social .stay_conn a::after {
                            content: "";
                            width: 40px;
                            height: 3px;
                            background: linear-gradient(90deg, #ff4d4d, #1e73be);
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            border-radius: 4px;
                        }

                        .premium-social .social_link {
                            margin-top: 15px;
                            display: flex;
                            gap: 12px;
                            flex-wrap: wrap;
                        }

                        .premium-social .social_list {
                            list-style: none;
                        }

                        /* Premium circle icon */
                        .mobile-social-link {
                            width: 42px;
                            height: 42px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 50%;
                            color: #fff !important;
                            border: 1px solid #e5e5e5;
                            font-size: 18px;
                            color: #333;
                            transition: all 0.3s ease;
                            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
                            background: linear-gradient(135deg, #ff4d4d, #1e73be);
                        }

                        /* Hover gradient + scale premium effect */
                        .mobile-social-link:hover {

                            color: #fff !important;
                            border-color: transparent;
                            transform: translateY(-4px);
                            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
                        }

                        /* Mobile responsive */
                        @media (max-width: 576px) {
                            .premium-social {
                                text-align: center;
                            }

                            .premium-social .social_link {
                                justify-content: center;
                            }
                        }
                    </style>

                    <!-- col end -->
                </div>
            </div>
        </div>








    </footer>

    <div class="footer_nav">
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    <span><i class="fa-solid fa-home"></i></span> <span>Home</span>
                </a>
            </li>
            <!-- <li>-->
            <!--    <a class="toggle">-->
            <!--        <span>-->
            <!--            <i class="fa-solid fa-bars"></i>-->
            <!--        </span>-->
            <!--        <span>Categories</span>-->
            <!--    </a>-->
            <!--</li>-->

            <li>
                <a href="https://wa.me/8801851018193">
                    <span>
                        <i style="color: #28a745; font-size: 19px;" class="fa-brands fa-whatsapp"></i>
                    </span>
                    <span>Message</span>
                </a>
            </li>

            <li class="mobile_home">


                <!--         <a href="https://sobidha.com/hot-deals">-->
                <!--    <span>-->

                <!--       <i class="fa-solid fa-bolt-lightning" style="    font-size: 40px !important;!"></i>-->
                <!--    </span>-->

                <!--</a>-->
                <a href="https://sobidha.com/hot-deals"><img
                        src="https://i.ibb.co/xK2YVHJZ/IMG-20250531-WA0008-removebg-preview.png" alt="hotdeal"></a>




            </li>

            <li>
                <a href="{{ route('customer.checkout') }}">
                    <span>
                        <i style="color: #28a745;" class="fa-solid fa-cart-shopping"></i>
                    </span>
                    <span>Cart (<b class="mobilecart-qty">{{ Cart::instance('shopping')->count() }}</b>)</span>
                </a>
            </li>
            @if (Auth::guard('customer')->user())
                <li>
                    <a href="{{ route('customer.account') }}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('customer.login') }}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Account</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>


    <div class="scrolltop" style="">
        <div class="scroll">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>

    <!-- /. fixed sidebar -->

    <div id="custom-modal"></div>
    <div id="page-overlay"></div>
    <div id="loading">
        <div class="custom-loader"></div>
    </div>

    <script src="{{ asset('public/frontEnd/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/wsit-menu.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/mobile-menu-init.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- feather icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/toastr.min.js"></script>
    {!! Toastr::message() !!} @stack('script')
    <script>
        $(".quick_view").on("click", function() {
            var id = $(this).data("id");
            $("#loading").show();
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{ route('quickview') }}",
                    success: function(data) {
                        if (data) {
                            $("#custom-modal").html(data);
                            $("#custom-modal").show();
                            $("#loading").hide();
                            $("#page-overlay").show();
                        }
                    },
                });
            }
        });
    </script>
    <!-- quick view end -->
    <!-- cart js start -->
    <script>
        $(".addcartbutton").on("click", function() {
            var id = $(this).data("id");
            var qty = 1;
            if (id) {
                $.ajax({
                    cache: "false",
                    type: "GET",
                    url: "{{ url('add-to-cart') }}/" + id + "/" + qty,
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            toastr.success('Success', 'Product add to cart successfully');
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });
        $(".cart_store").on("click", function() {
            var id = $(this).data("id");
            var qty = $(this).parent().find("input").val();
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id,
                        qty: qty ? qty : 1
                    },
                    url: "{{ route('cart.store') }}",
                    success: function(data) {
                        if (data) {
                            toastr.success('Success', 'Product add to cart succfully');
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

        $(".cart_remove").on("click", function() {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{ route('cart.remove') }}",
                    success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart() + cart_summary();
                        }
                    },
                });
            }
        });

        $(".cart_increment").on("click", function() {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{ route('cart.increment') }}",
                    success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

        $(".cart_decrement").on("click", function() {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{ route('cart.decrement') }}",
                    success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

        function cart_count() {
            $.ajax({
                type: "GET",
                url: "{{ route('cart.count') }}",
                success: function(data) {
                    if (data) {
                        $("#cart-qty").html(data);
                    } else {
                        $("#cart-qty").empty();
                    }
                },
            });
        }

        function mobile_cart() {
            $.ajax({
                type: "GET",
                url: "{{ route('mobile.cart.count') }}",
                success: function(data) {
                    if (data) {
                        $(".mobilecart-qty").html(data);
                    } else {
                        $(".mobilecart-qty").empty();
                    }
                },
            });
        }

        function cart_summary() {
            $.ajax({
                type: "GET",
                url: "{{ route('shipping.charge') }}",
                dataType: "html",
                success: function(response) {
                    $(".cart-summary").html(response);
                },
            });
        }
    </script>
    <!-- cart js end -->
    <script>
        $(".search_click").on("keyup change", function() {
            var keyword = $(".search_keyword").val();
            $.ajax({
                type: "GET",
                data: {
                    keyword: keyword
                },
                url: "{{ route('livesearch') }}",
                success: function(products) {
                    if (products) {
                        $(".search_result").html(products);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
        $(".msearch_click").on("keyup change", function() {
            var keyword = $(".msearch_keyword").val();
            $.ajax({
                type: "GET",
                data: {
                    keyword: keyword
                },
                url: "{{ route('livesearch') }}",
                success: function(products) {
                    if (products) {
                        $("#loading").hide();
                        $(".search_result").html(products);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
    </script>
    <!-- search js start -->
    <script></script>
    <script></script>
    <script>
        $(".district").on("change", function() {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                data: {
                    id: id
                },
                url: "{{ route('districts') }}",
                success: function(res) {
                    if (res) {
                        $(".area").empty();
                        $(".area").append('<option value="">Select..</option>');
                        $.each(res, function(key, value) {
                            $(".area").append('<option value="' + key + '" >' + value +
                                "</option>");
                        });
                    } else {
                        $(".area").empty();
                    }
                },
            });
        });
    </script>
    <script>
        $(".toggle").on("click", function() {
            $("#page-overlay").show();
            $(".mobile-menu").addClass("active");
        });

        $("#page-overlay").on("click", function() {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
            $(".feature-products").removeClass("active");
        });

        $(".mobile-menu-close").on("click", function() {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
        });

        $(".mobile-filter-toggle").on("click", function() {
            $("#page-overlay").show();
            $(".feature-products").addClass("active");
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".parent-category").each(function() {
                const menuCatToggle = $(this).find(".menu-category-toggle");
                const secondNav = $(this).find(".second-nav");

                menuCatToggle.on("click", function() {
                    menuCatToggle.toggleClass("active");
                    secondNav.slideToggle("fast");
                    $(this).closest(".parent-category").toggleClass("active");
                });
            });
            $(".parent-subcategory").each(function() {
                const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                const thirdNav = $(this).find(".third-nav");

                menuSubcatToggle.on("click", function() {
                    menuSubcatToggle.toggleClass("active");
                    thirdNav.slideToggle("fast");
                    $(this).closest(".parent-subcategory").toggleClass("active");
                });
            });
        });
    </script>

    <script>
        var menu = new MmenuLight(document.querySelector("#menu"), "all");

        var navigator = menu.navigation({
            selectedClass: "Selected",
            slidingSubmenus: true,
            // theme: 'dark',
            title: "ক্যাটাগরি",
        });

        var drawer = menu.offcanvas({
            // position: 'left'
        });

        //  Open the menu.
        document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
            evnt.preventDefault();
            drawer.open();
        });
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //     window.addEventListener("scroll", function () {
        //         if (window.scrollY > 200) {
        //             document.getElementById("navbar_top").classList.add("fixed-top");
        //         } else {
        //             document.getElementById("navbar_top").classList.remove("fixed-top");
        //             document.body.style.paddingTop = "0";
        //         }
        //     });
        // });
        /*=== Main Menu Fixed === */
        // document.addEventListener("DOMContentLoaded", function () {
        //     window.addEventListener("scroll", function () {
        //         if (window.scrollY > 0) {
        //             document.getElementById("m_navbar_top").classList.add("fixed-top");
        //             // add padding top to show content behind navbar
        //             navbar_height = document.querySelector(".navbar").offsetHeight;
        //             document.body.style.paddingTop = navbar_height + "px";
        //         } else {
        //             document.getElementById("m_navbar_top").classList.remove("fixed-top");
        //             // remove padding top from body
        //             document.body.style.paddingTop = "0";
        //         }
        //     });
        // });
        /*=== Main Menu Fixed === */

        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $(".scrolltop:hidden").stop(true, true).fadeIn();
            } else {
                $(".scrolltop").stop(true, true).fadeOut();
            }
        });
        $(function() {
            $(".scroll").click(function() {
                $("html,body").animate({
                    scrollTop: $(".gotop").offset().top
                }, "1000");
                return false;
            });
        });
    </script>
    <script>
        $(".filter_btn").click(function() {
            $(".filter_sidebar").addClass('active');
            $("body").css("overflow-y", "hidden");
        })
        $(".filter_close").click(function() {
            $(".filter_sidebar").removeClass('active');
            $("body").css("overflow-y", "auto");
        })
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F7P2B5D" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
