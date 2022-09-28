@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{ Breadcrumbs::render('product', $item) }}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{$item->translate(app()->getLocale(), true)->title}}</h1>
            </div>
        </div>
    </section>
    <section class="product py-4">
        <div class="container">
            <div class="row">
                @include('urol.Product.slider')
                <div class="col-lg-6">
                    <div class="d-flex justify-content-between flex-column flex-md-row">
                        <div class="d-flex flex-column">
                            <small>
                                Арт. {{$item->articyl}}
                            </small>
                            <div class="brand">
                                {{$item->category->translate(app()->getLocale())->title}}
                            </div>
                        </div>
                        <div class="price d-flex align-items-end">
                            <div class="d-flex flex-column align-items-end">
                                <div class="old ">
                                    <small>
                                        <s>
                                            @if($item->price_sale)
                                                {{$item->price}} грн.
                                            @endif
                                        </s>
                                    </small>
                                </div>
                                @if($item->price_sale)
                                    {{$item->price_sale}} грн.
                                @else
                                    {{$item->price}} грн.
                                @endif
                            </div>
                            <a class="ml-5 btn"
                               href=""
                               role="button"
                               data-toggle="modal"
                               data-target="#order"
                               data-product="{{$item->translate(app()->getLocale(), true)->title}}"
                               data-vendor="{{$item->articyl}}"

                               @if($item->price_sale)
                                   data-price="{{$item->price_sale}}"
                               @else
                                   data-price="{{$item->price}}"
                                @endif

                            >
                                {{__('order_product')}}
                            </a>
                        </div>

                    </div>
                    <div class="small {{$item->in_stock ? 'text-success ' : 'text-danger'}} ">
                        {{$item->stock}}
                    </div>
                    <div class="description my-4">
                        {!! $item->translate(app()->getLocale(), true)->description !!}
                    </div>
                    <div class="specification">
                        <h3 class="text-blue">{{__('characteristic_product')}}</h3>
                        <ul class="oglavl">

                            @forelse($character as $product_character)
                                <li>
                                    <span
                                        class="text">{{$product_character->characteristic->translate(app()->getLocale(), true)->title}}
                                    </span>
                                    <span
                                        class="page">{{$product_character->translate(app()->getLocale(), true)->title_character}}
                                    </span>
                                </li>
                            @empty
                                <div class="alert alert-primary" role="alert">
                                    {{__('not_specification')}}
                                </div>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('new-modal')
    @include('layouts.modal.order')
@endsection

@section('new-js')
    <script>

        $('#order').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            let product = button.data('product');
            let vendor = button.data('vendor');
            let price = button.data('price');

            var modal = $(this);

            modal.find('#product').text(product);
            modal.find('#vendor').text(vendor);
            modal.find('#price').text(price);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#order-form').on('submit', function (event) {
            event.preventDefault();
            $('#name_order-error').text('');
            $('#phone_order-error').text('');

            name = $('#name_order').val();
            phone = $('#phone_order').val();
            product = $('#product').text();
            vendor = $('#vendor').text();
            price = $('#price').text();

            $.ajax({
                url: "{{ route('addOrder') }}",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    product: product,
                    vendor: vendor,
                    price: price,
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $('#thanks_title').text(response.title_thanks);
                        $('#order').modal('hide');
                        $('#thanks').modal('show');
                        $("#order-form")[0].reset();
                    }
                },
                error: function (response) {
                    $('#name_order-error').text(response.responseJSON.errors.name);
                    $('#phone_order-error').text(response.responseJSON.errors.phone);
                }
            });
        });

    </script>
@endsection
