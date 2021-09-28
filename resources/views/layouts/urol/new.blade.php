<section class="main_new py-5">
    <div class="container">

        <h2><span>{{__('new')}}</span> {{__('product')}}</h2>
        <p>{{__('news_slogan')}}</p>

        <div class="row new_slider">

            @foreach($newProductMonth as $item)
                <div class="item pt-4 d-flex flex-column justify-content-between">
                    <div class="position-relative">
                        <div class="stick-new position-absolute px-3">{{__('stick_new')}}</div>
                        <a href="">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{$item->getFirstMediaUrl('product', 'thumb-p')}}">
                                <img class="img-fluid float-lg-right mb-3" src="{{ $item->getFirstMediaUrl('product', 'thumb') }}"
                                     alt="{{$item->translate(app()->getLocale(), true)->title}}">
                            </picture>
                        </a>
                        <h4 class="item_title mt-3">{{$item->translate(app()->getLocale(), true)->title}}</h4>
                    </div>
                    <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                        <div class="price">{{$item->price}} грн.</div>
                        <a href="" class="btn">{{__('more')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
