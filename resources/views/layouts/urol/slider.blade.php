<div class="slider position-relative d-block d-md-block mt-80">
    <div class="slider__box position-relative  d-flex justify-content-center">
        <img class="w-100 img-back" src="assets/i/background.jpg" alt="slider">
        <div class="container h-100 position-absolute d-flex  flex-column  justify-content-center">
            <div class="d-flex">
                <div class="col-6 d-flex flex-column justify-content-center">
                    <h1 class="display-1 ">{{__('slider_h1')}}</h1>
                    <p>
                        {{__('slider_slogan')}}
                    </p>
                    <ul class="p-3 m-0">
                        <li>{{__('slider_01')}}</li>
                        <li>{{__('slider_02')}}</li>
                        <li>{{__('slider_03')}}</li>
                        <li>{{__('slider_04')}}</li>
                    </ul>
                </div>
                <div class="col-6 text-right slider-img ">


                    @forelse ($slider as $imgUrl)
                        <picture>
                            <source type="image/webp"
                                    srcset="{{$imgUrl->getFirstMediaUrl('slider', 'thumb-p')}}">
                            <img class="img-fluid float-lg-right" src="{{ $imgUrl->getFirstMediaUrl('slider', 'thumb-p') }}"
                                 alt="{{$imgUrl->translate(app()->getLocale(), true)->title}}">
                        </picture>
                    @empty

                    @endforelse

                    {{--                        <div class="">--}}
                    {{--                            <img class="img-fluid float-lg-right" src="assets/i/pr-01.png" alt="pr-01.png">--}}
                    {{--                        </div>--}}

                </div>
            </div>
        </div>
    </div>
</div>
