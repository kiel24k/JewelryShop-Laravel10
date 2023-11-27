@extends('user.index')
@section('content')


    user.content.section
    @auth('user_list')
    <p>Welcome, {{ Auth('user_list')->user()->email }}!</p>

    @endauth


@endsection
