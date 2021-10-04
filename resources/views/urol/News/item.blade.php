@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{ Breadcrumbs::render('item', $item) }}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{$item->translate(app()->getLocale(), true)->title}}</h1>
            </div>

        </div>
    </section>
    <section class="items py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <picture>
                        <source type="image/webp"
                                srcset="{{$item->getFirstMediaUrl('news', 'thumb-p')}}">
                        <img class="img-fluid float-lg-right mb-3"
                             src="{{ $item->getFirstMediaUrl('news', 'thumb') }}"
                             alt="{{ $item->translate(app()->getLocale(), true)->title}}">
                    </picture>

                    <div class="content">
                        {!! $item->translate(app()->getLocale(), true)->description  !!}
                    </div>

                </div>
                <div class="col-lg-4 d-none d-lg-block">

                    <h3><span>{{__('last')}}</span> {{__('news_name')}} </h3>

                    @foreach($latest as $lastNews)
                        <div class="items__box mb-4">
                            <a href="{{route('item', $lastNews->slug)  }}">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{$lastNews->getFirstMediaUrl('news', 'thumb-p')}}">
                                <img class="img-fluid float-lg-right mb-3"
                                     src="{{ $lastNews->getFirstMediaUrl('news', 'thumb') }}"
                                     alt="{{ $lastNews->translate(app()->getLocale(), true)->title}}">
                            </picture>
                            </a>
                            <h5 class="mt-3">{{$lastNews->translate(app()->getLocale(), true)->title}}</h5>
                            {!! short_string_description($lastNews->translate(app()->getLocale(), true)->description) !!}

                            <a href="{{route('item', $lastNews->slug)  }}" class="d-block">{{__('more_news')}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
