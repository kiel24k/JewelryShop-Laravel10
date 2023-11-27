@extends('user.index')
@section('content')
    user.content.login

    <login>
        <div class="login">
            <div class="container">
                <form action="{{ route('user.login') }}" method="post">
                    @csrf
                    <div class="email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="email" placeholder="email" class="form-control">
                    </div>
                    <div class="password">
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="submit">

                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </login>
@endsection
