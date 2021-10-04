@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{ Breadcrumbs::render('pages', $item) }}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{$item->translate(app()->getLocale(), true)->title}}</h1>
            </div>
        </div>
    </section>
    <section class="services py-4">
        <div class="container">
            <div class="img-content mb-4">
                <picture>
                    <source type="image/webp"
                            srcset="{{$item->getFirstMediaUrl('service', 'thumb-p')}}">
                    <img class="img-fluid float-lg-right mb-3"
                         src="{{ $item->getFirstMediaUrl('service', 'thumb') }}"
                         alt="{{ $item->translate(app()->getLocale(), true)->title}}">
                </picture>
            </div>
            <div class="content">
            {!! $item->translate(app()->getLocale(), true)->description !!}
            </div>
        </div>
    </section>
@endsection
