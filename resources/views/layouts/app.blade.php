<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CNP @yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="container">
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <h1>CNP @yield('title')</h1>
                </div>
                @yield('content')
            </div>
        </div>
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('body_js')
    </body>
</html>