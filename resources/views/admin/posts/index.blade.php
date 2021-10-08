@extends('layouts.admin_layouts')

@section('title', 'Новости' )

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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Новости</span></h5>
                        </div>
                        <div class="col s2 m6 l6 right">
                            <a href="{{route('admin.news.create')}}"
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
                                                <th>Фото</th>
                                                <th style="width: 50%">Название</th>
                                                <th>Статус</th>
                                                <th>Сортировка</th>
                                                <th class="right">Управление</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ( $paginator as $item)
                                                <tr>
                                                    <td>
                                                        <img style="border-radius: 8px; border: 1px solid #ccc; max-width: 90px"
                                                             class="responsive-img"
                                                             src="{{$item->getFirstMediaUrl('news', 'thumb-p')}}"/>
                                                    </td>
                                                    <td>{{$item->translate('ru', true)->title}}</td>
                                                    <td>
                                                        @if ($item->public==1)
                                                            <span class="chip green lighten-5">
                                                                    <span class="green-text">Опубликовано</span>
                                                              </span>
                                                        @else
                                                            <span class="chip red lighten-5">
                                                                <span class="red-text">Не опубликовано</span>
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>{{$item->sort}}</td>
                                                    <td class="right">
                                                        <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped"
                                                           href="{{route('admin.news.edit', $item->id)}}"
                                                           data-position="left"
                                                           data-tooltip="Редактирование"
                                                        >
                                                            <i class="material-icons dp48">create</i>
                                                        </a>
                                                        <form method="POST" action="{{route('admin.news.destroy', $item->id)}} "
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

                                            @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="paginate">
                                        @if ($paginator->total() > $paginator->count())
                                            {{ $paginator->links() }}
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
