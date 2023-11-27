

user.partials.header
 <nav>
    <div class="nav navbar-expand">
    <div class="container-fluid bg-info ">
<ul class="navbar-nav justify-content-center">
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
   @auth('user_list')
   <a href="" class="nav-link p-4">{{Auth('user_list')->user()->email}}</a>
   <li class="nav-item">
    <a href="{{route('user.logout')}}" class="nav-link p-3"><button class="btn btn-danger">Logout</button></a>
   </li>
@else
<li class="nav-item mt-4">
    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       Sign in
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="{{route('user.login.page')}}">Login</a></li>
        <li><a class="dropdown-item" href="">Signup</a></li>
        <li><a class="dropdown-item" href="{{route('user.signup.page')}}">Signup as admin</a></li>

      </ul>
</li>
   @endauth
</li>
    <li class="nav-item">
        <a href="" class="nav-link p-4">Profile</a>
    </li>


</ul>
    </div>
</div>
</nav>


