@extends('user.index')
@section('content')
    user.content.order_check

    <br>







    <div class="order-check">
        <div class="container">
            <form action="{{ route('place.order') }}" method="post">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ Auth('user_list')->user()->id }}">
                    <input type="hidden" name="email" value="{{ Auth('user_list')->user()->email }}">
                    <input type="hidden" name="product_quantity" value="{{ $order->product_quantity }}">
                    <input type="hidden" name="product_id" value="{{ $order->id }}">
                </div>
                <div class="product-name">
                    <input type="text" name="orders" value="{{ $order->product_name }}" class="form-control">
                </div>
                <div class="product-description">
                    <input type="text" name="description" value="{{ $order->product_description }}" class="form-control">
                </div>
                <div class="product-price">
                    <input type="text" name="price" value="{{ $order->product_price }}" class="form-control">
                </div>
                <div class="product-quantity">
                    <input type="number" name="quantity" value="1" class="form-control" min="1">
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-success">Place Order</button>
                </div>
            </form>
        </div>
    </div>
@endsection
