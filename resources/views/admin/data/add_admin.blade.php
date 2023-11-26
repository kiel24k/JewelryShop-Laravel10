@extends('admin.index')
@section('data')
admin.data.add_admin
<add-admin>
    <div class="add-admin">
        <div class="container">
           <form action="{{route('admin.add')}}" method="post">
            @csrf
            <div class="username">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="email">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="password">
                <input type="text" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="submit">
               <button type="submit" class="btn btn-info">Submit</button>
            </div>
           </form>
        </div>
    </div>
</add-admin>
@endsection
