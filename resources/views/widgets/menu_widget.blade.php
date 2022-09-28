<section class="menu_head fixed-top d-none d-lg-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg  justify-content-end w-100 fixed-top">
            <div class="d-flex justify-content-between w-100 d-lg-none">
                <div class="">
                    <a href="{{route('main')}}">
                        <img class="log-sm" src="{{asset('assets/i/logo_top.svg')}}" alt="logo">
                    </a>
                </div>
                <div class="d-flex">
                    <div class="lang d-flex align-items-center mr-3">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                            data-target="#main_nav">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line" style="margin-bottom: 0;"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="main_nav">
                <div class="logo d-none d-lg-flex">
                    <a href="{{route('main') }}">
                        <img class="img-fluid" src="{{asset('assets/i/logo_top.svg')}}" alt="logo">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('main') }}"> {{trans('menu.menu_main')}}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=""
                           data-toggle="dropdown">{{trans('menu.menu_product')}}</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                       href="{{route('catalog', $category->slug)}}"> {{$category->translate(app()->getLocale(), true)->title}} </a>
                                    @if($category->childrenCategories->count()>0)
                                        <ul class="submenu dropdown-menu">
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('layouts.urol.child_category', ['child_category' => $childCategory])
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('comments') }}"> {{__('comment.comment')}} </a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('news') }}"> {{trans('menu.menu_news')}} </a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('pages', 'oplata-i-dostavka') }}"> {{trans('menu.menu_pay')}}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('contacts') }}"> {{trans('menu.menu_contacts')}}</a>
                    </li>
                </ul>
                <div class="right-menu d-lg-flex d-none">
                    <div class="d-flex flex-column head-phone">
                        <div>
                            <img src="{{asset('assets/i/call.svg')}}" alt="call">
                            <a href="tel:{{$head_phone->phone1}}">
                                {{$head_phone->phone1}}
                            </a>
                        </div>
                        <div class="text-right margin-t-5">
                            <small>
                                <a href="" data-toggle="modal" data-target="#call">{{trans('menu.call_order')}}</a>
                            </small>
                        </div>
                    </div>
                    <div class="search d-lg-flex align-items-center ml-3 d-none ">
                        <form action="{{route('search')}}" method="GET">
                            <input class="px-2"
                                   type="text"
                                   name="search"
                                   id="search"
                            >
                        </form>
                    </div>
                    <div class="lang d-flex align-items-center ml-3">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>


<div class="overlay pt-5">
    <nav class="overlayMenu d-flex flex-column justify-content-between h90">
        <div>
            <div class="d-block mobile_menu">
                <ul class="ml-4 ul-menu">
                    <li class="mobile_li py-3">
                        <a href="{{route('main')}}">{{trans('menu.menu_main')}}</a>
                    </li>
                    <li class="mobile_li py-3">
                        {{trans('menu.menu_product')}}

                        <ul class="p-0">

                            @foreach ($categories as $category)

                                <li class="mobile_li py-3">
                                    <a href="{{route('catalog', $category->slug)}}">
                                        {{$category->translate(app()->getLocale(), true)->title}}
                                    </a>
                                </li>

                            @endforeach

                        </ul>
                    </li>

                    <li class="mobile_li py-3">
                        <a class=""
                           href="{{route('news') }}"> {{trans('menu.menu_news')}} </a>
                    </li>

                    <li class="mobile_li py-3">
                        <a class=""
                           href="{{route('comments') }}"> {{trans('comment.comment')}} </a>
                    </li>
                    <li class="mobile_li py-3">
                        <a class=""
                           href="{{route('pages', 'oplata-i-dostavka') }}"> {{trans('menu.menu_pay')}}</a>
                    </li>
                    <li class="mobile_li py-3">
                        <a class=""
                           href="{{route('contacts') }}"> {{trans('menu.menu_contacts')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="p-relative fon_top_contacts d-flex justify-content-between align-content-center d-lg-none">
    <div class="logo-menu ">
        <a href="{{route('main')}}">
            <img class="" src="{{asset('assets/i/logo.png')}}" alt="logo">
        </a>
    </div>
    {{--    <div class="dropdown dropdown__menu d-flex flex-column justify-content-center">--}}
    {{--        <button class="dropdown-toggle btn-drpdown p-0 m-0" type="button" id="dropdownMenuButton"--}}
    {{--                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--            {{strtoupper(app()->getLocale())}}--}}
    {{--        </button>--}}
    {{--        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
    {{--            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
    {{--                <a--}}
    {{--                    class="dropdown-item"--}}
    {{--                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"--}}
    {{--                >--}}
    {{--                    {{ $properties['native'] }}--}}
    {{--                </a>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="d-flex align-items-center justify-content-center mr-5 pr-4">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="mx-1" rel="alternate" hreflang="{{ $localeCode }}"
               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        @endforeach
    </div>
    <div class="navBurger d-lg-none" role="navigation" id="navToggle"></div>
</div>

