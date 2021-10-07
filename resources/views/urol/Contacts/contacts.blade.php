@extends('urol')

@section('content')

    <section class="breadcrumb-top mt-180">
        <div class="container">
            <nav aria-label="breadcrumb ">

                {{ Breadcrumbs::render('contacts') }}

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
                    <form id="contact-form">
                        <p>{{__('contact_slogan')}}</p>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <input class="form-control" id="name" name="name" type="text" placeholder="{{__('subscribe_name')}}">
                                <span class="text-danger small" id="name-error"></span>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <input class="form-control" id="mail" name="mail" type="email" placeholder="{{__('subscribe_mail')}}">
                                <span class="text-danger small" id="mail-error"></span>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <input class="form-control" id="question" name="question" type="text" placeholder="{{__('subscribe_question')}}">
                                <span class="text-danger small" id="question-error"></span>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="{{__('subscribe_send')}}" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-lg-flex justify-content-between d-none">
            <img class="img-fluid" src="{{asset('assets/i/west.png')}}" alt="west">
            <img class="img-fluid" src="{{asset('assets/i/tractor.png')}}" alt="tractor">
        </div>
    </section>

@endsection

@section('new-js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contact-form').on('submit', function(event){
            event.preventDefault();
            $('#name-error').text('');
            $('#mail-error').text('');
            $('#question-error').text('');

            name = $('#name').val();
            mail = $('#mail').val();
            question = $('#question').val();

            $.ajax({
                url: "{{ route('questionContact') }}",
                type: "POST",
                data:{
                    name:name,
                    mail:mail,
                    question:question,
                },
                success:function(response){
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $('#thanks_title').text(response.title_thanks);
                        $('#thanks').modal('show')
                        $("#contact-form")[0].reset();

                    }
                },
                error: function(response) {
                    $('#name-error').text(response.responseJSON.errors.name);
                    $('#mail-error').text(response.responseJSON.errors.mail);
                    $('#question-error').text(response.responseJSON.errors.question);
                }
            });
        });
    </script>
@endsection
