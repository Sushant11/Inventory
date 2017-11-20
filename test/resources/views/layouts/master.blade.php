<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
    <meta charset="UTF-8">
    <meta name="SC" content="Inventory Manager">
    <meta http-equiv="PRAGMA" content="NO-CACHE">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta property="og:image" content=""/>--}}
    @yield('title')
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    @yield('metatags')
<!--Import Google Icon Font-->
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    {{--MaterializeCSS--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{url('css/frontend/master.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend.min.css')}}">

    <link rel="stylesheet" href="{{url('css/pagination.min.css')}}">
    <link rel="stylesheet" href="{{url('css/toastr.min.css')}}">
    @yield('styles')
</head>
<body>
<!-- Modal Structure -->
@yield('content')

{{--Scripts--}}
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{--@include('layouts.alert')--}}
{{--<script src="{{url('js/jquery.backDetect.min.js')}}"></script>--}}
<script src="{{url('js/lightslider.min.js')}}"></script>
<script src="{{url('js/master.js')}}"></script>
@yield('footer')
@yield('scripts')
</body>
</html>