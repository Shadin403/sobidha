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

        <section class="pt-5" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="campaign_image">
                            <div class="campaign_item2">
                                <div class=" d-flex align-items-center justify-content-center flex-column p-3">
                                     <div class="logo-image mb-3">
                        <img src="{{asset($generalsetting->white_logo)}}" alt="" height="60" />
                    </div>
                                    <h1 class="mb-3">{{$campaign_data->banner_title}} </h1>
                                     <h4 class="mb-3">{!! $campaign_data->short_description !!} </h4>
                                     <div class=" d-flex align-items-center justify-content-center">
                                         
                                     
                                 
                                    <a href="#order_form" class="cam_order_now mb-3" id="cam_order_now" style="
    background: black;
">বর্তমানে ডিসকাউন্ট প্রাইজঃ  <span style="
    font-family: math;
">{{$product->new_price}}</span> টাকা</a>
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
                    <div class="col-6 m-auto">
                         <div class="camp_img_item">
                                   <img src="{{asset($campaign_data->image_one)}}" class="img-fluid w-100" alt="">
                               </div> 
                    </div>
                </div>
            </div>
        </section>

        <section class="camp_video_sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                       
                        <!--<div class="camp_vid">-->
                        <!--    <iframe width="653" height="480" src="https://www.youtube.com/embed/{{$campaign_data->video}}" title="মিক্সড মাসালা ড্রাই ফ্রুটস/মধুময় বাদাম মিক্সড/ Mixed Dry Fruits/Honey Nuts Recipe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>-->
                        <!--</div>-->
                    </div>
                    <div class="col-sm-12">
                        <div class="ord_btn">
                            <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-cart-shopping"></i> </a>
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
                                <h2>
                                
                                    🏠 🏠সম্পূর্ণ হোম ডেলিভারিতে পণ্য দেওয়া হয় 🏠🏠 🔥🔥রেগুলার প্রাইজঃ <span style="
    font-family: fantasy;
">  {{$product->old_price}}</span> টাকা বর্তমানে ডিসকাউন্ট প্রাইজঃ<span style="
    font-family: fantasy;
