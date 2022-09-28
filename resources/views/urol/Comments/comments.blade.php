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

            @forelse ($comments as $item)
                <div class="comment_box my-3 p-3">
                    <div class="small mb-2 "><span class="font-weight-bold">{{$item->name}}</span> <span class="text-grey">{{\Carbon\Carbon::create($item->date)->format('d-m-Y H:i')}}</span> </div>
                    {{$item->description}}
                </div>
            @empty
                <div class="alert alert-primary" role="alert">
                    {{__('comment.not_item')}}
                </div>
            @endforelse

                @if ($comments->total() > $comments->count())

                    <div class="container d-flex justify-content-center my-4">
                        {{ $comments->links() }}
                    </div>

                @endif

            @livewire('comments')
        </div>
    </section>
@endsection
