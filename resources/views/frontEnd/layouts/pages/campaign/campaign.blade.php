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

        <section class="hero-section">
            <div class="container">
                <div class="text-center mb-4">
                    <img src="{{asset($generalsetting->white_logo)}}" alt="" height="60" />
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-card">
                            <div class="hero-header">
                                <h1 class="hero-title">{{$campaign_data->banner_title}}</h1>
                            </div>
                            <div class="hero-body">
                                <div class="hero-image-wrapper">
                                     <img src="{{asset($campaign_data->image_one)}}" class="hero-image" alt="Product Image">
                                </div>
                                <div class="hero-price">
                                    <span class="old-price">৳{{$product->old_price}}</span>
                                    <span class="new-price">৳{{$product->new_price}}</span>
                                </div>
                                <div class="hero-footer">
                                    <a href="#order_form" class="btn-hero-order">Order Now!</a>
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
                        <div class="cont_inner" style="
    background: transparent;
    box-shadow: none;
    padding: 0;
">
                            <div class="cont_num" style="
    width: 100%;
    padding: 10px;
">
                                <h2>আমাদের থেকে বিস্তারিত জানতে এই নাম্বারে কল করুন</h2>
                                <a href="tel:{{$contact->phone}}" style="
    font-family: fantasy;
">{{$contact->phone}}</a>
                            </div>
                            <div class="discount_inn" style="
    width: 100%;
    padding: 10px;
">
                         <!-- Google Font Import -->
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">

<div class="premium-pricing-card">
    <!-- Home Delivery Badge -->
    <div class="delivery-badge">
        <span class="icon">🏠</span> সারা বাংলাদেশ সম্পূর্ণ ক্যাশ অন হোম ডেলিভারি দেওয়া হয়
    </div>

    <!-- Pricing Section -->
    <div class="price-container">
        <div class="old-price-wrapper">
            <span class="label">রেগুলার প্রাইজ:</span>
            <span class="x-price-pro">
                {{$product->old_price}}<span class="currency">৳</span>
            </span>
        </div>

        <div class="new-price-wrapper">
            <span class="offer-tag">🔥ডিসকাউন্ট প্রাইজ</span>
            <div class="big-price">
                {{$product->new_price}} <span class="currency">টাকা</span>
            </div>
        </div>
    </div>

    <!-- Trust Text -->
    <div class="trust-text">
        <span class="check-icon">🛡️</span> এক টাকাও অগ্রিম পেমেন্ট ছাড়া অর্ডার করুন
    </div>
</div>

