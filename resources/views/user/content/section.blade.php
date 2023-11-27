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
                    <h4 class="mt-4">Products</h4>

                    <div class="row text-center">
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=""
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=""
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info "><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>

                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=""
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                            alt="">
                        <p class="mt-3">Watch na maganda</p>
                        <p class="">P1000.43</p>
                        <div class="buy">
                            <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                            </p>
                        </div>
                    </div>
                        <div class="col m-3 p-2"><img src="{{ asset('watch.jpg') }}" width="200px" class=" "
                                alt="">
                            <p class="mt-3">Watch na maganda</p>
                            <p class="">P1000.43</p>
                            <div class="buy">
                                <button class="btn btn-outline-info"><a href="" class="text-end">Place Order</a></button>
                                </p>
                            </div>
                        </div>
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
