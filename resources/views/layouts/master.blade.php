<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{--<link rel="shortcut icon" href="favicon.ico">--}}
    <link href="{{ asset("css/main.css") }}" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>

</head>

<body class="gray-bg top-navigation">

    @yield('welcome')
    @yield('login')
    @yield('register')

<script src="{{ asset("js/vendor.js") }}"></script>
    @yield('scripts')

</body>

</html>