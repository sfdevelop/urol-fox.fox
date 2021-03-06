@extends('layouts.admin_layouts')

@if ($item->exists)
    @section('title', 'Редактируем Товар' )
@else
    @section('title', 'Создать запись' )
@endif

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('admini_back/assets/css/themes/sfdevelop.scss')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('admini_back/assets/css/pages/app-invoice.min.css')}}">
    @toastr_css
@endsection

@section('new-js')
    <script src="{{asset('admini_back/assets/js/scripts/form-elements.min.js')}}"></script>
    <script src="{{asset('admini_back/assets/js/scripts/ui-alerts.min.js')}}"></script>
    <script src="{{ asset('vendor/japonline/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('admini_back/assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admini_back/assets/js/ajax/dataTablesCustom.js')}}"></script>
    <script src="{{asset('admini_back/assets/js/scripts/advance-ui-modals.min.js')}}"></script>

    <script src="{{asset('admini_back/assets/js/ajax/repeater.js')}}"></script>

    @toastr_js
    @toastr_render

    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            /* Create Repeater */
            $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });


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
                                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Товар2</span></h5>
                            </div>
                            <div class="col s2 m6 l6 right">
                                @if ($item->exists)
                                    <a href="" class="right">
                                        <img style=" max-width: 60px"
                                             class="circle mr-10 vertical-text-middle"
                                             src="{{$item->getFirstMediaUrl('product', 'thumb-p')}}"/>
                                    </a>
                                @endif
                                <a href="{{route('admin.product.create')}}"
                                   class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right">
                                    <i class="material-icons">add</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($item->exists)
                    <form method="POST" enctype="multipart/form-data"
                          action="{{route('admin.product.update', $item->id)}} ">
                        @method('PATCH')

                        @else
                            <form method="POST" enctype="multipart/form-data"
                                  action="  {{ route('admin.product.store') }} ">
                                @endif

                                @csrf

                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="col s12">
                                            <div class="row active" id="main-view-tab">
                                                <div class="col s12">
                                                    <ul class="tabs tab-demo-active tabs-fixed-width z-depth-1 gradient-45deg-purple-deep-orange">
                                                        <li class="tab m4">
                                                            <a class="white-text waves-effect waves-light active"
                                                               href="#activeone">Данные</a>
                                                        </li>
                                                        @if ($item->exists)
                                                            <li class="tab m4">
                                                                <a class="white-text waves-effect waves-light active"
                                                                   href="#seo">Медиа</a>
                                                            </li>
                                                        @endif
                                                        @if ($item->exists)
                                                            <li class="tab m4">
                                                                <a class="white-text waves-effect waves-light active"
                                                                   href="#specification">Характеристики товара</a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="col s12">
                                                    <div id="activeone"
                                                         class="col s12 lighten-4 active"
                                                         style="display: block;">
                                                        @include('admin.product.layouts.main')

                                                    </div>
                                                    <div id="seo"
                                                         class="col s12  lighten-4 active"
                                                         style="display: block;">
                                                        @include('admin.product.layouts.image')
                                                    </div>
                                                    @if ($item->exists)
                                                        <div id="specification"
                                                             class="col s12  lighten-4 active"
                                                             style="display: block;">
                                                            @include('admin.product.layouts.characteristic.characteristic')
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="card">
                                                    <div class="col s12 m12 l12">
                                                        <div class="card-content">
                                                            {!! Form::submit('Сохранить')
                                                            ->id('my-btn')
                                                            ->primary() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>
    </div>
@endsection

