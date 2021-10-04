<meta charset="UTF-8">
<link rel="shortcut icon" href="{{asset('assets/i/favicon.png')}}" type="img/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index, follow, noodp">
<meta name="googlebot" content="index, follow">
<meta name="google" content="notranslate">
<meta name="format-detection" content="telephone=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">

{!! SEO::generate() !!}
@section('css_blade')
@show
