<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Print</title>
    <link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/css/all.min.css')}}" />
</head>
<body>
    <style>
        .customer-invoice {
            page-break-before: always;
        }
        body{
            background:#F1F2F5
        }
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
        font-size: 16px;
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
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3 text-center">
            <button onclick="printFunction()"class="no-print btn btn-xs btn-success waves-effect waves-light"><i class="fa fa-print"></i></button>
        </div>
    </div>
</div>

<?php
use Illuminate\Support\Facades\DB;
$orderIDs = unserialize($invoice->order_id); 
?>


<?php $count = 1; 
    foreach ($orderIDs as $orderID) {
?>
@foreach($orders as $order)

<?php

    if($count == 1) {
        echo '<div class="section">';
        $last = true;
    }
?>
     
<section class="customer-invoice ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="invoice-innter" style="width:760px;margin: 0 auto;background: #fff;overflow: hidden;padding: 30px;padding-top: 0;">
                    
                    <div class="div-section">
                        <table class="table table-striped" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <img src="{{asset($generalsetting->white_logo)}}" style="max-width:50px; display:block;"/>
                                    <strong>Invoice From: </strong>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$generalsetting->name}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->phone}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->email}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->address}}</p>
                                </td>
                                
                                <td style="width:40%">
                                    <h4><strong>Invoice To:</strong></h4>
                                    <p style="font-size:16px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->name:''}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->phone:''}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->address:''}}</p><br>
                                    <p style="font-size:16px;line-height:1.8;color:#222;">{{$order->shipping?$order->shipping->area:''}}</p>
                                </td>
                                <td>
                                    <p style="font-size: 16px; color: #222;font-weight:bold; transform: skew(-36deg);">Invoice ID : <strong>#{{$order->invoice_id}}</strong></p>
                                    <p style="font-size: 16px; color: #222;font-weight:bold; transform: skew(-36deg);">Order Date: <strong>{{$order->created_at->format('d-m-y')}}</strong></span></p>
                                    <p style="font-size: 16px; color: #222;"><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{$order->payment?$order->payment->payment_method:''}}</span></p>
                                </td>
                
                            </tr>
                        </table>
                
                        <div style=" display: flex; flex-direction: row; justify-content: space-between; ">
                            <p>NB:  This invoice will be used as a Warranty Card from purchase date ({{ date('Y-m-d') }}). </p>
                            <p>Order Recived By : {{ $order->name }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
    <?php
    if($count == 2 ) {
        echo '</div>';
        $count = 1;
    }else{
        $count++;
    }
} 
?>

@endforeach
<script>
    function printFunction() {
        window.print();
    }
</script>
</body>
</html>
