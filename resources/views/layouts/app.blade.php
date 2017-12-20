<!doctype html>

<html lang="{{ app()->getLocale() }}">

    @include('partials.head')

    <body>
        @include('partials.header')

        @yield('pre-content')

        <div class="container">
            @yield('content')
        </div>

        @include('partials.footer')

        @section('scripts')
            <script type="text/javascript" src="/js/app.js"></script>
        @show
    </body>

</html>
