<section class="menu_head fixed-top">
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
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">{{trans('menu.menu_product')}}</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                       href=" category.html"> {{$category->translate(app()->getLocale(), true)->title}} </a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"> {{trans('menu.menu_service')}} </a>

                        <ul class="dropdown-menu">
                            @foreach ($services as $service)
                                <li>
                                    <a class="dropdown-item"
                                       href="{{route('service', $service->slug)}} ">
                                        {{$service->translate(app()->getLocale(), true)->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('news') }}"> {{trans('menu.menu_news')}} </a></li>
                    <li class="nav-item"><a class="nav-link" href="pay.html"> {{trans('menu.menu_pay')}}</a></li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('contacts') }}"> {{trans('menu.menu_contacts')}}</a>
                    </li>
                </ul>
                <div class="right-menu d-lg-flex d-none">
                    <div class="d-flex flex-column head-phone">
                        <div>
                            <img src="{{asset('assets/i/call.svg')}}" alt="call">
                            <a href="">
                                +38 067 657 87 17
                            </a>
                        </div>
                        <div class="text-right margin-t-5">
                            <small>
                                <a href="">{{trans('menu.call_order')}}</a>
                            </small>
                        </div>
                    </div>
                    <div class="search d-xl-flex align-items-center ml-3 d-none ">
                        <input class="px-2" type="text" name="search" id="">
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
