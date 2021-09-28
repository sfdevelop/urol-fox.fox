@extends('urol')

@section('content')

    @include('layouts.urol.slider')
    @include('layouts.urol.new')
    @include('layouts.urol.service_main')

    @if($saleProducts->count()>0)
        @include('layouts.urol.sale')
    @endif

    @include('layouts.urol.subscribe')
    @include('layouts.urol.news_main')

@endsection
