@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
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
                            <a class="ml-5 btn" href="">{{__('order_product')}}</a>
                        </div>
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
