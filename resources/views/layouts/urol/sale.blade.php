<section class="main_sale py-5">
    <div class="container">

        <h2><span>{{__('sale_product')}}</span> {{__('product')}}</h2>
        <p>{{__('sale_slogan')}}</p>

        <div class="row sale_slider">
            @foreach($saleProducts as $sale_item)
                <div class="item pt-4 d-flex flex-column justify-content-between">
                    <div class="position-relative">
                        <div class="stick-sale position-absolute px-3">Акція</div>
                        <a href="{{route('product', $sale_item->slug)}}">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{$sale_item->getFirstMediaUrl('product', 'thumb-p')}}">
                                <img class="img-fluid float-lg-right mb-3"
                                     src="{{ $sale_item->getFirstMediaUrl('product', 'thumb-p') }}"
                                     alt="{{$sale_item->translate(app()->getLocale(), true)->title}}">
                            </picture>
                        </a>

{{--                        @if ($sale_item->price_sale)--}}
{{--                            <div class="sale_from_product">--}}
{{--                                @include('Partials.cownDown')--}}
{{--                            </div>--}}
{{--                        @endif--}}

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
                        <a href="{{route('product', $sale_item->slug)}}" class="btn">Переглянути</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@section('css_blade')
    <link rel="stylesheet" href="{{asset('css/covnDown/covnDown.css')}}">
@endsection

@section('new-js')
    <script src="{{asset('js/cownDown/covnDown.js')}}"></script>

    <script !src="">
        $(function () {
            var note = $('#note'),
                ts = {{$sale_item->millisecond}}
                    newYear = false;

            $('#countdown').countdown({
                timestamp: ts,
                callback: function (days, hours, minutes, seconds) {

                    var message = "";

                    message += days + " day" + (days == 1 ? '' : 's') + ", ";
                    message += hours + " hour" + (hours == 1 ? '' : 's') + ", ";
                    message += minutes + " minute" + (minutes == 1 ? '' : 's') + " and ";
                    message += seconds + " second" + (seconds == 1 ? '' : 's') + " <br />";

                    if (newYear) {
                        message += "left until the new year!";
                    } else {
                        message += "left to 10 days from now!";
                    }

                    note.html(message);
                }
            });

        });
    </script>
@endsection
