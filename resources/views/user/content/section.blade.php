@extends('user.index')
@section('content')
    {{-- user.content.section
    @auth('user_list')
    <p>Welcome, {{ Auth('user_list')->user()->email }}!</p>


    @endauth --}}

    <nav-section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 one text-center" style="border-radius:50px;">
                    <div class="nav">
                        <ul class="navbar-nav text-start">
                            <li class="nav-item">
                                <h1>Ecommerce</h1>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Gifts</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Mens</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Womens</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Watches</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col two bg-body-secondary" style="border-radius:0px;">
                    <div class="input-group search mt-4">
                        <input type="text" class="form-control" placeholder="Search" aria-label=""
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary buttonsearch" type="button">Search</button>
                    </div>
                    <h4 class="prod">Products</h4>

                    <div class="row text-center">
                        @foreach ($productData as $product )
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=""
                            alt="">
                      <form action="">
                        <p class="mt-3">{{$product->product_name}}</p>
                        <p class="mt-3">x{{$product->product_quantity}}</p>
                        <p class="">₱{{$product->product_price}}</p>
                        <div class="buy">
                            <button class="btn btn-outline-info "><a href="{{route('user.order.check',$product->id)}}" class="text-end">Check
                                    Item</a></button>
                            </p>
                      </form>
                        </div>
                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav-section>

    {{-- <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav> --}}
@endsection
