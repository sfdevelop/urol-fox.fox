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

    <section class="items py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <picture>
                        <source type="image/webp"
                                srcset="{{$item->getFirstMediaUrl('pages', 'thumb-p')}}">
                        <img class="img-fluid float-lg-right mb-3"
                             src="{{ $item->getFirstMediaUrl('pages', 'thumb') }}"
                             alt="{{ $item->translate(app()->getLocale(), true)->title}}">
                    </picture>

                    <div class="content">
                        {!! $item->translate(app()->getLocale(), true)->description  !!}
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
