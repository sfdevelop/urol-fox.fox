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
            <a class="navigation-header-text">Страницы</a>
            <i class="navigation-header-icon material-icons">Страницы</i>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.slider.index')}}">
                <i class="material-icons dp48">image</i>
                <span class="menu-title" data-i18n="Form Layouts">Слайд-шоу</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.pages.index')}}">
                <i class="material-icons dp48">pages</i>
                <span class="menu-title" data-i18n="Form Layouts">Страницы</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.service.index')}}">
                <i class="material-icons dp48">perm_data_setting</i>
                <span class="menu-title" data-i18n="Form Layouts">Услуги</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.news.index')}}">
                <i class="material-icons">receipt</i>
                <span class="menu-title" data-i18n="Form Layouts">Новости</span>
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.contacts.edit', 1)}}">
                <i class="material-icons dp48">contacts</i>
                <span class="menu-title" data-i18n="Form Layouts">Контактная информация</span>
            </a>
        </li>

        <li class="navigation-header">
            <a class="navigation-header-text">Каталог</a>
            <i class="navigation-header-icon material-icons">Каталог</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.category.index')}}">
                <i class="material-icons dp48">collections</i>
                <span class="menu-title" data-i18n="Form Layouts">Категории</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.character.index')}}">
                <i class="material-icons dp48">settings_applications</i>
                <span class="menu-title" data-i18n="Form Layouts">Характеристики</span>
            </a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.product.index')}}">
                <i class="material-icons dp48">beach_access</i>
                <span class="menu-title" data-i18n="Form Layouts">Продукция</span>
            </a>
        </li>

        <li class="navigation-header">
            <a class="navigation-header-text">Уведомления</a>
            <i class="navigation-header-icon material-icons">Уведомления</i>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.question.index')}}">
                <i class="material-icons dp48">question_answer</i>
                <span class="menu-title" data-i18n="Form Layouts">Вопросы</span>
                @widget('CountQuestions')
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.feedBack.index')}}">
                <i class="material-icons dp48">record_voice_over</i>
                <span class="menu-title" data-i18n="Form Layouts">Обратная связь</span>
                @widget('CountFeedBackWidget')
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.callBack.index')}}">
                <i class="material-icons dp48">local_phone</i>
                <span class="menu-title" data-i18n="Form Layouts">Заказ звонка</span>
                @widget('CountCall')
            </a>
        </li>

        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{route('admin.order.index')}}">
                <i class="material-icons dp48">shopping_cart</i>
                <span class="menu-title" data-i18n="Form Layouts">Заказы</span>
                @widget('CountOrder')
            </a>
        </li>

        <li class="navigation-header">
            <a class="navigation-header-text">Настройки</a>
            <i class="navigation-header-icon material-icons">Настройки</i>
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
