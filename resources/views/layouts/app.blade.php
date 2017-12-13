<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>The Cry of Jazz | @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        @section('scripts')
            <script type="text/javascript" src="/js/app.js"></script>
        @show
    </body>
</html>