<section class="main_sale py-5">
    <div class="container">

        <h2><span>Акційні</span> Товари</h2>
        <p>В нас найприємніші ціни та найкращі пропозиції</p>

        <div class="row sale_slider">
            @foreach($saleProducts as $sale_item)
                <div class="item pt-4 d-flex flex-column justify-content-between">
                    <div class="position-relative">
                        <div class="stick-sale position-absolute px-3">Акція</div>
                        <a href="">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{$sale_item->getFirstMediaUrl('product', 'thumb-p')}}">
                                <img class="img-fluid float-lg-right mb-3" src="{{ $sale_item->getFirstMediaUrl('product', 'thumb-p') }}"
                                     alt="{{$sale_item->translate(app()->getLocale(), true)->title}}">
                            </picture>
                        </a>
                        <h4 class="item_title mt-3">{{$sale_item->translate(app()->getLocale(), true)->title}}</h4>
                    </div>
                    <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                        <div class="price d-flex flex-column justify-content-center">
                            <div class="old ">
                                {{$sale_item->price}}
                                 грн
                            </div>
                            {{$sale_item->price_sale}} грн.
                        </div>
                        <a href="" class="btn">Переглянути</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
