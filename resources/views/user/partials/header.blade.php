<nav>
    <div class="nav navbar-expand">
        <div class="header container-fluid">
            <ul class="navbar-nav justify-content-center">
                @auth('user_list')
                    <li class="nav-item">
                        <a href="" class="nav-link p-4">Gifts</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-4">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-4">Mens</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-4">Womens</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link p-4">Watches</a>
                    </li>
                    <li>
                        <a href="" class="nav-link p-4">{{ Auth('user_list')->user()->email }}</a>
                    <li class="nav-item">
                        <a href="{{ route('user.logout') }}" class="nav-link p-3"><button
                                class="btn btn-danger">Logout</button></a>
                    </li>
                @else
                    <li class="nav-item p-4 signup">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           <b> Sign in</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('user.login.page') }}"><b>Login</b></a></li>
                            <li><a class="dropdown-item" href=""><b>Signup</b></a></li>
                            <li><a class="dropdown-item" href="{{ route('user.signup.page') }}"><b>Signup as admin</b></a></li>
                        </ul>
                    </li>
                @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>

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
