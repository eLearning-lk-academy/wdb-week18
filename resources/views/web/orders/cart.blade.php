@extends('layouts.web')
@section('content')
    <main>
        <div class="container">
            <form action={{route('order.create')}} method="post">
            @csrf
            @php 
                $total = 0;
            @endphp
            @foreach ($orderItems as $item)
                @php
                    $total += $item->amount;
                @endphp
                <x-order.list-item-room :item="$item" />
            @endforeach
            <div class="float-right">
                <h4>Total: <span>{{$total}}</span></h4>
                <button type="submit" class="btn btn-primary">Checkout</button>
            </div>
        </div>
    </main>
@endsection

@push('css')
    <style>
        .cart-item {
            position: relative;
        }

        .cart-item-remove {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ff0000b3;
            border: none;
            width: 30px;
            height: 30px;
            font-size: 1.5rem;
            border-radius: 50%;
            color: #000000ad;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cart-item-remove:hover {
            color: #fff;
            box-shadow: 0px 0px 5px 0px #000000ad;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $('.cart-item-remove').on('click', function (){
            let item = $(this).data('item');
            $('#cart-item-'+item).remove();
        })
    </script>
@endpush