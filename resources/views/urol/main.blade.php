@extends('urol')

@section('content')

    @include('layouts.urol.slider')
    @include('layouts.urol.new')
    @include('layouts.urol.service_main')

    @if($saleProducts->count()!==4)
        @include('layouts.urol.sale')

    @else
        @include('layouts.urol.hit')
    @endif

    @include('layouts.urol.subscribe')
    @include('layouts.urol.news_main')

@endsection
