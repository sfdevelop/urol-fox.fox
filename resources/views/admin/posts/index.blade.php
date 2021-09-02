@extends('layouts.admin_layouts')

@section('title', 'Новости' )

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/page-users.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('administrator/assets/js/scripts/page-users.min.js')}}"></script>
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
                               class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right pulse">
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
                                    <div class="responsive-table">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th style="width: 50%">Название</th>
                                                <th>Статус</th>
                                                <th>Сортировка</th>
                                                <th class="right">Управление</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ( $paginator as $item)
                                                <tr>
                                                    <td>{{$item->translate('en', true)->title}}</td>
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
                                                        <a href="{{route('admin.news.edit', $item->id)}}">
                                                            <i class="material-icons dp48">create</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty

                                            @endforelse

                                            </tbody>
                                        </table>
                                    </div>
{{--                                    <div class="paginate">--}}
{{--                                        @if ($paginator->total() > $paginator->count())--}}
{{--                                            {{ $paginator->links() }}--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
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
