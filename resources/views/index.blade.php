<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="Gaming, Gamers Community, Community, Gamers">
        <meta name="description" content="Gamers Community Network seeks to create and maintain a safe, friendly, professional gaming environment for players of various game genres.  We also invest in content creators and gaming communities.">
        <meta name="author" content="Gamers Community LLC">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
        <title>Gamers Community</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body  >
        <div style="margin-left: -25px">
        @yield('content')
        </div>
        <div class="page_content" style="color: lightgrey; background-color: #111111">@yield('page_content')</div>

        <div style="background-color: #111111;">
            <footer>@include('nav.footer')<div style="height: 2px; background-color: #111111"></div>
            </footer>
        </div>
    </body>
</html>


