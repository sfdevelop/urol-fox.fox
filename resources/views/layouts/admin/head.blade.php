<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Sfdevelop">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('administrator/assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('administrator/assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('administratoristrator/assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/vendors/animate-css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/dashboard-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/intro.min.css')}}">

    <link rel="stylesheet" type="text/css" href=".{{asset('administrator/assets/css/custom/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/login.css')}}">

    @section('new-css')
    @show
</head>
