<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.urol.meta')
</head>

<body>

{{--@include('layouts.urol.menu')--}}

@widget('MenuWidget')

@yield('content')


@widget('FooterWidget')
@section('new-modal')
@show
<!--JS-->
<script src="{{asset('assets/js/main.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/js/all.js')}}"></script>
<script src="{{asset('js/app.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#call-form').on('submit', function(event){
        event.preventDefault();
        $('#name_call-error').text('');
        $('#phone-error').text('');

        name = $('#name_call').val();
        phone = $('#phone').val();

        $.ajax({
            url: "{{ route('call') }}",
            type: "POST",
            data:{
                name:name,
                phone:phone,
            },
            success:function(response){
                console.log(response);
                if (response) {
                    $('#success-message').text(response.success);
                    $('#thanks_title').text(response.title_thanks);
                    $('#call').modal('hide');
                    $('#thanks').modal('show');
                    $("#call-form")[0].reset();
                }
            },
            error: function(response) {
                $('#name_call-error').text(response.responseJSON.errors.name);
                $('#phone-error').text(response.responseJSON.errors.phone);
            }
        });
    });

</script>
@section('new-js')
@show
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194485737-2">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-194485737-2');
</script>
</body>

</html>
