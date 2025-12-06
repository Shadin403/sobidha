@php
    $subtotal = Cart::instance('shopping')->subtotal();
    $subtotal = str_replace(',', '', $subtotal);
    $subtotal = str_replace('.00', '', $subtotal);
    $shipping = Session::get('shipping') ? Session::get('shipping') : 0;
@endphp
<h4 class="mb-4"
    style="color: var(--text-color); font-weight: 700; border-bottom: 2px solid #eee; padding-bottom: 10px;">অর্ডার
    সামারি</h4>

<div class="cart_items mb-4">
    @foreach (Cart::instance('shopping')->content() as $value)
        <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
            <div class="d-flex align-items-center">
                <img src="{{ asset($value->options->image) }}" alt="Product" class="rounded"
                    style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                <div>
                    <h6 class="mb-0" style="font-size: 14px;">{{ Str::limit($value->name, 20) }}</h6>
                    <small class="text-muted">Qty: {{ $value->qty }}</small>
                </div>
            </div>
            <span class="fw-bold">৳{{ $value->price * $value->qty }}</span>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-between mb-2">
    <span>সাবটোটাল</span>
    <span class="fw-bold">৳{{ $subtotal }}</span>
</div>
<div class="d-flex justify-content-between mb-3">
    <span>ডেলিভারি চার্জ</span>
    <span class="fw-bold" id="cart_shipping_cost">৳{{ $shipping }}</span>
</div>
<div class="d-flex justify-content-between mb-4 pt-3 border-top">
    <span class="h5 fw-bold">সর্বমোট</span>
    <span class="h5 fw-bold text-primary" id="grand_total">৳{{ $subtotal + $shipping }}</span>
</div>

<button type="submit" class="btn btn-primary w-100 btn-lg btn-pulse">
    অর্ডার কনফার্ম করুন <i class="fas fa-check-circle"></i>
</button>
