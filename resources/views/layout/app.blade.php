<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ANGEL</title>
    <!-- Reset -->
    <link rel="stylesheet" href="{{asset('asset/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/base.css')}}"/>
    <!-- Blocks -->
    <link rel="stylesheet" href="{{asset('asset/css/blocks/btn.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/contact.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/about.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/header.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/galerea.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/blocks/home.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/servise.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/footer.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/blocks/mastera.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/blocks/yslugi.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/blocks/section.css.css')}}"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('asset/css/fonts/Georgia/stylesheet.css')}}"/>
    <link rel="stylesheet" href="{{asset('asset/css/fonts/Lato/stylesheet.css')}}"/>

    <!-- Blocks -->
    <link rel="stylesheet" href="{{asset('asset/css/blocks/cont.css')}}" />


</head>
<body>
@include('include.header')
@yield('content')
@include('include.footer')
<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>
