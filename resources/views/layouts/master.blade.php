<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/work.css">
        <script src="/js/fabric.min.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/html2canvas.js"></script>
      {{--   <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
       --}}
        <script src='/js/spectrum.js'></script>
            <link rel='stylesheet' href='/css/spectrum.css' />
            <script src="/js/work.js"></script>

       
    </head>
    <body>
       @yield('content')

      
    </body>
</html>