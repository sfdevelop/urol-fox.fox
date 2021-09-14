@extends('layouts.admin_layouts')

@section('title', 'Товары' )

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/page-users.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/sfdevelop.scss')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/form-select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/vendors/select2/select2-materialize.css')}}">
@endsection

@section('new-js')
    <script src="{{asset('administrator/assets/js/scripts/page-users.min.js')}}"></script>
    <script src="{{asset('administrator/assets/vendors/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/scripts/form-select2.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });

        $('.public').val(["{{request()->status}}"]).select2()
        $('.category').val(["{{request()->category}}"]).select2()
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Товары</span></h5>
                        </div>
                        <div class="col s2 m6 l6 right">
                            <a href="{{route('admin.product.create')}}"
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
                @include('layouts.filter.productFilter')
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
                                                <th>Категория</th>
                                                <th>Статус</th>
                                                <th>Сортировка</th>
                                                <th class="right">Управление</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ( $paginator as $item)
                                                <tr>
                                                    <td>
                                                        <img style=" max-width: 90px"
                                                             class="circle mr-10 vertical-text-middle"
                                                             src="{{$item->getFirstMediaUrl('product', 'thumb-p')}}"/>
                                                    </td>
                                                    <td>{{$item->translate('ru', true)->title}}</td>
                                                    <td>{{$item->category->translate('ru', true)->title}}</td>
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
                                                    <td class="">
                                                        <form method="POST" action="{{route('admin.product.destroy', $item->id)}} "
                                                              class="col right"
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
                                                        <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped right"
                                                           href="{{route('admin.product.edit', $item->id)}}"
                                                           data-position="left"
                                                           data-tooltip="Редактирование"
                                                        >
                                                            <i class="material-icons dp48">create</i>
                                                        </a>

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
                                            {{ $paginator->appends($_GET)->links() }}
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
