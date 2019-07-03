<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="overall.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/96523c0c92.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    html,body{
        height: 100%;
        width:100%
    }
    .overlay_login {
    background: rgba(244,244,244,0.30);
    height: 100%;
    width:100%;
    }
</style>

<body style="background-image:url('img/GE.png')">
    <div class="overlay_login h-100 w-100">
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
