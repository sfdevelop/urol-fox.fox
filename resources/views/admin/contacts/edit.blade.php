@extends('layouts.admin_layouts')

@if ($item->exists)
    @section('title', 'Контакты' )
@else
    @section('title', 'Создать запись' )
@endif

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admini_back/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('admini_back/assets/js/scripts/form-elements.min.js')}}"></script>
    <script src="{{asset('admini_back/assets/js/scripts/ui-alerts.min.js')}}"></script>
    <script src="{{ asset('vendor/japonline/laravel-ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <div class="col s12">
                    <div class="container">
                        <div class="row">
                            <div class="col s10 m6 l6">
                                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Контакты</span></h5>
                            </div>
                            <div class="col s2 m6 l6 right">
{{--                                <a href="{{route('admin.contacts.create')}}"--}}
{{--                                   class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right">--}}
{{--                                    <i class="material-icons">add</i>--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @if ($item->exists)
                    <form method="POST" enctype="multipart/form-data"
                          action="{{route('admin.contacts.update', $item->id)}} ">
                        @method('PATCH')

                        @else
{{--                            <form method="POST" enctype="multipart/form-data"--}}
{{--                                  action="  {{ route('admin.contacts.store') }} ">--}}
                                @endif

                                @csrf
                                <div class="col s12">
                                    <div class="container">
                                        <div class="section">

                                            @include('layouts.message.message')

                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <div id="basic-tabs" class="card card card-default scrollspy">
                                                        <div class="card-content">
                                                            <div class="card-title">
                                                                <div class="row">
                                                                    <div class="col s12 m6 l10">
                                                                        @if ($item->exists)
                                                                            <h4 class="card-title">Редактируем
                                                                                запись</h4>
                                                                        @else
                                                                            <h4 class="card-title">Новая запись</h4>
                                                                        @endif
                                                                        <p>

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @include('admin.contacts.tabs')

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-overlay"></div>
                                </div>
                            </form>
            </div>
        </div>
    </div>
@endsection

