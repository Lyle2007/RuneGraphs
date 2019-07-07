{{-- HTML --}}
    <html lang="en">
    {{-- HEAD --}}
        <head>
            {{-- META --}}
            <meta charset="UTF-8">
            <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            {{-- TITLE --}}
            <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

            {{-- Styles --}}
            <link rel="stylesheet" href="/css/app.css">
            <link rel="stylesheet" href="/css/frontPage.css">

            {{-- FONTS --}}
            <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400|Montserrat:400,700">

            {{-- SCRIPTS --}}
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="https://kit.fontawesome.com/96523c0c92.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"
                    charset="utf-8"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"
                    charset="utf-8"></script>

        </head>
    {{-- QUICK STYLE --}}
        <style>
            html, body {
            max-width: 100%;
            overflow-x: hidden;

            }

            .container-fluid {
                width: 100%;
                padding-right: 0;
                padding-left: 0;
                margin: 0;
            }
        </style>


    {{-- BODY --}}
        <body>
            @component('components.navbar') @endcomponent
            @yield('body')
        </body>
    </html>
{{-- QUICK SCRIPT --}}
    <script>
            function btnMouse(x) {
        x.style.color = "#ccc";
        x.style.color = "#ccc";
        }

        function normalBtn(x) {
        x.style.color = "white";
        x.style.color = "white";
        }
    </script>




