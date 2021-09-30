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
