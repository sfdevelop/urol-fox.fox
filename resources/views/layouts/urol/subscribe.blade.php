<section class="subscribe ">

    <!--    <img class="img-fluid" src="assets/i/subscribe_top.png" alt="subscribe_top">-->

    <div class="subscribe_box pb-5 mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>{{__('subscribe_h2')}}</h2>
                    <div class="col-lg-5 px-0">
                        <p>
                            {{__('subscribe_slogan')}}
                        </p>
                        <ul class="pl-4">
                            @foreach($contactsPhone as $phone)
                                @if($phone->phone1)
                                    <li>{{$phone->phone1}}</li>
                                @endif
                                @if($phone->phone2)
                                    <li>{{$phone->phone2}}</li>
                                @endif
                                @if($phone->phone3)
                                    <li>{{$phone->phone3}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form action="">
                        <div class="row d-flex align-items-center mt-5">
                            <div class="col-lg-6">
                                <input class="form-control" type="text" placeholder="{{__('subscribe_name')}}">
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <input class="form-control" type="text" placeholder="{{__('subscribe_mail')}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input class="form-control" type="text" placeholder="{{__('subscribe_question')}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="submit" value="{{__('subscribe_send')}}" class="btn">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