<style>
    .premium-pricing-card {
        font-family: 'Hind Siliguri', sans-serif;
        background: #ffffff;
        border-radius: 16px;
        padding: 30px 20px;
        max-width: 500px;
        margin: 20px auto;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08); /* Soft Shadow */
        border: 1px solid #eee;
        position: relative;
        overflow: hidden;
    }

    /* Top Decoration Line */
    .premium-pricing-card::top {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #ff6b6b, #ee5253);
    }

    .delivery-badge {
        background: #e7f5ff;
        color: #0077b6;
        display: inline-block;
        padding: 8px 16px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 25px;
        border: 1px solid #d0ebff;
    }

    .price-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .old-price-wrapper .label {
        font-size: 16px;
        color: #888;
        margin-right: 5px;
    }

    /* Your X Design Refined */
    .x-price-pro {
        position: relative;
        color: #999;
        font-weight: 700;
        font-size: 20px;
        display: inline-block;
    }
    .x-price-pro::before, .x-price-pro::after {
        content: "";
        position: absolute;
        width: 110%;
        height: 2px;
        background: #ff4d4d;
        top: 50%;
        left: -5%;
        border-radius: 2px;
    }
    .x-price-pro::before { transform: rotate(20deg); } /* Less steep angle looks cleaner */
    .x-price-pro::after { transform: rotate(-20deg); }

    .new-price-wrapper {
        margin-top: 5px;
    }

    .offer-tag {
        display: block;
        font-size: 14px;
        color: #ff3f34;
        font-weight: 600;
        margin-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .big-price {
        font-size: 38px;
        font-weight: 700;
        color: #2d3436;
        line-height: 1;
        background: -webkit-linear-gradient(#ff3f34, #d63031);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .big-price .currency {
        font-size: 20px;
        -webkit-text-fill-color: #555;
    }

    .trust-text {
        margin-top: 25px;
        color: #27ae60;
        font-weight: 600;
        font-size: 16px;
        background: #f0fdf4;
        padding: 10px;
        border-radius: 8px;
        border: 1px dashed #27ae60;
    }
</style>
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
                        <div class=" d-flex align-items-center justify-content-center p-3" style="
    background: bisque;
">
                            <h2> 🌬🏠বাড়িতে একটি মেশ নেবুলাইজার থাকা কেন গুরুত্বপূর্ণ 🏠🌬</h2>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="">

                            <!--<div class="rules_item">-->
                            <!--    <div class="rules_head">-->
                            <!--        <h2> উপকারিতা</h2>-->
                            <!--        <div class="rules_des">-->
                            <!--            <ul>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--            </ul>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="rules_item">-->
                            <!--    <div class="rules_head">-->
                            <!--        <h2>মধুময় বাদাম খাওয়ার নিয়ম</h2>-->
                            <!--        <div class="rules_des">-->
                            <!--            <ul>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--                <li>কোষ্ঠকাঠিন্য (কষা) দূর করতে সাহায্য করে,</li>-->
                            <!--            </ul>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
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
        <!-- Why Choose Us & Policy Section -->
    <section class="policy_section section-padding" style="background: #fff;">
 <div class="container">
   <div class="section_title text-center mb-5">
     <h2 style="color: var(--primary-color); font-weight: 800; font-size: 2rem;">কেন আমাদের থেকে কিনবেন?</h2>
   </div>
   <div class="row">
     <div class="col-md-4 mb-4">
  <div class="policy_card text-center p-4 h-100" style="background: #f9fafb; border-radius: var(--radius-lg); border: 1px solid #e5e7eb; transition: transform 0.3s ease;">
    <div class="icon_box mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background: var(--primary-light); border-radius: 50%; color: var(--primary-color); font-size: 2rem;">
      <i class="fas fa-truck"></i>
    </div>
    <h4 class="mb-3" style="font-weight: 700;">দ্রুত ডেলিভারি</h4>
    <p style="color: var(--text-light);">আমরা সারা বাংলাদেশে ২-৩ দিনের মধ্যে ক্যাশ অন হোম ডেলিভারি নিশ্চিত করি।</p>
  </div>
     </div>
     <div class="col-md-4 mb-4">
  <div class="policy_card text-center p-4 h-100" style="background: #f9fafb; border-radius: var(--radius-lg); border: 1px solid #e5e7eb; transition: transform 0.3s ease;">
    <div class="icon_box mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background: #ffebee; border-radius: 50%; color: var(--secondary-color); font-size: 2rem;">
      <i class="fas fa-undo"></i>
    </div>
    <h4 class="mb-3" style="font-weight: 700;">সহজ রিটার্ন পলিসি</h4>
    <p style="color: var(--text-light);">পণ্য হাতে পেয়ে চেক করে নিবেন। কোনো সমস্যা থাকলে সাথে সাথে রিটার্ন করতে পারবেন।</p>
  </div>
     </div>
     <div class="col-md-4 mb-4">
  <div class="policy_card text-center p-4 h-100" style="background: #f9fafb; border-radius: var(--radius-lg); border: 1px solid #e5e7eb; transition: transform 0.3s ease;">
    <div class="icon_box mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background: #e3f2fd; border-radius: 50%; color: #1976d2; font-size: 2rem;">
      <i class="fas fa-check-circle"></i>
    </div>
    <h4 class="mb-3" style="font-weight: 700;">সেরা কোয়ালিটি</h4>
    <p style="color: var(--text-light);">আমরা একমাত্র বাংলাদেশের সর্বোচ্চ ভালো কোয়ালিটির প্রডাক্ট দিতে প্রতিশ্রুতিবদ্ধ।</p>
  </div>
     </div>
   </div>
 </div>
</section>


        {{-- <hr> --}}



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
                                <div class="ord_btn">
                                    <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-cart-shopping"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <section class="why_choose_sec">
            <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                      <div class="why_choose_in">
                          <div class="why_choose">
                              <div class="why_choose_had">
                                <!--<h2>কেন আমাদের কাছ থেকে নিবেন?</h2>-->
                              </div>
                              <div class="why_choose_midd">
                                  <div class="why_choose_widget">
                                      <ul>
                                          <h2 class="mb-3">কেন আমাদের কাছ থেকে নিবেন?</h2>
                                          <li>
                                              পন্য হাতে পেয়ে কোয়ালিটি যাচাই করে নিতে পারবেন।
                                          </li>
                                          <li>
                                             অগ্রিম কোন টাকা দিতে হবে না পণ্য হাতে পেয়ে টাকা দিবেন।
                                          </li>
                                          <li>
                                            আমরা সারা দেশে দ্রুত সময়ে হোম ডেলিভারি দিয়ে থাকি।
                                          </li>


                                      </ul>

                                  </div>
                                  <div class="why_choose_widget">
                                      <div class="why_img">
                                          <img src="{{asset('public/frontEnd/campaign')}}/images/nabu.webp" alt="">
                                      </div>
                                  </div>
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
                        <div class="rev_inn">
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
                                <div class="ord_btn">
                                    <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-cart-shopping"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                            <div class="order_summary cartlist p-4 rounded" style="background: #f9fafb; border: 1px solid #e5e7eb;">
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
                    data: { id: id, cart_type: 'campaign' },
                    url: "{{route('shipping.charge')}}",
                    dataType: "html",
                    success: function(response){
                        $('.cartlist').html(response);
                    }
                });
            });
        </script>
           <script>
            $(document).on("click", ".cart_remove", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, cart_type: 'campaign' },
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
            $(document).on("click", ".cart_increment", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, cart_type: 'campaign' },
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

            $(document).on("click", ".cart_decrement", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, cart_type: 'campaign' },
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
