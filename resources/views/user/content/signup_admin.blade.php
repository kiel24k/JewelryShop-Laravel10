@extends('user.index')
@section('content')
    user.content.signup_admin
    <signup-admin>
        <div class="signup_admin">
            <div class="container">
                <form action="{{route('user.admin.login')}}" method="post">
                    @csrf
                    <div class="email">
                        @error('email')
                        <p>{{$message}}</p>
                        @enderror
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="password">
                        <input type="text" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </signup-admin>
@endsection
