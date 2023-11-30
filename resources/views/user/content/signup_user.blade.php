@extends('user.index')
@section('content')
    user.content.signup_user
    <div class="signup-user">
        <div class="container">
            <form action="{{route('signup.user')}}" method="post">
                @csrf
                <div class="email">
                    @error('email')
                    <p>{{$message}}</p>

                    @enderror
                    <input type="text" name="email" placeholder="input email" class="form-control">
                </div>
                <div class="address">
                    @error('address')
                    <p>{{$message}}</p>

                    @enderror
                    <input type="text" name="address" placeholder="address" class="form-control">
                </div>
                <div class="password">
                    @error('password')
                    <p>{{$message}}</p>

                    @enderror
                    <input type="text" name="password" placeholder="password" class="form-control">
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-info">Signup</button>
            </form>
        </div>
    </div>

    </div>
    </div>
@endsection
