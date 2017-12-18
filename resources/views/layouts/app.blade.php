<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            // TODO: Move this out of global space
            function embedVideo(video) {
                console.log('video', video);
                document.getElementById('embed').innerHTML = unescape(video.html);
            }
        </script>

        <title>The Cry of Jazz | @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <style>
            .embed-container {
              position: relative;
              padding-bottom: 56.25%;
              overflow: hidden;
            }
                    
            .embed-container iframe,
            .embed-container object,
            .embed-container embed {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }
        </style>
    </head>
    <body>

        <div class="embed-container">
            <iframe src="https://player.vimeo.com/video/243012636" style="width: 100vw;" frameborder="0"></iframe>
        </div>

        <div class="container">
            @yield('content')
        </div>

        @section('scripts')
            <script type="text/javascript" src="/js/app.js"></script>
        @show
    </body>
</html>