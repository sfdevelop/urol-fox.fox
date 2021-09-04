<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="#">
                <img
                    class="hide-on-med-and-down"
                    src="{{asset('administrator/assets/images/logo/materialize-logo-color.png')}}"
                    alt=" logo"
                />
                <img
                    class="show-on-medium-and-down hide-on-med-and-up"
                    src="{{asset('administrator/assets/images/logo/materialize-logo.png')}}" alt="logo"
                />
                <span
                    class="logo-text hide-on-med-and-down">
                    {{env('APP_NAME')}}
                </span>
            </a>
        </h1>
    </div>

    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">

        <li class="navigation-header">
            <a class="navigation-header-text">Новости</a>
            <i class="navigation-header-icon material-icons">Новости</i>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.news.index')}}">
                <i class="material-icons">receipt</i>
                <span class="menu-title" data-i18n="Form Layouts">Новости</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.slider.index')}}">
                <i class="material-icons dp48">image</i>
                <span class="menu-title" data-i18n="Form Layouts">Слайд-шоу</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.service.index')}}">
                <i class="material-icons dp48">perm_data_setting</i>
                <span class="menu-title" data-i18n="Form Layouts">Услуги</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.option.edit', 2)}}">
                <i class="material-icons dp48">settings</i>
                <span class="menu-title" data-i18n="Form Layouts">Настройки</span>
            </a>
        </li>

    </ul>

    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
       href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
