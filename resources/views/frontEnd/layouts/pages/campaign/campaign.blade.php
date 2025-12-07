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
    <!-- toastr css -->
    <link rel="stylesheet" href="{{ asset('public/backEnd/') }}/assets/css/toastr.min.css" />
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/style.css" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/campaign/css') }}/responsive.css" />
    @foreach($pixels as $pixel)
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script'
            , 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{{$pixel->code}}}');
        fbq('track', 'PageView');

    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{{$pixel->code}}}&ev=PageView&noscript=1" />
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

    <section class="hero-section">
        <div class="container">
            <div class="text-center mb-4">
                <img src="{{asset($generalsetting->white_logo)}}" alt="" height="60" />
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="hero-card">
                        <div class="hero-header">
                            <h1 class="hero-title" style="color: #000000; font-size: 40px">{{$campaign_data->banner_title}}</h1>
                            <hr>
                            <h4>{!! $campaign_data->short_description !!} </h4>
                        </div>

                        <div class="hero-body">
                            <div class="hero-image-wrapper mb-3">
                                <img src="{{asset($campaign_data->image_one)}}" class="hero-image" alt="Campaign Image">
                            </div>

                            <!-- Product Selection moved to Order Form -->

                            <div class="hero-footer">
                                <a href="#order_form" class="btn-hero-order"> অর্ডার করুন <i class="fa-solid fa-cart-shopping"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cont_inner" style=" background: transparent; box-shadow: none; padding: 0;">
                        <div class="video-card-container" style="width: 100%; padding: 10px;">
                            <!-- Google Font Import (যদি আগে না থাকে) -->
                            <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">

                            @if($campaign_data->video)
                            @php
                                $video_id = '';
                                $video_url = $campaign_data->video;
                                if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match)) {
                                    $video_id = $match[1];
                                }
                            @endphp
                            @if($video_id)
                            <div class="premium-video-card">
                                <!-- Title Section -->
                                <div class="video-title">
                                    <span class="icon">🎥</span> আমাদের পণ্যের ভিডিও দেখুন
                                </div>

                                <!-- Video Wrapper (Responsive) -->
                                <div class="video-wrapper">
                                    <iframe src="https://www.youtube.com/embed/{{$video_id}}" title="Product Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe>
                                </div>

                                <!-- Bottom Text -->
                                <div class="video-footer-text">
                                    ভিডিওটি দেখে বিস্তারিত জেনে নিন
                                </div>
                            </div>
                            @endif
                            @endif

                            <style>
                                .btn-toggle-cart {
                                    cursor: pointer;
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    transition: all 0.3s ease;
                                }
                                .check-icon {
                                    display: inline-block;
                                    width: 20px;
                                }

                                .premium-video-card {
                                    font-family: 'Hind Siliguri', sans-serif;
                                    background: #ffffff;
                                    border-radius: 16px;
                                    padding: 10px;
                                    max-width: 500px;
                                    /* আপনার প্রাইসিং কার্ডের সমান সাইজ */
                                    margin: 20px auto;
                                    text-align: center;
                                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                                    border: 1px solid #eee;
                                    position: relative;
                                    overflow: hidden;
                                }

                                /* Top Red Line Decoration */
                                .premium-video-card::before {
                                    content: '';
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 4px;
                                    background: linear-gradient(90deg, #ff6b6b, #ee5253);
                                }

                                .video-title {
                                    font-size: 20px;
                                    font-weight: 700;
                                    color: #2d3436;
                                    margin-bottom: 15px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 8px;
                                }

                                .video-title .icon {
                                    font-size: 22px;
                                }

                                /* Responsive Video Container (Aspect Ratio 16:9) */
                                .video-wrapper {
                                    position: relative;
                                    padding-bottom: 56.25%;
                                    /* 16:9 Ratio */
                                    height: 0;
                                    overflow: hidden;
                                    border-radius: 12px;
                                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                                    border: 2px solid #f1f2f6;
                                }

                                .video-wrapper iframe {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }

                                .video-footer-text {
                                    margin-top: 15px;
                                    font-size: 15px;
                                    color: #636e72;
                                    font-weight: 500;
                                }

                            </style>
                        </div>



                        <div style="width: 100%; padding: 10px; text-align: center;">
                            <a href="tel:{{$contact->phone}}" class="btn btn-primary w-100 rounded-pill py-2 shadow-lg d-flex align-items-center justify-content-center gap-2" style="font-family: 'Hind Siliguri', sans-serif;">
                                <i class="fas fa-phone-volume fa-shake" style="font-size: 24px;"></i>
                                <div class="d-flex flex-column align-items-start">
                                    <span style="font-size: 14px; font-weight: normal;">অর্ডার করতে কল করুন</span>
                                    <span style="font-size: 20px; font-weight: bold; line-height: 1;">{{$contact->phone}}</span>
                                </div>
                            </a>
                            {{-- @if($campaign_data->included_items)
                            {!! $campaign_data->included_items !!}
                            @endif --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="rules_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class=" d-flex align-items-center justify-content-center p-3" style="background: bisque;">
                        <h2> 🌬🏠{{ $campaign_data->banner_title }} এর উপকারিতা🏠🌬</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="">


                        {!! $campaign_data->description !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($campaign_data->features)

    <section>
        <div class="container" style="margin-bottom:40px; ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="campro_inn">
                        {!! $campaign_data->features!!}
                    </div>

                </div>
            </div>
        </div>
    </section>

    @endif


    {{-- <hr> --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="campro_inn" style="margin-bottom: 30px;">
                        <div class="d-flex align-items-center justify-content-center p-3">
                            <h3>{{$campaign_data->review}}</h3>
                        </div>
                        <div class="review_slider owl-carousel">
                            @foreach($campaign_data->images as $key=>$value)
                            <div class="review_item">
                                <img src="{{asset($value->image)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <a href="#order_form" class="btn-hero-order"> অর্ডার করুন <i class="fa-solid fa-cart-shopping"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="campro_inn">
                        <div class="campro_head">
                            <h2>{{$campaign_data->banner_title}}</h2>
                        </div>

                        <div class="campro_img_slider owl-carousel">
                            <div class="campro_img_item">
                                <img src="{{asset($campaign_data->image_one)}}" alt="">
                            </div>
                            <div class="campro_img_item">
                                <img src="{{asset($campaign_data->image_two)}}" alt="">
                            </div>
                            <div class="campro_img_item">
                                <img src="{{asset($campaign_data->image_three)}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <a href="#order_form" class="btn-hero-order"> অর্ডার করুন <i class="fa-solid fa-cart-shopping"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="why_choose_sec" style="padding: 60px 0; background: #fdfdfd;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {{-- <div class="text-center mb-5">
                         <h2 style="font-weight: 800; color: #2d3436; margin-bottom: 10px; font-size: 28px;">সচরাচর জিজ্ঞাসিত প্রশ্ন</h2>
                         <div style="height: 3px; width: 60px; background: var(--primary-color, #ff3e3e); margin: 0 auto; border-radius: 2px;"></div>
                    </div> --}}

                    <div class="faq-container">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item">
                            <div class="faq-header">
                                <span class="faq-question">আমি কি পণ্যটি হাতে পেয়ে চেক করতে পারবো?</span>
                                <div class="faq-icon-wrapper">
                                    <i class="fas fa-plus faq-icon"></i>
                                </div>
                            </div>
                            <div class="faq-body">
                                <p>জি, অবশ্যই! পন্য হাতে পেয়ে কোয়ালিটি যাচাই করে নিতে পারবেন। আমাদের ডেলিভারি ম্যান থাকাকালীন সময়ে আপনি পণ্য খুলে চেক করে নিশ্চিত হতে পারবেন।</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <div class="faq-header">
                                <span class="faq-question">আমাকে কি অগ্রিম পেমেন্ট করতে হবে?</span>
                                <div class="faq-icon-wrapper">
                                    <i class="fas fa-plus faq-icon"></i>
                                </div>
                            </div>
                            <div class="faq-body">
                                <p>না, আপনাকে অগ্রিম কোন টাকা দিতে হবে না। আমরা বিশ্বাসে বিশ্বাসী। সম্পূর্ণ ক্যাশ অন ডেলিভারিতে পণ্যটি অর্ডার করতে পারবেন এবং পণ্য হাতে পেয়ে টাকা পরিশোধ করবেন।</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <div class="faq-header">
                                <span class="faq-question">আপনারা কত দ্রুত ডেলিভারি দেন?</span>
                                <div class="faq-icon-wrapper">
                                    <i class="fas fa-plus faq-icon"></i>
                                </div>
                            </div>
                            <div class="faq-body">
                                <p>আমরা সারা দেশে দ্রুত সময়ে হোম ডেলিভারি দিয়ে থাকি। সাধারণত অর্ডার কনফার্ম করার ২-৩ দিনের মধ্যে আপনি পণ্যটি হাতে পেয়ে যাবেন।</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .faq-item {
                background: #ffffff;
                border-radius: 12px;
                margin-bottom: 16px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.02);
                border: 1px solid #edf2f7;
                overflow: hidden;
                transition: all 0.3s ease;
            }
            .faq-item:hover {
                box-shadow: 0 10px 15px rgba(0,0,0,0.05);
                transform: translateY(-2px);
            }
            .faq-header {
                padding: 20px 24px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: #fff;
                transition: background 0.3s;
                user-select: none;
            }
            .faq-item.active .faq-header {
                background: #fee2e2;
                color: #ef4444;
            }
            .faq-question {
                font-weight: 700;
                font-size: 17px;
                color: inherit;
            }
             .faq-header:not(.active) .faq-question {
                color: #1f2937;
            }
            .faq-body {
                display: none;
                padding: 0 24px 24px;
                border-top: 1px solid #fee2e2;
                background: #fee2e2; /* Matching active header bg for seamless look or keep white */
                background: #fff; /* Keeping body white looks cleaner usually */
            }
            .faq-item.active .faq-body {
                 border-top: 1px solid #fee2e2;
            }
            .faq-body p {
                margin: 0;
                color: #4b5563;
                line-height: 1.6;
                font-size: 15px;
            }
            .faq-icon-wrapper {
                width: 28px;
                height: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: #f3f4f6;
                transition: all 0.3s ease;
            }
            .faq-item.active .faq-icon-wrapper {
                background: #ef4444;
                color: white;
                transform: rotate(45deg);
            }
            .faq-icon {
                font-size: 14px;
                transition: none; /* Handled by wrapper */
            }
        </style>

        <script>
            // Simple FAQ toggle script if not handled globally
            document.addEventListener('DOMContentLoaded', function() {
                // Using vanilla JS to ensure it works even if jQuery loads late or is removed
                const headers = document.querySelectorAll('.faq-header');

                headers.forEach(header => {
                    header.addEventListener('click', function() {
                        const item = this.parentElement;
                        const body = this.nextElementSibling;
                        const isActive = item.classList.contains('active');

                        // Close all others
                        document.querySelectorAll('.faq-item').forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                                const otherBody = otherItem.querySelector('.faq-body');
                                if (otherBody) {
                                     if (typeof $ !== 'undefined') {
                                         $(otherBody).slideUp(300);
                                     } else {
                                         otherBody.style.display = 'none';
                                     }
                                }
                            }
                        });

                        // Toggle current
                        item.classList.toggle('active');

                        if (typeof $ !== 'undefined') {
                            // Use jQuery for smooth slide if available
                            $(body).slideToggle(300);
                        } else {
                            // Fallback
                            body.style.display = isActive ? 'none' : 'block';
                        }
                    });
                });
            });
        </script>
    </section>

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

                            <div class="product-selection-area mb-5">
                                <h4 class="text-center mb-4" style="color: #2d3436; font-weight: 700;">প্রোডাক্ট সিলেক্ট করুন</h4>
                                <div class="row">
                                    @foreach($products as $item)
                                    @php
                                        $cartItem = Cart::instance('shopping')->content()->where('id', $item->id)->first();
                                        $qty = $cartItem ? $cartItem->qty : 1;
                                    @endphp
                                    <div class="col-12 mb-2">
                                        <div class="product-item-card p-2 border rounded d-flex align-items-center justify-content-between gap-2" style="background: #f9f9f9;">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset($item->image?->image)}}" alt="{{$item->name}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 6px; margin-right: 10px;">
                                                <div>
                                                    <h6 class="mb-0" style="font-weight: 700; font-size: 14px;">{{$item->name}}</h6>
                                                    <div class="price-info lh-1">
                                                        <del class="text-danger small" style="font-size: 11px;">{{$item->old_price}}</del>
                                                        <span class="text-success fw-bold" style="font-size: 14px;">{{$item->new_price}} ৳</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="action-area d-flex align-items-center gap-2">
                                                <div class="qty-control d-flex align-items-center">
                                                    <button type="button" class="btn btn-sm btn-light border px-1" onclick="updateQty({{$item->id}}, 'minus')" style="height: 24px; width: 24px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-minus" style="font-size: 10px;"></i></button>
                                                    <input type="text" id="qty_{{$item->id}}" value="{{$qty}}" readonly style="width: 30px; text-align: center; border: 1px solid #ddd; height: 24px; margin: 0 3px; border-radius: 3px; font-size: 13px;">
                                                    <button type="button" class="btn btn-sm btn-light border px-1" onclick="updateQty({{$item->id}}, 'plus')" style="height: 24px; width: 24px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-plus" style="font-size: 10px;"></i></button>
                                                </div>

                                                <div class="toggle-container">
                                                    <input type="checkbox" id="product_check_{{$item->id}}"
                                                           class="form-check-input product-checkbox"
                                                           style="width: 22px; height: 22px; cursor: pointer; margin-top: 0;"
                                                           data-id="{{$item->id}}"
                                                           data-rowid="{{$cartItem ? $cartItem->rowId : ''}}"
                                                           onchange="toggleCart(this, {{$item->id}})"
                                                           {{$cartItem ? 'checked' : ''}}>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <form action="{{route('customer.ordersave')}}" method="POST" data-parsley-validate="">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-7 mb-4 mb-lg-0">
                                        <h4 class="mb-4" style="color: var(--text-color); font-weight: 700; border-bottom: 2px solid #eee; padding-bottom: 10px;">অর্ডার করুন</h4>

                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label fw-bold">আপনার নাম <span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}" placeholder="সম্পূর্ণ নাম লিখুন" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                            @error('name')
                                            <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="phone" class="form-label fw-bold">মোবাইল নাম্বার <span class="text-danger">*</span></label>
                                            <input type="tel" id="phone" class="form-control" name="phone" value="{{old('phone')}}" placeholder="১১ ডিজিটের মোবাইল নাম্বার" pattern="[0-9]{11}" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                            @error('phone')
                                            <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="address" class="form-label fw-bold">সম্পূর্ণ ঠিকানা <span class="text-danger">*</span></label>
                                            <input type="text" id="address" class="form-control" name="address" value="{{old('address')}}" placeholder="বাসা নং, রোড নং, থানা, জেলা" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                            @error('address')
                                            <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="area" class="form-label fw-bold">ডেলিভারি এলাকা <span class="text-danger">*</span></label>
                                            <select id="area" class="form-control" name="area" required style="border-radius: var(--radius-md); border: 1px solid #d1d5db;">
                                                @foreach($shippingcharge as $key=>$value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-5" id="order_summary">
                                        <div class="order_summary cartlist p-4 rounded" style="background: #f9fafb; border: 1px solid #e5e7eb;">
                                            <h4 class="mb-4" style="color: var(--text-color); font-weight: 700; border-bottom: 2px solid #eee; padding-bottom: 10px;">অর্ডার সামারি</h4>

                                            <div class="cart_items mb-4">
                                                @foreach(Cart::instance('shopping')->content() as $value)
                                                <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset($value->options->image)}}" alt="Product" class="rounded" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                                                        <div>
                                                            <h6 class="mb-0" style="font-size: 14px;">{{Str::limit($value->name, 20)}}</h6>
                                                            <div class="d-flex align-items-center mt-1">
                                                                <button type="button" class="btn btn-xs btn-light border cart_decrement" data-id="{{$value->rowId}}" style="padding: 0 5px;"><i class="fas fa-minus" style="font-size: 10px;"></i></button>
                                                                <span class="mx-2" style="font-size: 13px;">{{$value->qty}}</span>
                                                                <button type="button" class="btn btn-xs btn-light border cart_increment" data-id="{{$value->rowId}}" style="padding: 0 5px;"><i class="fas fa-plus" style="font-size: 10px;"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fw-bold d-block">৳{{$value->price * $value->qty}}</span>
                                                        <button type="button" class="btn btn-xs text-danger cart_remove p-0 mt-1" data-id="{{$value->rowId}}"><i class="fas fa-trash-alt"></i> Remove</button>
                                                    </div>
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
    <!-- toastr js -->
    <script src="{{ asset('public/backEnd/') }}/assets/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="{{ asset('public/frontEnd/campaign/js') }}/script.js"></script>
    <!-- bootstrap js -->
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 15
                , loop: true
                , dots: false
                , autoplay: true
                , autoplayTimeout: 6000
                , autoplayHoverPause: true
                , items: 1
            , });
            $('.owl-nav').remove();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

    </script>
    <script>
        $("#area").on("change", function() {
            var id = $(this).val();
            $.ajax({
                type: "GET"
                , data: {
                    id: id
                    , cart_type: 'campaign'
                }
                , url: "{{route('shipping.charge')}}"
                , dataType: "html"
                , success: function(response) {
                    $('.cartlist').html(response);
                }
            });
        });

    </script>
    <script>
        $(document).on("click", ".cart_remove", function() {
            var id = $(this).data("id");
            $("#loading").show();
            if (id) {
                $.ajax({
                    type: "GET"
                    , data: {
                        id: id
                        , cart_type: 'campaign'
                    }
                    , url: "{{route('cart.remove')}}"
                    , success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            $("#loading").hide();
                            return cart_count() + mobile_cart() + cart_summary();
                        }
                    }
                , });
            }
        });
        $(document).on("click", ".cart_increment", function() {
            var id = $(this).data("id");
            $("#loading").show();
            if (id) {
                $.ajax({
                    type: "GET"
                    , data: {
                        id: id
                        , cart_type: 'campaign'
                    }
                    , url: "{{route('cart.increment')}}"
                    , success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            $("#loading").hide();
                            return cart_count() + mobile_cart();
                        }
                    }
                , });
            }
        });

        $(document).on("click", ".cart_decrement", function() {
            var id = $(this).data("id");
            $("#loading").show();
            if (id) {
                $.ajax({
                    type: "GET"
                    , data: {
                        id: id
                        , cart_type: 'campaign'
                    }
                    , url: "{{route('cart.decrement')}}"
                    , success: function(data) {
                        if (data) {
                            $(".cartlist").html(data);
                            $("#loading").hide();
                            return cart_count() + mobile_cart();
                        }
                    }
                , });
            }
        });

    </script>
    <script>
        $('.review_slider').owlCarousel({
            dots: false
            , arrow: false
            , autoplay: true
            , loop: true
            , margin: 10
            , smartSpeed: 1000
            , mouseDrag: true
            , touchDrag: true
            , items: 6
            , responsiveClass: true
            , responsive: {
                300: {
                    items: 1
                , }
                , 480: {
                    items: 2
                , }
                , 768: {
                    items: 5
                , }
                , 1170: {
                    items: 5
                , }
            , }
        });

    </script>

    <script>
        $('.campro_img_slider').owlCarousel({
            dots: false
            , arrow: false
            , autoplay: true
            , loop: true
            , margin: 10
            , smartSpeed: 1000
            , mouseDrag: true
            , touchDrag: true
            , items: 3
            , responsiveClass: true
            , responsive: {
                300: {
                    items: 1
                , }
                , 480: {
                    items: 2
                , }
                , 768: {
                    items: 3
                , }
                , 1170: {
                    items: 3
                , }
            , }
        });

    </script>
    <script>
        function updateQty(id, type) {
            var qtyInput = $('#qty_'+id);
            var currentQty = parseInt(qtyInput.val());
            if(type == 'plus') {
                qtyInput.val(currentQty + 1);
            } else if(type == 'minus' && currentQty > 1) {
                qtyInput.val(currentQty - 1);
            }
        }

        function toggleCart(checkbox, id) {
            var isChecked = checkbox.checked;
            var qty = $('#qty_' + id).val();

            if (isChecked) {
                // Add to cart
                if($("#loading").length) $("#loading").show();
                $.ajax({
                    type: "GET",
                    url: "{{url('add-to-cart')}}/" + id + "/" + qty,
                    success: function(data){
                        if($("#loading").length) $("#loading").hide();

                        // Set rowId for future removal
                        if(data.rowId) {
                           checkbox.dataset.rowid = data.rowId;
                        }

                        // Refresh cart by triggering area change
                        $("#area").trigger('change');

                        // Show success toast
                        toastr.success('Success', 'Product added to cart successfully');

                        // Scroll to order form
                        $('html, body').animate({
                            scrollTop: $("#order_summary").offset().top - 100
                        }, 500);
                    },
                    error: function(err){
                        if($("#loading").length) $("#loading").hide();
                        console.log(err);
                        alert('Problem adding to cart. Please try again.');
                        checkbox.checked = false; // Revert
                    }
                });
            } else {
                // Remove from cart
                var rowId = checkbox.dataset.rowid;
                if (!rowId) {
                    console.error("No rowId found for removal");
                    // Try to find if it was reloaded without rowId being set in dataset (should be handled by blade)
                    toastr.error('Error', 'Could not remove product. Please refresh page.');
                    checkbox.checked = true; // Revert
                    return;
                }

                if($("#loading").length) $("#loading").show();
                $.ajax({
                    type: "GET",
                    data: { id: rowId, cart_type: 'campaign' },
                    url: "{{route('cart.remove')}}",
                    success: function(data){
                        if (data) {
                            $(".cartlist").html(data);
                            $("#loading").hide();
                            toastr.error('Removed', 'Product removed from cart'); // Red toast for removal?

                            // Clear rowId
                            checkbox.dataset.rowid = '';
                        }
                    },
                    error: function(err){
                        if($("#loading").length) $("#loading").hide();
                        console.log(err);
                        alert('Problem removing from cart.');
                        checkbox.checked = true; // Revert
                    }
                });
            }
        }

    </script>
</body>
</html>
