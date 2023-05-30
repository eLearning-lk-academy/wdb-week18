@extends('layouts.web')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('cart.confirm', urlencode(base64_encode($order->id))) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input class="form-control" type="text" name="first_name" id="first_name"
                                    value="{{ old('first_name') }}">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name" id="last_name"
                                    value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone"
                                    value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class=" mt-2">
                            <label for="address" class="form-label">Address</label>
                            <input class="form-control" type="text" name="address" id="address"
                                value="{{ old('address') }}">
                        </div>
                        <div class="mt-2">
                            <div class="align-items-center d-flex form-check">
                                <input class="form-check-input" type="radio" name="paymethod" value="payhere"
                                    id="payhere">
                                <label class="form-check-label" for="payhere">
                                    <img src="https://www.payhere.lk/downloads/images/payhere_long_banner_dark.png"
                                        alt="payhere" width="80%">
                                </label>
                            </div>
                            <div class="align-items-center d-flex form-check mt-2">
                                <input class="form-check-input" type="radio" name="paymethod" value="cash"
                                    id="cash">
                                <label class="form-check-label" for="cash">
                                    Cash
                                </label>
                            </div>
                        </div>
                        <div class=" mt-2 float-right">
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4">

                </div>
            </div>
        </div>
    </main>
@endsection
