<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RuneGraphs - @yield('title')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400|Montserrat:400,700">
</head>

<style>
html, body {
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: hidden;
}

.container-fluid {
    width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin: 0;
}
</style>
<body>
@component('components.navbar') @endcomponent


<div class="container-fluid">
        @component('components.header') @endcomponent
    @yield('content')
</div>

</body>
</html>


