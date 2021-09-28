<section class="main_news py-5">
    <div class="container">
        <h2>{{__('news_name')}}</h2>
        <p>{{__('new_slogan')}}</p>

        <div class="row news_slider">
            @foreach($newsLatest as $news)
                <div class="item pt-4 d-flex flex-column justify-content-between">
                    <div class="position-relative">
                        <a href="{{route('item', $news->slug)}}">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{$news->getFirstMediaUrl('news', 'thumb-min-p')}}">
                                <img class="img-fluid float-lg-right mb-3" src="{{ $news->getFirstMediaUrl('news', 'thumb-min') }}"
                                     alt="{{$news->translate(app()->getLocale(), true)->title}}">
                            </picture>
                        </a>
                        <h4 class="news_title mt-3">
                            {{$news->translate(app()->getLocale(), true)->title}}
                        </h4>
                        {!! short_string_description($news->translate(app()->getLocale(), true)->description) !!}
                    </div>
                    <div class="news_footer mt-3 d-flex justify-content-between align-items-center">
                        <a href="{{route('item', $news->slug)}}">{{__('more_news')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
