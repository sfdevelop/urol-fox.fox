@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{ Breadcrumbs::render('news') }}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{__('news_name')}}</h1>
            </div>

        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row">
                @forelse($paginator as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                        <div class="item pt-4 d-flex flex-column justify-content-between">
                            <div class="position-relative">
                                <a href="{{ route('item', $item->slug) }}">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{$item->getFirstMediaUrl('news', 'thumb-min-p')}}">
                                        <img class="img-fluid float-lg-right mb-3"
                                             src="{{ $item->getFirstMediaUrl('news', 'thumb-min') }}"
                                             alt="{{ $item->translate(app()->getLocale(), true)->title}}">
                                    </picture>
                                </a>
                                <h4 class="news_title mt-3">
                                    {{$item->translate(app()->getLocale(), true)->title}}
                                </h4>
                                {!! short_string_description($item->translate(app()->getLocale(), true)->description) !!}
                            </div>
                            <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                                <a href="{{route('item', $item->slug)}}">
                                    {{__('more_news')}}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>

        @if ($paginator->total() > $paginator->count())

            <div class="container d-flex justify-content-center my-4">
                {{ $paginator->links() }}
            </div>

        @endif
    </section>

@endsection
