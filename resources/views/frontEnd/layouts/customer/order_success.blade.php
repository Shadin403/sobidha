@extends('frontEnd.layouts.master')
@section('title', 'Order Success')
@section('content')
<section class="customer-section my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-0 shadow-lg rounded-4">
                    {{-- Card Header --}}
                    <div class="card-header bg-success text-white text-center rounded-top-4 py-3">
                        <h3 class="mb-0">আপনার অর্ডারটি সফল হয়েছে!</h4
                        <small>আমাদের সাথে কেনাকাটা করার জন্য ধন্যবাদ।</small>
                    </div>

                    <div class="card-body p-4">

                        {{-- Box 1: Invoice & Shipping Info --}}
                        <div class="border rounded p-3 mb-2">
                            <div class="row">
                                {{-- Invoice Details --}}
                                <div class="col-md-4">
                                    <h6 class="mb-1">🧾 ইনভয়েস তথ্য</h5>
                                    <p class="mb-1"><strong>Invoice ID:</strong> {{ $order->invoice_id }}</p>
                                    <p class="mb-1"><strong>Order Date:</strong> {{ $order->created_at->format('d M, Y') }}</p>
                                    <p class="mb-1"><strong>Payment:</strong>
                                        @php
                                            // Eager loading in the controller is a better practice, e.g., Order::with('payment')->...
                                            $payment = App\Models\Payment::where('order_id', $order->id)->first();
                                        @endphp
                                        {{ $payment && $payment->payment_method == 'cod' ? 'Cash on Delivery' : ($payment->payment_method ?? 'N/A') }}
                                    </p>
                                </div>

                                {{-- Shipping Address --}}
                                <div class="col-md-4 text-md-end mt-4 mt-md-0">
                                    <h6 class="mb-1"> 🚚 ডেলিভারি ঠিকানা</h5>
                                    <p class="mb-1">{{ $order->shipping?->name }}</p>
                                    <p class="mb-1">{{ $order->shipping?->phone }}</p>
                                    <p class="mb-1">{{ $order->shipping?->address }}</p>
                                    <p class="mb-1">{{ $order->shipping?->area }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Box 2: Ordered Products --}}
                        <div class="border rounded p-3 mb-3">
                            <h6 class="mb-2">🛍️ অর্ডারকৃত পণ্যসমূহ</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Product</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-end">Unit Price</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderdetails as $item)
                                        <tr>
                                            <td>{{ $item->product_name }}</td>
                                            <td class="text-center">{{ $item->qty }}</td>
                                            <td class="text-end">৳{{ number_format($item->sale_price) }}</td>
                                            <td class="text-end">৳{{ number_format($item->sale_price * $item->qty) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Cost Summary --}}
                        <div class="row justify-content-end mb-4">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class="text-end">Subtotal:</th>
                                            <td class="text-end">৳{{ number_format($order->amount - $order->shipping_charge) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-end">Shipping:</th>
                                            <td class="text-end">৳{{ number_format($order->shipping_charge) }}</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th class="text-end fs-5">Grand Total:</th>
                                            <td class="text-end fw-bold text-danger fs-5">৳{{ number_format($order->amount) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Payment Note --}}
                        <div class="alert alert-info text-center rounded-pill">
                            আপনি ডেলিভারির সময় নগদে পেমেন্ট করবেন (Cash on Delivery)।
                        </div>

                        {{-- Go Home Button --}}
                        <div class="text-center mt-4">
                            <a href="{{ route('home') }}" class="btn btn-success px-4 rounded-pill">🏡হোমপেজে যান</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
{{-- Scripts can be included if needed --}}
{{-- <script src="{{ asset('public/frontEnd/') }}/js/parsley.min.js"></script> --}}
{{-- <script src="{{ asset('public/frontEnd/') }}/js/form-validation.init.js"></script> --}}
@endpush