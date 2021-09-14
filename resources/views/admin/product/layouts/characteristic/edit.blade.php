@extends('layouts.admin_layouts')

@if ($item->exists)
    @section('title', 'Редактируем запись' )
@else
    @section('title', 'Создать запись' )
@endif

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('administrator/assets/js/scripts/form-elements.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/scripts/ui-alerts.min.js')}}"></script>
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
                                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Характеристика для товара</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($item->exists)
                    <form method="POST" enctype="multipart/form-data"
                          action="{{route('admin.product-character.update', $item->id)}} ">
                        @method('PATCH')

                        @else
                            <form method="POST" enctype="multipart/form-data"
                                  action="  {{ route('admin.product-character.store') }} ">
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

                                                            @include('admin.product.layouts.characteristic.characterTabs')

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

