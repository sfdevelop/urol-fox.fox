@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{ Breadcrumbs::render('category', $category) }}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{$category->translate(app()->getLocale(), true)->title}}</h1>
            </div>

        </div>
    </section>
    <section class="items py-4">
        <div class="container">
            <div class="row">
                <div class="div">
                    {!! $category->translate(app()->getLocale(), true)->description  !!}
                </div>
                @if($subcategory->count()>0)
                    <div class=" col-12 ">
                        <h3>{{__('brands')}}</h3>
                    </div>
                @endif

                @foreach($subcategory as $item)
                    <div class="col-lg-2 col-6">
                        <div class="item pt-4  d-flex flex-column justify-content-between">
                            <div class="position-relative">
                                <a href="{{route('catalog', $item->slug)}}">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{$item->getFirstMediaUrl('category', 'thumb-p')}}">
                                        <img class="img-fluid float-lg-right mb-3"
                                             src="{{ $item->getFirstMediaUrl('category', 'thumb') }}"
                                             alt="{{ $item->translate(app()->getLocale(), true)->title}}">
                                    </picture>
                                </a>
                                <h4 class="item_title mt-3 text-center font-size-small">{{$item->translate(app()->getLocale(), true)->title}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @if($subcategory->count()>0)
            <div class=" py-3 d-flex align-items-center mt-4">
                <div class="container">
                    <div class="col-12   ">
                        <h3 class="">{{__("products")}}</h3>
                    </div>
                </div>
            </div>>

        @endif

        <div class="container">
            <div class="row">
                @forelse($categoryProduct as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="item pt-4  d-flex flex-column justify-content-between">
                            <div class="position-relative">
                                @if($product->price_sale)
                                    <div class="stick-sale position-absolute px-3">Акція</div>
                                @endif
                                <a href="{{route('product', $product->slug)}}">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{$product->getFirstMediaUrl('product', 'thumb-p')}}">
                                        <img class="img-fluid float-lg-right mb-3"
                                             src="{{ $product->getFirstMediaUrl('product', 'thumb') }}"
                                             alt="{{ $product->translate(app()->getLocale(), true)->title}}">
                                    </picture>
                                </a>
                                <h4 class="item_title mt-3">{{$product->translate(app()->getLocale(), true)->title}}</h4>
                            </div>
                            <div class="item_footer mt-3 d-flex justify-content-between align-items-center">
                                <div class="price d-flex flex-column justify-content-center">
                                    <div class="old ">
                                        @if($product->price_sale)
                                            {{$product->price}} грн.
                                        @endif
                                    </div>

                                    @if($product->price_sale)
                                        {{$product->price_sale}} грн.
                                    @else
                                        {{$product->price}} грн.
                                    @endif
                                </div>
                                <a href="{{route('product', $product->slug)}}" class="btn">{{__('show_more')}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            {{__('not_products')}}
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="container d-flex justify-content-center my-4">
            {{ $categoryProduct->links() }}
        </div>

    </section>
@endsection
