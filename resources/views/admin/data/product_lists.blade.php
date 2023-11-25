@extends('admin.index')
@section('data')
    admin.data.product_lists

    <product>
        <div class="container">
            <button class="btn btn-outline-primary mb-4"><a href="" class="nav-link">Add Product</a></button>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>PRODUCT IMAGE</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT DESCRIPTION</th>
                        <th>PRODUCT PRICE</th>
                        <th>PRODUCT QUANTITY</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminList as $list)
                        <tr>
                            <td>??</td>
                            <td>{{ $list->product_name }}</td>
                            <td>{{ $list->product_description }}</td>
                            <td>{{ $list->product_price }}</td>
                            <td>{{ $list->product_quantity }}</td>
                            <td class="text-center">
                                <button class="btn btn-primary"><a href="{{route('product.update.display',$list->id)}}" class="nav-link">EDIT</a></button>
                                <button class="btn btn-danger">Update</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </product>
@endsection
