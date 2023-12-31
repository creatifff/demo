<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <script src="{{ asset('public/js/main.js') }}" defer></script>
    <title>@yield('title') - True Games</title>
</head>
<body>
    @include('components.header')
    @if(session()->has('message'))
        <div class="container">
            <div class="info-message">{{ session()->get('message') }}</div>
        </div>
    @endif
    @yield('content')
    @include('components.footer')
</body>
</html>
