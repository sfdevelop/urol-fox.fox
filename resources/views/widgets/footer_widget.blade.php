<footer class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row justify-content-between">
            <div class="logo">
                <img src="{{asset('assets/i/Logo2.svg')}}" alt="Logo2">
            </div>

            <div class="link">
                <ul class="px-0">
                    <li>{{__('menu_main')}}</li>
                    <li>{{__('menu_product')}}</li>
                    <li>{{__('menu_service')}}</li>
                </ul>
            </div>

            <div class="link">
                <ul class="px-0">
                    <li>{{__('menu_news')}}</li>
                    <li>{{__('menu_pay')}}</li>
                    <li>{{__('menu_contacts')}}</li>
                </ul>
            </div>
            <div class="phone d-flex justify-content-center justify-content-lg-start">
                <div class="ico">
                    <img src="{{asset('assets/i/call-white.svg')}}" alt="white" class="img-fluid mr-2">
                </div>
                <ul class="px-0">
                    <li>{{$contact->phone1}}</li>
                    <li>{{$contact->phone2}}</li>
                    <li>{{$contact->phone3}}</li>
                </ul>
            </div>

            <div class="clock d-flex justify-content-center justify-content-lg-start">
                <div class="ico">
                    <img src="{{asset('assets/i/clock.svg')}}" alt="clock" class="img-fluid mr-2">
                </div>
                <ul class="px-0">
                    <li>{{$contact->translate(app()->getLocale(), true)->time}}</li>
                    <li>{{$contact->translate(app()->getLocale(), true)->weekend}}</li>
                </ul>
            </div>
            <div class="address">
                <ul class="px-0">
                    <li>
                        <img class="img-fluid mr-2" src="{{asset('assets/i/location-pin.svg')}}" alt="location">
                        {{$contact->address}}
                    </li>
                    <li>
                        <img class="img-fluid mr-2" src="{{asset('assets/i/email.svg')}}" alt="email">
                        {{$contact->email}}
                    </li>
                </ul>
            </div>
            <div class="call-order">
                <a href="" class="btn">Замовити дзвінок</a>
            </div>
        </div>
    </div>
</footer>
