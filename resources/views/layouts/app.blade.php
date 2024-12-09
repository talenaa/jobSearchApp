<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Job Search')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
    <body>
        <div id="app">
            <x-header />

            <main>
            @yield('content')
            </main>

            <x-footer />
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>