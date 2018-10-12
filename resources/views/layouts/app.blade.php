<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials.header')
        <section class="container-fluid mt-5">
            @yield('content')
        </section>
        <footer class="footer">
            <p>&copy; RenterHood</p>
        </footer>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
