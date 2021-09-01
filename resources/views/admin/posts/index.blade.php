@extends('layouts.admin_layouts')

@section('title', 'Новости' )

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/page-users.min.css')}}">
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
                            <a href="{{route('admin.news.create')}}" class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right">
                                <i class="material-icons">add</i>
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
                                            <tr>
                                                <td>Alvin</td>
                                                <td>Eclair</td>
                                                <td>$0.87</td>
                                                <td class="right">
                                                    <a href="">
                                                        <i class="material-icons dp48">create</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
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
