<div class="col-lg-6">
    <div class="stikly product_slider">
        <div class="slider_vacansie__box">
            @forelse ($item->getMedia('product') as $imgUrl)
                <div>
                    <a data-fancybox="gallery" href="{{$imgUrl->getUrl('big')}}">
                        <picture>
                            <source type="image/webp"
                                    srcset="{{$imgUrl->getUrl('thumb-p')}}">
                            <img class="img-fluid" src="{{ $imgUrl->getUrl('thumb') }}"
                                 alt="{{$item->title}}-{{$item->id}}">
                        </picture>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
        @if ($item->getMedia('product')->count()>1)
            <div class="slider_vacansie__nav">
                @foreach ($item->getMedia('product') as $imgUrlThumb)
                    <div>
                        <picture>
                            <source type="image/webp"
                                    srcset="{{$imgUrlThumb->getUrl('thumb-p')}}">
                            <img class="img-fluid" src="{{ $imgUrlThumb->getUrl('thumb') }}"
                                 alt="{{$imgUrlThumb->title}}-{{$imgUrlThumb->id}}">
                        </picture>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
