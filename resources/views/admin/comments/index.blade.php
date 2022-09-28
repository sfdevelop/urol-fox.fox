@extends('layouts.admin_layouts')

@section('title', 'Комментарии' )

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admini_back/assets/css/pages/page-users.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admini_back/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('admini_back/assets/js/scripts/page-users.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });
    </script>
@endsection

@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Комментарии</span></h5>
                        </div>
                        <div class="col s2 m6 l6 right">
                            <a href="{{route('admin.comments.create')}}"
                               class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right pulse tooltipped"
                               data-position="left"
                               data-tooltip="Создать запись"
                            >
                                <i class="material-icons ">add</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <section class="users-list-wrapper section">
                        <div class="users-list-table">
                            <div class="card">
                                <div class="card-content">

                                    @include('layouts.message.message')

                                    <div class="responsive-table">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th style="width: 30%">Имя</th>
                                                <th>e-mail</th>
                                                <th>Статус</th>
                                                <th>Дата</th>
                                                <th class="right">Управление</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ( $items as $item)
                                                <tr>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>

                                                            <span class="chip {{$item->is_public==0 ? 'red' : 'green'}}  lighten-5">
                                                                    <span class=" {{$item->is_public==0 ? 'red-text' : 'green-text'}} "> {{$item->is_public==0 ? 'Не опубликован' : 'Опубликован'}} </span>
                                                              </span>

                                                    </td>
                                                    <td>{{\Carbon\Carbon::create($item->date)->format('d-m-Y H:i')}}</td>
                                                    <td class="right">
                                                        <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped"
                                                           href="{{route('admin.comments.edit', $item->id)}}"
                                                           data-position="left"
                                                           data-tooltip="редактировать"
                                                        >
                                                            <i class="material-icons dp48">create</i>
                                                        </a>
                                                        <form method="POST" action="{{route('admin.comments.destroy', $item->id)}} "
                                                              class="col"
                                                        >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn-floating mb-1 waves-effect waves-light tooltipped"
                                                                    type="submit"
                                                                    href="#"
                                                                    data-position="left"
                                                                    data-tooltip="Удалить"
                                                            >
                                                                <i class="material-icons">clear</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <div class="card-alert card cyan lighten-5">
                                                        <div class="card-content cyan-text">
                                                            <p>INFO : В данный момент нету ни одной записи!</p>
                                                        </div>
                                                    </div>
                                                </tr>
                                            @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="paginate">
                                        @if ($items->total() > $items->count())
                                            {{ $items->links() }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
@endsection
