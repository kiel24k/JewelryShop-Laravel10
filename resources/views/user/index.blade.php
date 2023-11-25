<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>

    <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user.css')}}">
</head>
<body>
    @include('user.partials.header')
user index
@yield('content')

<script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
