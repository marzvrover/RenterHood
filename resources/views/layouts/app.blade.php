<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ env('APP_NAME') }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            @include('partials.header')
            <section class="container-fluid mt-5">
                @yield('content')
            </section>
            <footer class="footer py-2">
                <span>&copy; RenterHood 2018</span>
            </footer>
        </div>
        @push('scripts')
            <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @endpush
        @stack('scripts')
    </body>
</html>
