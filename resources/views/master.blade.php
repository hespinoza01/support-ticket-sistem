<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STS | @yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <!-- Import site styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('shared.navbar')
    @yield('content')

    <!--Import materialize.js-->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <!-- Import site scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.addEventListener('load', () => {
            let dropdowns = Array.from(document.querySelectorAll(".dropdown-trigger"));

            dropdowns.forEach(item => M.Dropdown.init(item));
        });
    </script>
</body>
</html>
