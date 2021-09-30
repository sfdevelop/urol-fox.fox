<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.urol.meta')
</head>

<body>

{{--@include('layouts.urol.menu')--}}

@widget('menuWidget')

@yield('content')


@widget('footerWidget')

<!--JS-->
<script src="{{asset('assets/js/main.min.js')}}"></script>
@section('new-js')
@show
</body>

</html>
