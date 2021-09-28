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
                <h1>{{__('contacts_title')}}</h1>
            </div>

        </div>
    </section>

    <section class="contacts py-4">
        <div class="container">
            <h3 class="mb-4"><span>{{__('our')}}</span> {{__('contacts_title')}}</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex align-items-start">
                        <img class="mt-2" src="{{asset('assets/i/call.svg')}}" alt="call">
                        <ul>
                            <li><a href="">{{$contact->phone1}}</a></li>
                            <li><a href="">{{$contact->phone2}}</a></li>
                            <li><a href="">{{$contact->phone3}}</a></li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-start">
                        <img class="mt-2" src="{{asset('assets/i/clock-black.svg')}}" alt="clock">
                        <ul>
                            <li>{{$contact->translate(app()->getLocale(), true)->time}}</li>
                            <li>{{$contact->translate(app()->getLocale(), true)->weekend}}</li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="d-flex align-items-start">
                        <img class="mt-1" src="{{asset('assets/i/location-pin-black.svg')}}" alt="location-pin-black">
                        <ul>
                            <li>{{$contact->address}}</li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-start">
                        <img class="mt-1" src="{{asset('assets/i/email-black.svg')}}" alt="location-pin-black">
                        <ul>
                            <li><a href="">{{$contact->email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form action="">
                        <p>{{__('contact_slogan')}}</p>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <input type="text" class="form-control" placeholder="{{__('subscribe_name')}}">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <input type="text" class="form-control" placeholder="{{__('subscribe_mail')}}">
                            </div>
                            <div class="col-lg-12 mb-4">
                                <input type="text" class="form-control" placeholder="{{__('subscribe_question')}}">
                            </div>
                            <div class="col-12">
                                <a href="" class="btn">{{__('subscribe_send')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
