@extends('layouts.admin_layouts')

@if ($order->exists)
    @section('title', 'Заказ' )
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
                                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Заказ № {{$order->id}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="container">
                        <div class="section">

                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div id="basic-tabs" class="card card card-default scrollspy">
                                        <div class="card-content">
                                            <div class="card-title">
                                                <div class="row">
                                                    <div class="col s12 m6 l10">
                                                        @if ($order->exists)

                                                        @else
                                                            <h4 class="card-title">Новая запись</h4>
                                                        @endif

                                                        <div class="row">
                                                            <div class="col s12">
                                                                Имя:
                                                                <h6>{{$order->name}}</h6>
                                                            </div>
                                                            <div class="col s12">
                                                                Товар:
                                                                <h5>{{$order->product}}</h5>
                                                                <h6><small><span>Артикул: </span>{{$order->vendor}}</small></h6>
                                                            </div>
                                                            <div class="col s12">
                                                                Номер телефона:
                                                                <h5>{{$order->phone}}</h5>
                                                            </div>
                                                            <div class="col s12">
                                                                Цена:
                                                                <h6>{{$order->price}} грн.</h6>
                                                            </div>
                                                            <div class="col s12">
                                                                <small>{{$order->created_at->format('d/m/Y h:m:s')}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-overlay"></div>
                </div>

            </div>
        </div>
    </div>
@endsection