"> {{$product->new_price}}</span> টাকা 🔥🔥এক টাকা ও অগ্রিম পেমেন্ট ছাড়া অর্ডার করুন


                                </h2>
                                
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
                   <div class="row mt-5">
                    <div class="col-sm-12">
                      <div class="rules_inner shadow-0">

                            <div class="rules_item">
                                <div class="rules_head">
                                    
                                    <div class="rules_des">
                                        <ul>
                                            <li>আকারে ছোট তাই সহজে বহন করা যায়।</li>
                                            <li>ব্যাটারি ও ইলেক্ট্রিসিটি দুই ভাবেই চালানো যায়।</li>
                                            <li>বাচ্চা থেকে বয়স্ক সবাই ব্যবহার করতে পারবে।</li>
                                            <li>খুব সহজ সেটাপ।</li>
                                                 <li>শব্দহীন।</li>
                                                      <li>ইন্সটলেসন খুব সহজ।</li>
                                                           <li>এটি নিজে নিজেই ব্যবহার করা যায়।</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rules_item">
                                <div class="rules_head">
                                    <h2 class="border-0">এটির সাথে যা যা থাকছে</h2>
                                    <div class="rules_des">
                                        <ul>
                                            <li>একটি এডাল্ট মাস্ক।</li>
                                            <li>একটি বেবি মাস্ক।</li>
                                            <li>একটি মাউথ টিউব।</li>
                                            <li>একটি USB ক্যাবল।</li>
                                                              <li>একটি মেস নেবুলাইজার মেশিন।</li>
                                            <li>ইউজার ম্যনুয়াল।</li>
                                                              <li>এক জোড়া ব্যাটারি সম্পূর্ন ফ্রী।</li>
                                            
                                        </ul>
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

    <section class="form_sec">
        <div class="container">
           <div class="row">
             <div class="col-sm-12">
                <div class="form_inn">
                    <div class="col-sm-12">
                        <div class="row">
                <div class="col-sm-12">
                    <h2 class="campaign_offer">অফারটি সীমিত সময়ের জন্য, তাই অফার শেষ হওয়ার আগেই অর্ডার করুন</h2>
                </div>
            </div>
            <div class="row order_by">
            <div class="col-sm-5 cus-order-2">
                <div class="checkout-shipping" id="order_form">
                    <form action="{{route('customer.ordersave')}}" method="POST" data-parsley-validate="">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="potro_font">আপনার ইনফরমেশন দিন  </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label for="name">আপনার নাম লিখুন * </label>
                                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="নাম" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- col-end -->
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label for="phone">আপনার মোবাইল লিখুন *</label>
                                        <input type="number" minlength="11" id="number" maxlength="11" pattern="0[0-9]+" title="please enter number only and 0 must first character" title="Please enter an 11-digit number." id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}" placeholder="+৮৮ বাদে ১১ সংখ্যা "  required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- col-end -->
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label for="address">আপনার ঠিকানা লিখুন   *</label>
                                        <input type="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="জেলা, থানা, গ্রাম " name="address" value="{{old('address')}}"  required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label for="area">আপনার এরিয়া সিলেক্ট করুন  *</label>
                                        <select type="area" id="area" class="form-control @error('area') is-invalid @enderror" name="area"   required>
                                            @foreach($shippingcharge as $key=>$value)
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- col-end -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="order_place" type="submit">অর্ডার কনফার্ম  করুন </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                </form>
                </div>
            </div>
            <!-- col end -->
            <div class="col-sm-7 cust-order-1">
                <div class="cart_details">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="potro_font">পণ্যের বিবরণ </h5>
                        </div>
                        <div class="card-body cartlist  table-responsive">
                            <table class="cart_table table table-bordered table-striped text-center mb-0">
                                <thead>
                                   <tr>
                                      <th style="width: 20%;">ডিলিট</th>
                                      <th style="width: 40%;">প্রোডাক্ট</th>
                                      <th style="width: 20%;">পরিমাণ</th>
                                      <th style="width: 20%;">মূল্য</th>
                                     </tr>
                                </thead>

                                <tbody>
                                    @foreach(Cart::instance('shopping')->content() as $value)
                                    <tr>
                                        <td>
                                            <a href="{{route('product',$value->options->slug)}}"><i class="fas fa-trash text-danger"></i></a>
                                        </td>
                                        <td class="text-left">
                                             <a style="font-size: 14px;" href="{{route('product',$value->options->slug)}}"><img src="{{asset($value->options->image)}}" height="30" width="30"> {{Str::limit($value->name,20)}}</a>
                                        </td>
                                        <td width="15%" class="cart_qty">
                                            <div class="qty-cart vcart-qty">
                                                <div class="quantity">
                                                    <button class="minus cart_decrement"  data-id="{{$value->rowId}}">-</button>
                                                    <input type="text" value="{{$value->qty}}" readonly />
                                                    <button class="plus  cart_increment" data-id="{{$value->rowId}}">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>৳{{$value->price*$value->qty}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                     <tr>
                                      <th colspan="3" class="text-end px-4">মোট</th>
                                      <td>
                                       <span id="net_total"><span class="alinur">৳ </span><strong>{{$subtotal}}</strong></span>
                                      </td>
                                     </tr>
                                     <tr>
                                      <th colspan="3" class="text-end px-4">ডেলিভারি চার্জ</th>
                                      <td>
                                       <span id="cart_shipping_cost"><span class="alinur">৳ </span><strong>{{$shipping}}</strong></span>
                                      </td>
                                     </tr>
                                     <tr>
                                      <th colspan="3" class="text-end px-4">সর্বমোট</th>
                                      <td>
                                       <span id="grand_total"><span class="alinur">৳ </span><strong>{{$subtotal+$shipping}}</strong></span>
                                      </td>
                                     </tr>
                                    </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- col end -->
            </div>
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
