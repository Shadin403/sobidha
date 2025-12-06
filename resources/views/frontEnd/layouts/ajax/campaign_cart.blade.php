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
                    <div class="d-flex align-items-center mt-1">
                        <button type="button" class="btn btn-xs btn-light border cart_decrement"
                            data-id="{{ $value->rowId }}" style="padding: 0 5px;"><i class="fas fa-minus"
                                style="font-size: 10px;"></i></button>
                        <span class="mx-2" style="font-size: 13px;">{{ $value->qty }}</span>
                        <button type="button" class="btn btn-xs btn-light border cart_increment"
                            data-id="{{ $value->rowId }}" style="padding: 0 5px;"><i class="fas fa-plus"
                                style="font-size: 10px;"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <span class="fw-bold d-block">৳{{ $value->price * $value->qty }}</span>
                <button type="button" class="btn btn-xs text-danger cart_remove p-0 mt-1"
                    data-id="{{ $value->rowId }}"><i class="fas fa-trash-alt"></i> Remove</button>
            </div>
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
