@extends('backEnd.layouts.master')
@section('title','Order Invoice')
@section('content')
<style>
    .customer-invoice {
        margin: 25px 0;
    }
    .invoice_btn{
        margin-bottom: 15px;
    }
    p{
        margin:0;
    }
    td{
        font-size: 13px;
    }
    table,
        th,
        td {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
            border: 1px solid #000 !important;
        }
    th,
        td {
            /*padding: 5px;*/
            text-align: left;
        }
    tr{
        padding-top: 5px;
        padding-bottom: 5px;
    }
        hr {
            border-top: 1px dashed red;
        }
   @page { 
    margin:0px;
    }
   @media print {
    .invoice-innter{
        margin-left: -120px !important;
    }
    .invoice_btn{
        margin-bottom: 0 !important;
    }
    td{
        font-size: 18px;
    }
    p{
        margin:0;
    }
    header,footer,.no-print,.left-side-menu,.navbar-custom {
      display: none !important;
    }
  }
</style>
<section class="customer-invoice ">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.orders',['slug'=>'all'])}}" class="no-print"><strong><i class="fe-arrow-left"></i> Back To Order</strong></a>
            </div>
            <div class="col-sm-6">
                <button onclick="printFunction()"class="no-print btn btn-xs btn-success waves-effect waves-light"><i class="fa fa-print"></i></button>
            </div>
            <div class="col-sm-12 mt-3">
                <div class="invoice-innter" style="width:760px; margin: 0 auto;">
                    <!--<table style="width:100%">-->
                    <!--    <tr>-->
                    <!--        <td style="width: 40%; float: left; padding-top: 15px;">-->
                    <!--            <img src="{{asset($generalsetting->white_logo)}}" width="190px" style="margin-top:25px !important" alt="">-->
                    <!--            <p style="font-size: 14px; color: #222; margin: 20px 0;"><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{$order->payment?$order->payment->payment_method:''}}</span></p>-->
                    <!--            <div class="invoice_form">-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222"><strong>Invoice From:</strong></p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222">{{$generalsetting->name}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->phone}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->email}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->address}}</p>-->
                    <!--            </div>-->
                    <!--        </td>-->
                    <!--        <td  style="width:60%;float: left;">-->
                    <!--            <div class="invoice-bar" style=" background: #4DBC60; transform: skew(38deg); width: 100%; margin-left: 65px; padding: 20px 60px; ">-->
                    <!--                <p style="font-size: 30px; color: #fff; transform: skew(-38deg); text-transform: uppercase; text-align: right; font-weight: bold;">Invoice</p>-->
                    <!--            </div>-->
                    <!--            <div class="invoice-bar" style="background: #fff; transform: skew(36deg); width: 72%; margin-left: 182px; padding: 12px 32px; margin-top: 6px;">-->
                    <!--                <p style="font-size: 15px; color: #222;font-weight:bold; transform: skew(-36deg); text-align: right; padding-right: 18px">Invoice ID : <strong>#{{$order->invoice_id}}</strong></p>-->
                    <!--                <p style="font-size: 15px; color: #222;font-weight:bold; transform: skew(-36deg); text-align: right; padding-right: 32px">Invoice Date: <strong>{{$order->created_at->format('d-m-y')}}</strong></span></p>-->
                    <!--            </div>-->
                    <!--            <div class="invoice_to" style="padding-top: 20px;">-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><strong>Invoice To:</strong></p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;">{{$order->shipping?$order->shipping->name:''}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;">{{$order->shipping?$order->shipping->phone:''}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;">{{$order->shipping?$order->shipping->address:''}}</p>-->
                    <!--                <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;">{{$order->shipping?$order->shipping->area:''}}</p>-->
                    <!--            </div>-->
                    <!--        </td>-->
                    <!--    </tr>-->
                    <!--</table>-->
                
                    <table class="table" border="1" cellspacing="0" cellpadding="0" style="background-color:#ffffff !important; margin-bottom:0px; border:0px !important;">
                            <tr>
                                <td style="border: none !important;">
                                    <img src="{{asset($generalsetting->white_logo)}}" style="max-width:90px; display:block;"/>
                                    <strong>Invoice From: </strong>
                                    <p style="font-size:13px;line-height:1.8;color:#222">{{$generalsetting->name}}</p>
                                    <p style="font-size:13px;line-height:1.8;color:#222">{{$contact->phone}}</p>
                                    <!--<p style="font-size:13px;line-height:1.8;color:#222">{{$contact->email}}</p>-->
                                    <p style="font-size:13px;line-height:1.8;color:#222">{{$contact->address}}</p>
                                </td>
                                
                                <td style="width:30%; border: none !important;">
                                    <br/>
                                    <strong>Invoice To:</strong>
                                    <p style="font-size:13px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->name:''}}</p>
                                    <p style="font-size:13px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->phone:''}}</p>
                                    <p style="font-size:13px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->address:''}}</p>
                                    <p style="font-size:13px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->area:''}}</p>
                                </td>
                                <td style="border: none !important;">
                                    <br/>
                                    <p style="font-size: 13px; color: #222;font-weight:bold;">Invoice ID : <strong>#{{$order->invoice_id}}</strong></p>
                                    <p style="font-size: 13px; color: #222;font-weight:bold;">Order Date: <strong>{{$order->created_at->format('d-m-y')}}</strong></span></p>
                                    <p style="font-size: 13px; color: #222;"><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{$order->payment?$order->payment->payment_method:''}}</span></p>
                                </td>
                
                            </tr>
                        </table>
                        
                    <table class="table" border="1" cellspacing="0" cellpadding="0" style="background-color:#ffffff !important; margin-bottom:0px;">
                        <thead>
                            <tr>
                                <th style="width: 10%">SL</th>
                                <th style="width: 50%">Product</th>
                                <th style="width: 10%">Quantity</th>
                                <th style="width: 15%">Price</th>
                                <th style="width: 15%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->orderdetails as $key=>$value)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$value->product_name}} <br> @if($value->product_size) <small>Size: {{$value->product_size}}</small> @endif   @if($value->product_color) <small>Color: {{$value->product_color}}</small> @endif </td>
                                <td>{{$value->qty}}</td>
                                <td>৳ {{$value->sale_price}}</td>
                                <td>৳ {{$value->sale_price*$value->qty}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        <tfoot>
                            <!--<tr>-->
                            <!--    <td colspan="1" style="border: none;"></td>-->
                            <!--    <td colspan="1" style="border: none;"></td>-->
                            <!--    <td colspan="1" style="border: none;"></td>-->
                            <!--    <th>SubTotal :  </th>-->
                            <!--    <td>৳ {{$order->orderdetails->sum('sale_price')}}</td>-->
                            <!--</tr>-->
                            <tr>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <th>Shipping(+) : </th>
                                <td>৳ {{$order->shipping_charge}}</td>
                            </tr>
                            <tr>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <th>Discount(-) : </th>
                                <td>৳ {{$order->discount}}</td>
                            </tr>
                            <tr>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <td colspan="1" style="border: none !important;"></td>
                                <th>Final Total : </th>
                                <td>৳ {{$order->amount}}</td>
                            </tr>
                        </tfoot>
                    </table>
                    
                    <div class="terms-condition" style="overflow: hidden; width: 100%; text-align: left; border-top: 1px solid #ddd; font-size:10px;">
                        <p><a href="{{route('page',['slug'=>'terms-condition'])}}">Terms & Conditions: </a>NB*  This invoice will be used as a Warranty Card from purchase date ({{ date('Y-m-d') }}).</p>
                    </div>
                    
                    <!--<div class="invoice-bottom">-->
                        
                    <!--    <table class="table" style="width: 300px; float: right;">-->
                    <!--        <tbody style="background:#f1f9f8">-->
                    <!--            <tr>-->
                    <!--                <th><strong>SubTotal</strong></th>-->
                    <!--                <td><strong>৳{{$order->orderdetails->sum('sale_price')}}</strong></td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><strong>Shipping(+)</strong></td>-->
                    <!--                <td><strong>৳{{$order->shipping_charge}}</strong></td>-->
                    <!--            </tr>-->
                    <!--            <tr>-->
                    <!--                <td><strong>Discount(-)</strong></td>-->
                    <!--                <td><strong>৳{{$order->discount}}</strong></td>-->
                    <!--            </tr>-->
                    <!--            <tr style="background:#4DBC60;color:#fff">-->
                    <!--                <td><strong>Final Total</strong></td>-->
                    <!--                <td><strong>৳{{$order->amount}}</strong></td>-->
                    <!--            </tr>-->
                    <!--        </tbody>-->
                    <!--    </table>-->
                    <!--    <div class="terms-condition" style="overflow: hidden; width: 100%; text-align: center; border-top: 1px solid #ddd;">-->
                    <!--        <h5><a href="{{route('page',['slug'=>'terms-condition'])}}">Terms & Conditions</a></h5>-->
                    <!--        <p style="text-align: center; font-size: 13px;">* NB:  This invoice will be used as a Warranty Card from purchase date ({{ date('Y-m-d') }}).</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function printFunction() {
        window.print();
    }
</script>
@endsection
