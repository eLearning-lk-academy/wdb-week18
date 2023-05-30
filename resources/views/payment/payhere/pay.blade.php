@extends('layouts.web')
@section('content')
    <main>
        <div class="container d-flex justify-content-center text-center">
            <div class="">
                <h2>Payhere Payment</h2>
                <h3>Order ID: {{ $order->id }}</h3>
                <h4>Total: {{ $order->total }}</h4>
                <form class="" method="post" action="{{ env('PAYHERE_ENDPOINT') }}">
                    <input type="hidden" name="merchant_id" value="{{ env('PAYHERE_MERCHANT_ID') }}">

                    <input type="hidden" name="return_url" value="{{route('payhere.return', urlencode(base64_encode($order->id)))}}">
                    <input type="hidden" name="cancel_url" value="{{route('payhere.cancel', urlencode(base64_encode($order->id)))}}">
                    <input type="hidden" name="notify_url" value="https://8000.nuwanr.dev/api/payhere/notify">

                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <input type="hidden" name="items" value="Order {{ $order->id }}">
                    <input type="hidden" name="currency" value="LKR">
                    <input type="hidden" name="amount" value="{{ number_format($order->total, 2, '.', '') }}">

                    <input type="hidden" name="first_name" value="{{ $checkoutData->first_name ?? '' }}">
                    <input type="hidden" name="last_name" value="{{ $checkoutData->last_name ?? '' }}">
                    <input type="hidden" name="email" value="{{ $checkoutData->email ?? '' }}">
                    <input type="hidden" name="phone" value="{{ $checkoutData->phone ?? '' }}">
                    <input type="hidden" name="address" value="{{ $checkoutData->address ?? '' }}">
                    <input type="hidden" name="city" value="Colombo">
                    <input type="hidden" name="country" value="Sri Lanka">
                    <input type="hidden" name="hash" value="{{ $hash }}"> <!-- Replace with generated hash -->
                    <input type="submit" class="btn" value="Pay Now">
                </form>
            </div>
        </div>
    </main>
@endsection
