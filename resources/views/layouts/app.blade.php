<!DOCTYPE html>
<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

@yield('css')
<!-- Compiled and minified JavaScript -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.css") }}" type="text/css">
    <link rel="stylesheet" href="{{asset("bower_components/izitoast/dist/css/iziToast.min.css")}}" type="text/css">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"                 ></script>-->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"             ></script>-->
    <script src="{{asset("bower_components/jquery/dist/jquery.min.js") }}"           type="text/javascript"></script>
    <script src="{{asset("bower_components/bootbox.js/bootbox.js")}}"            type="text/javascript"></script>
    <script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.js")}}"   type="text/javascript"></script>
    <script src="{{asset("bower_components/izitoast/dist/js/iziToast.min.js")}}" type="text/javascript"></script>
    @yield('js')

    <title>PetSyst |  @yield('title')</title>
</head>
<body background="{{asset('img/wallpaper.jpg')}}">
@yield('content')
</body>
</html>