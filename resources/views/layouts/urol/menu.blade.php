<section class="menu_head fixed-top d-none d-lg-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg  justify-content-end w-100 fixed-top">
            <div class="d-flex justify-content-between w-100 d-lg-none">
                <div class="">
                    <a href="">
                        <img class="log-sm" src="{{asset('assets/i/logo_top.svg')}}" alt="logo">
                    </a>
                </div>
                <div class="d-flex">
                    <div class="lang d-flex align-items-center mr-3">
                        <a href="" class="ml-2 active">RU</a>
                        <span class="mx-2">|</span>
                        <a href="" class="">UK</a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                            data-target="main_nav">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line" style="margin-bottom: 0;"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="main_nav">
                <div class="logo d-none d-lg-flex">
                    <a href="">
                        <img class="img-fluid" src="assets/i/logo_top.svg" alt="logo">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html"> {{__('menu_main')}}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">{{__('menu_product')}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=" category.html"> Second level 1 </a></li>
                            <li><a class="dropdown-item" href=" category.html"> Second level 2 &raquo </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=" category.html"> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=" category.html"> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=" category.html"> Third level 3 &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href=" category.html"> Fourth level 1</a></li>
                                            <li><a class="dropdown-item" href=" category.html"> Fourth level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=" category.html"> Second level 4</a></li>
                                    <li><a class="dropdown-item" href=" category.html"> Second level 5</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href=" category.html"> Dropdown item 3 </a></li>
                            <li><a class="dropdown-item" href=" category.html"> Dropdown item 4 </a>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="services.html"> {{__('menu_service')}} </a></li>
                    <li class="nav-item"><a class="nav-link" href="news.html"> {{__('menu_news')}} </a></li>
                    <li class="nav-item"><a class="nav-link" href="pay.html"> {{__('menu_pay')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.html"> {{__('menu_contacts')}}</a></li>
                </ul>
                <div class="right-menu d-lg-flex d-none">
                    <div class="d-flex flex-column head-phone">
                        <div>
                            <img src="assets/i/call.svg" alt="call">
                            <a href="">
                                +38 067 657 87 17
                            </a>
                        </div>
                        <div class="text-right margin-t-5">
                            <small>
                                <a href="">{{__('call_order')}}</a>
                            </small>
                        </div>
                    </div>
                    <div class="search d-xl-flex align-items-center ml-3 d-none ">
                        <input class="px-2" type="text" name="search" id="">
                    </div>
                    <div class="lang d-flex align-items-center ml-3">
                        @foreach(config('translatable.locales') as $locale)
                            <a href="{{ route(Route::currentRouteName(), $locale) }} " class="">{{strtoupper($locale)}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>

<style>
    .lang a{
        border-right: 2px solid #777;
        padding-left: 7px;
        padding-right: 7px;
    }
    .lang a:last-child{
        border: none;
        padding-right: 0;
    }
</style>


<div class="p-relative fon_top_contacts d-lg-none">
    <div class="logo-menu ">
        <img class="" src="{{asset('assets/i/logo.png')}}" alt="logo">
    </div>
    <div class="dropdown dropdown__menu">
        <button class="dropdown-toggle btn-drpdown p-0 m-0" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{strtoupper(app()->getLocale())}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a
                    class="dropdown-item"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    {{ $properties['native'] }}
                </a>
            @endforeach
        </div>
    </div>
    <a class="user_mobile" href="{{route('user.login')}}">
        <img class="user mx-3" src="{{asset('assets/i/user2.svg')}}" alt="svg">
    </a>
    <div class="navBurger d-lg-none" role="navigation" id="navToggle"></div>
</div>
