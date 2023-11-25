@extends('admin.index')
@section('data')
    admin.update.product.blade
    <product-update>
        <div class="product-update">
            <div class="container">
                <form action="{{ route('product.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $productDisplay->id }}">
                    <div class="product-name">
                        @error('product_name')
                            <p class="alert alert-danger mt-2" role="alert">{{ $message }}</p>
                        @enderror
                        <input type="text" name="product_name" class="form-control" placeholder="Input product name"
                            value="{{ $productDisplay->product_name }}">
                    </div>

                    <div class="product-price">
                        @error('product_price')
                            <p class="alert alert-danger mt-2" role="alert">{{ $message }}</p>
                        @enderror
                        <input type="text" name="product_price" class="form-control" placeholder="Input product price"
                            value="{{ $productDisplay->product_price }}">
                    </div>

                    <div class="product-quantity">
                        @error('product_quantity')d
                            <p class="alert alert-danger mt-2" role="alert">{{ $message }}</p>
                        @enderror
                        <input type="text" name="product_quantity" class="form-control"
                            placeholder="Input product quantity" value="{{ $productDisplay->product_quantity }}">
                    </div>
                    <div class="product-description">
                        @error('product_description')
                            <p class="alert alert-danger mt-2" role="alert">{{ $message }}</p>
                        @enderror
                        <textarea name="product_description" class="form-control" rows="5" cols="1">{{ $productDisplay->product_description }}</textarea>
                    </div>
                    <div class="product-submit">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </product-update>
@endsection
