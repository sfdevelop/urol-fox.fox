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

                    <form id="price-form">
                        <div class="row d-flex align-items-center mt-5">
                            <div class="col-lg-6">
                                <input class="form-control" id="name" name="name" type="text" placeholder="{{__('subscribe_name')}}">
                                <span class="text-danger small" id="name-error"></span>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <input class="form-control" id="mail" name="mail" type="email" placeholder="{{__('subscribe_mail')}}">
                                <span class="text-danger small" id="mail-error"></span>
                            </div>
                            <div class="col-12 mt-3">
                                <input class="form-control" id="question" name="question" type="text" placeholder="{{__('subscribe_question')}}">
                                <span class="text-danger small" id="question-error"></span>
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

@section('new-js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#price-form').on('submit', function(event){
            event.preventDefault();
            $('#name-error').text('');
            $('#mail-error').text('');
            $('#question-error').text('');

            name = $('#name').val();
            mail = $('#mail').val();
            question = $('#question').val();

            $.ajax({
                url: "{{ route('question') }}",
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
                        $("#price-form")[0].reset();

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
