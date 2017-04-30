<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eric Silva Design') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
<div id="app">

    <div class="container">

        <nav class="header">
            <div class="header-left">
                <label class="nav-toggle" for="nav-toggle-state">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>

            <div class="header-center">
                <a class="nav-item logo" href="#">
                    <img src="{{ asset('images/v1/1.3-logo.png') }}">
                </a>
            </div>

            <div class="header-right">
                <p class="header-text">Contact</p>
            </div>
        </nav>

        @yield('content')

    </div>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
