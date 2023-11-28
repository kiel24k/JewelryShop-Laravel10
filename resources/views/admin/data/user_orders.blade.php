@extends('admin.index')
@section('data')
admin.data.user_orders
<div class="user-order">
    <div class="container">
        <table class="table table-bordered table-info">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>ORDER ID</th>
                    <th>EMAIL</th>
                    <th>ORDERS</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userOrder as $id => $order )
                  <tr>
                    <td>{{$id + 1}}</td>
                    <td>{{$order->order_id}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->orders}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>P{{$order->price}}</td>
                    <td>{{$order->status}}</td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
