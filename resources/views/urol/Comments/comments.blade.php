@extends('urol')

@section('content')
    <section class="breadcrumb-top mt-180">
        <div class="container">

            {{--            {{ Breadcrumbs::render('pages', $item) }}--}}

            <div class="title pt-3 pb-5 text-center">
                <h1>{{__('comment.comment')}}</h1>
            </div>
        </div>
    </section>
    <section class="services py-4">
        <div class="container">
            @livewire('comments')
        </div>
    </section>
@endsection
