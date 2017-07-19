<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Hfic CSS Renewals')"> @yield('meta')

    <!-- Styles -->
    {{ Html::style(mix('css/app.css')) }} {{ Html::style(mix('css/all.css')) }}
</head>

<body>

    @include('layouts.partials._header')
    <div class="container-fluid body-content">
        @yield('content')
    </div>
    <!-- container -->

    @include('layouts.partials._footer')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('js')
</body>

</html>