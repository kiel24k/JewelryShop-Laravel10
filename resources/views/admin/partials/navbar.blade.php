
<navbar>
<div class="navbar navbar-expand bg-info">
    <div class="container justify-content-center">
        <ul class="navbar-nav  " >
            <li class="nav-item p-2">
                <a href="{{route('user.list')}}" class="nav-link">Users</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{route('user.orders')}}" class="nav-link">User Order</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{route('user.products')}}" class="nav-link">Product</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{route('admin.lists')}}" class="nav-link">Admins</a>
            </li>
            <li class="nav-item p-2">
                <a href="" class="nav-link bg-danger text-end">Logout</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{route('user.section')}}" class="nav-link bg-success">User Page</a>
            </li>
            <li class="nav-item p-2">
                <a href="" class="nav-link text-dark">@auth('admin')
                <p>Welcome {{Auth('admin')->user()->username}}!!</p>
                @endauth</a>
            </li>
        </ul>
    </div>
</div>
</navbar>
