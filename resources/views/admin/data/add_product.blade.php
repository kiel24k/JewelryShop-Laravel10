@extends('admin.index')
@section('data')
    admin.data.add_product
    <add-product>
        <div class="add-product">
            <div class="container">
                <form action="{{route('add.products')}}" method="post">
                    @csrf
                    <div class="product-name">
                        @error('product_name')
                          <p class="alert alert-danger mt-1 mb-2">{{$message}}</p>
                        @enderror
                        <input type="text" name="product_name" placeholder="Enter product Name" class="form-control">
                    </div>
                    <div class="product-description">
                        @error('product_description')
                          <p class="alert alert-danger mt-1 mb-2">{{$message}}</p>
                        @enderror
                        <input type="text" name="product_description" placeholder="Enter Product Description" class="form-control">
                    </div>
                    <div class="product-price">
                        @error('product_price')
                          <p class="alert alert-danger mt-1 mb-2">{{$message}}</p>
                        @enderror
                        <input type="text" name="product_price" placeholder="Enter Product Price" class="form-control">
                    </div>
                    <div class="product-quantity">
                        @error('product_quantity')
                          <p class="alert alert-danger mt-1 mb-2">{{$message}}</p>
                        @enderror
                        <input type="text" name="product_quantity" placeholder="Enter Product Quantity" class="form-control">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn btn-info text-white">Add Now!</button>
                    </div>
                </form>
            </div>
        </div>
    </add-product>
@endsection
