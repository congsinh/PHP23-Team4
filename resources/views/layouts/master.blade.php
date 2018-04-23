<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="../../../public/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">

    <!-- Custom CSS -->
    {{--<link rel="stylesheet" href="../../../public/css/owl.carousel.css">--}}
    <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
    {{--<link rel="stylesheet" href="../../../public/style.css">--}}
    <link rel="stylesheet" href="{{asset("style.css")}}">
    {{--<link rel="stylesheet" href="../../../public/css/responsive.css">--}}
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">

</head>
<body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <!-- Latest jQuery form server -->
    {!! Html::script('js/app.js') !!}
    <!-- Bootstrap JS form CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="../../../public/js/owl.carousel.min.js"></script>
    <script src="{{asset("js/owl.carousel.min.js")}}"></script>
    <script src="../../../public/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="../../../public/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="{{asset("js/main.js")}}"></script>

    <!-- Slider -->
    {!! Html::script('js/bxslider.min.js') !!}
    <script type="text/javascript" src="../../../public/js/script.slider.js"></script>
</body>
</html>