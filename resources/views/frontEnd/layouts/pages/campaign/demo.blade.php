<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $generalsetting->name }}</title>
        <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" type="image/x-icon" />
        <!-- fot awesome -->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/all.css" />
        <!-- core css -->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/animate.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/owl.theme.default.css" />
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/owl.carousel.min.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/select2.min.css" />
        <!-- common css -->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/style.css" />
        <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/responsive.css" />
        @foreach($pixels as $pixel)
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '{{{$pixel->code}}}');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id={{{$pixel->code}}}&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        @endforeach

        <meta name="app-url" content="{{route('campaign',$campaign_data->slug)}}" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="{{$campaign_data->description}}" />
        <meta name="keywords" content="{{ $campaign_data->slug }}" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="{{$campaign_data->name}}" />
        <meta name="twitter:title" content="{{$campaign_data->name}}" />
        <meta name="twitter:description" content="{{ $campaign_data->description}}" />
        <meta name="twitter:creator" content="hellodinajpur.com" />
        <meta property="og:url" content="{{route('campaign',$campaign_data->slug)}}" />
        <meta name="twitter:image" content="{{asset($campaign_data->image_one)}}" />

        <!-- Open Graph data -->
        <meta property="og:title" content="{{$campaign_data->name}}" />
        <meta property="og:type" content="product" />
        <meta property="og:url" content="{{route('campaign',$campaign_data->slug)}}" />
        <meta property="og:image" content="{{asset($campaign_data->image_one)}}" />
        <meta property="og:description" content="{{ $campaign_data->description}}" />
        <meta property="og:site_name" content="{{$campaign_data->name}}" />
    </head>

    <body>
         @php
            $subtotal = Cart::instance('shopping')->subtotal();
            $subtotal=str_replace(',','',$subtotal);
            $subtotal=str_replace('.00', '',$subtotal);
            $shipping = Session::get('shipping')?Session::get('shipping'):0;
        @endphp

        <section class="hero_section section-padding" style="background: linear-gradient(135deg, #e8f5e9 0%, #ffffff 100%);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="hero_content">
                            <div class="logo-image mb-4">
                                <img src="{{asset($generalsetting->white_logo)}}" alt="Logo" style="height: 70px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));" />
                            </div>
                            <h1 class="hero_title mb-3" style="font-size: 2.5rem; font-weight: 800; color: var(--primary-color); line-height: 1.3;">
                                {{$campaign_data->banner_title}}
                            </h1>
                            <div class="hero_desc mb-4" style="font-size: 1.25rem; color: var(--text-light);">
                                {!! $campaign_data->short_description !!}
                            </div>

                            <div class="price_box mb-4 p-3 d-inline-block" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border: 2px solid var(--primary-color);">
                                <span style="font-size: 1.2rem; color: var(--text-light); text-decoration: line-through; margin-right: 10px;">
                                    ৳{{$product->old_price}}
                                </span>
                                <span style="font-size: 2rem; font-weight: 800; color: var(--secondary-color);">
                                    ৳{{$product->new_price}}
                                </span>
                            </div>

                            <div class="hero_btn">
                                <a href="#order_form" class="btn-primary btn-pulse">
                                    অর্ডার করতে ক্লিক করুন <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Showcase Section -->
        <section class="product_showcase section-padding" style="background: #fff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="showcase_image mb-5 text-center">
                            <img src="{{asset($campaign_data->image_one)}}" class="img-fluid rounded shadow-lg" alt="Product Image" style="max-height: 500px; width: auto;">
                        </div>

                        @if($campaign_data->video)
                        <div class="showcase_video mb-5">
                            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg" style="border: 5px solid #fff;">
                                <iframe src="https://www.youtube.com/embed/{{$campaign_data->video}}" title="Product Video" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif

                        <div class="product_description p-4" style="background: #f9fafb; border-radius: var(--radius-lg); border: 1px solid #e5e7eb;">
                            <h2 class="section_title mb-4 text-center" style="color: var(--primary-color); font-weight: 700;">বিস্তারিত বিবরণ</h2>
                            <div class="description_content" style="font-size: 1.1rem; color: var(--text-color);">
                                {!! $campaign_data->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Order Button -->
        <div class="section_btn text-center pb-5" style="background: #fff;">
            <a href="#order_form" class="btn-primary btn-secondary btn-pulse">
                অর্ডার করতে ক্লিক করুন <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Features & Included Items Section -->
        <section class="features_section section-padding" style="background: var(--bg-color);">
            <div class="container">
                <div class="row">
                    @if ($campaign_data->features != null &&$campaign_data->features != "")
                    <div class="col-lg-6 mb-4">
                        <div class="feature_card h-100 p-4" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); border-top: 4px solid var(--primary-color);">
                            <h3 class="mb-4 text-center" style="font-weight: 700; color: var(--primary-color);">উপকারিতা</h3>
                            <div class="rules_des">
                                {!! $campaign_data->features !!}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ( $campaign_data->included_items != null && $campaign_data->included_items != '')
                    <div class="col-lg-6 mb-4">
                        <div class="feature_card h-100 p-4" style="background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); border-top: 4px solid var(--secondary-color);">
                            <h3 class="mb-4 text-center" style="font-weight: 700; color: var(--secondary-color);">এটির সাথে যা যা থাকছে</h3>
                            <div class="rules_des">
                                {!! $campaign_data->included_items !!}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Order Button -->
        <div class="section_btn text-center pb-5" style="background: var(--bg-color);">
            <a href="#order_form" class="btn-primary btn-accent btn-pulse">
                অর্ডার করতে ক্লিক করুন <i class="fas fa-arrow-right"></i>
            </a>
        </div>
       
        <!-- Order Button -->
        <div class="section_btn text-center pb-5" style="background: #fff;">
            <a href="#order_form" class="btn-primary btn-info btn-pulse">
                অর্ডার করতে ক্লিক করুন <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Reviews Section -->
        <section class="reviews_section section-padding" style="background: #f9fafb;">
            <div class="container">
                <div class="section_title text-center mb-5">
                    <h2 style="color: var(--primary-color); font-weight: 800;">কাস্টমার রিভিউ ({{$campaign_data->images->count()}})</h2>
                </div>
                <div class="review_slider owl-carousel">
                    @foreach($campaign_data->images as $key=>$value)
                    <div class="review_item p-2">
                        <img src="{{asset($value->image)}}" class="img-fluid rounded shadow-sm" alt="Review Image">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Order Button -->
        <div class="section_btn text-center pb-5" style="background: #f9fafb;">
            <a href="#order_form" class="btn-primary btn-dark btn-pulse">
                অর্ডার করতে ক্লিক করুন <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Order Form Section -->
        <section class="order_section section-padding" id="order_form" style="background: #fff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="order_form_container shadow-lg rounded overflow-hidden" style="border: 1px solid #e5e7eb;">
                            <div class="card-header text-center p-4" style="background: var(--primary-color); color: white;">
                                <h3 class="mb-0" style="font-weight: 700;">অর্ডার কনফার্ম করতে নিচের ফর্মটি পূরণ করুন অথবা কল করুন <a href="tel:+8801851018193">
    <span style="text-decoration: none;
    color: #fffa0b;
    font-size: 24px;
    font-weight: bold;">
        +8801851018193
    </span>
