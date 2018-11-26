<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ env('APP_NAME') }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            @include('partials.header')
            <main class="container-fluid my-5">
                @yield('content')
            </main>
            <footer class="footer">
                <span>&copy; RenterHood 2018</span>
                @yield('footer')
            </footer>
        </div>
        @push('scripts')
            <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @endpush
        @stack('scripts')
    </body>
</html>