</a></h3>
                            </div>
                            <div class="card-body p-4 p-md-5">
                                <form action="{{route('customer.ordersave')}}" method="POST" data-parsley-validate="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <h4 class="mb-4" style="color: var(--text-color); font-weight: 700; border-bottom: 2px solid #eee; padding-bottom: 10px;">অর্ডার করুন</h4>

                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label fw-bold">আপনার নাম <span class="text-danger">*</span></label>
                                                <input type="text" id="name" class="form-control form-control-lg" name="name" value="{{old('name')}}" placeholder="সম্পূর্ণ নাম লিখুন" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                                @error('name')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="phone" class="form-label fw-bold">মোবাইল নাম্বার <span class="text-danger">*</span></label>
                                                <input type="tel" id="phone" class="form-control form-control-lg" name="phone" value="{{old('phone')}}" placeholder="১১ ডিজিটের মোবাইল নাম্বার" pattern="[0-9]{11}" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                                @error('phone')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="address" class="form-label fw-bold">সম্পূর্ণ ঠিকানা <span class="text-danger">*</span></label>
                                                <input type="text" id="address" class="form-control form-control-lg" name="address" value="{{old('address')}}" placeholder="বাসা নং, রোড নং, থানা, জেলা" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                                @error('address')
                                                    <span class="text-danger small">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="area" class="form-label fw-bold">ডেলিভারি এলাকা <span class="text-danger">*</span></label>
                                                <select id="area" class="form-control form-control-lg" name="area" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                                    @foreach($shippingcharge as $key=>$value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="order_summary p-4 rounded" style="background: #f9fafb; border: 1px solid #e5e7eb;">
                                                <h4 class="mb-4" style="color: var(--text-color); font-weight: 700; border-bottom: 2px solid #eee; padding-bottom: 10px;">অর্ডার সামারি</h4>

                                                <div class="cart_items mb-4">
                                                    @foreach(Cart::instance('shopping')->content() as $value)
                                                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset($value->options->image)}}" alt="Product" class="rounded" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                                                            <div>
                                                                <h6 class="mb-0" style="font-size: 14px;">{{Str::limit($value->name, 20)}}</h6>
                                                                <small class="text-muted">Qty: {{$value->qty}}</small>
                                                            </div>
                                                        </div>
                                                        <span class="fw-bold">৳{{$value->price * $value->qty}}</span>
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <div class="d-flex justify-content-between mb-2">
                                                    <span>সাবটোটাল</span>
                                                    <span class="fw-bold">৳{{$subtotal}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-3">
                                                    <span>ডেলিভারি চার্জ</span>
                                                    <span class="fw-bold" id="cart_shipping_cost">৳{{$shipping}}</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4 pt-3 border-top">
                                                    <span class="h5 fw-bold">সর্বমোট</span>
                                                    <span class="h5 fw-bold text-primary" id="grand_total">৳{{$subtotal + $shipping}}</span>
                                                </div>

                                                <button type="submit" class="btn btn-primary w-100 btn-lg btn-pulse">
                                                    অর্ডার কনফার্ম করুন <i class="fas fa-check-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('public/frontEnd/campaign/js') }}/jquery-2.1.4.min.js"></script>
        <script src="{{ asset('public/frontEnd/campaign/js') }}/all.js"></script>
        <script src="{{ asset('public/frontEnd/campaign/js') }}/bootstrap.min.js"></script>
        <script src="{{ asset('public/frontEnd/campaign/js') }}/owl.carousel.min.js"></script>
        <script src="{{ asset('public/frontEnd/campaign/js') }}/select2.min.js"></script>
        <script src="{{ asset('public/frontEnd/campaign/js') }}/script.js"></script>
        <!-- bootstrap js -->
        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    margin: 15,
                    loop: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    autoplayHoverPause: true,
                    items: 1,
                    });
                $('.owl-nav').remove();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
        <script>
             $("#area").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "{{route('shipping.charge')}}",
                    dataType: "html",
                    success: function(response){
                        $('.cartlist').html(response);
                    }
                });
            });
        </script>
           <script>
            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.remove')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });
            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.increment')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "{{route('cart.decrement')}}",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

        </script>
        <script>
            $('.review_slider').owlCarousel({
                dots: false,
                arrow: false,
                autoplay: true,
                loop: true,
                margin: 10,
                smartSpeed: 1000,
                mouseDrag: true,
                touchDrag: true,
                items: 6,
                responsiveClass: true,
                responsive: {
                    300: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 5,
                    },
                    1170: {
                        items: 5,
                    },
                }
            });
        </script>

        <script>
            $('.campro_img_slider').owlCarousel({
                dots: false,
                arrow: false,
                autoplay: true,
                loop: true,
                margin: 10,
                smartSpeed: 1000,
                mouseDrag: true,
                touchDrag: true,
                items: 3,
                responsiveClass: true,
                responsive: {
                    300: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1170: {
                        items: 3,
                    },
                }
            });
        </script>
    </body>
</html>
