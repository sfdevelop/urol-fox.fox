@extends('layouts.admin_layouts')

@if ($item->exists)
    @section('title', 'Редактируем новость' )
@else
    @section('title', 'Создать запись' )
@endif

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('administrator/assets/js/scripts/form-elements.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/scripts/ui-alerts.min.js')}}"></script>
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
                                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Новости</span></h5>
                            </div>
                            <div class="col s2 m6 l6 right">
                                <a href="{{route('admin.news.create')}}"
                                   class="btn-floating mb-1 btn-large waves-effect waves-light mr-1 right">
                                    <i class="material-icons">add</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($item->exists)
                    <form method="POST" enctype="multipart/form-data"
                          action="{{route('admin.news.update', $item->id)}} ">
                        @method('PATCH')

                        @else
                            <form method="POST" enctype="multipart/form-data"
                                  action="  {{ route('admin.news.store') }} ">
                                @endif

                                @csrf
                                <div class="col s12">
                                    <div class="container">
                                        <div class="section">

                                            @include('admin.posts.image')

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

                                                                @include('layouts.message.message')

                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12">
                                                                    <div class="row active" id="main-view"
                                                                         style="display: block;">
                                                                        <div class="col s12">
                                                                            <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                                                                                @foreach(config('translatable.locales') as $locale)
                                                                                    <li class="tab">
                                                                                        <a class="active"
                                                                                           href="#lang-{{ strtoupper($locale) }}">{{ strtoupper($locale) }}</a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col s12">
                                                                            @foreach(config('translatable.locales') as $locale)
                                                                                <div id="lang-{{ strtoupper($locale) }}"
                                                                                     class="col s12 active pt-2 pb-2"
                                                                                     style="display: block;">

                                                                                    <div class="input-field col s12">
                                                                                        <input type="text"
                                                                                               name="{{$locale}}[title]"
                                                                                               id="title_{{ $locale }}"
{{--                                                                                               value="{{ old($locale.'.title') }}"--}}
                                                                                               value="{{old($locale.'.title', $item->translate($locale)->title)}}"
                                                                                               class="
                                                                                               @error($locale.".title")
                                                                                                   is-invalid
                                                                                               @enderror
                                                                                                   "
                                                                                        >
                                                                                        <label
                                                                                            for="title_{{ $locale }}">
                                                                                            Заголовок
                                                                                            ({{ strtoupper($locale) }})
                                                                                        </label>
                                                                                        @error($locale.".title")
                                                                                        <div
                                                                                            class="alert alert-danger">{{ $message }}</div>
                                                                                        @enderror
                                                                                    </div>

                                                                                    <div
                                                                                        class="mt-4 input-field col s12">
                                                                                        <textarea
                                                                                            name="{{ $locale }}[description]"
                                                                                            id="description_{{ $locale }}"
                                                                                            rows="5"
                                                                                            class="materialize-textarea ckeditor">{{old( $locale.'.description',$item->translate($locale)->description)  }}</textarea>
                                                                                    </div>

                                                                                </div>
                                                                            @endforeach
                                                                            <div class="input-field col s12 m6">
                                                                                <label>
                                                                                    <input type="checkbox"
                                                                                           name="public"
                                                                                           @if ($item->public=true)
                                                                                           checked
                                                                                        @endif
                                                                                    >
                                                                                    <span>Опубликован</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="input-field col s12 m6">
                                                                                {!! Form::text('sort', 'Порядок сортировки')
                                                                                    ->placeholder('Порядок сортировки')
                                                                                    ->value(old('sort',$item->sort ?? '99999'))
                                                                                !!}
                                                                            </div>
                                                                                <div id="view-file-input" class="active" style="display: block;">
                                                                                    <p>If you want to style an input button with a path input we provide this structure.</p>
                                                                                    <form action="#">
                                                                                        <div class="file-field input-field">
                                                                                            <div class="btn">
                                                                                                <span>File</span>
                                                                                                <input type="file">
                                                                                            </div>
                                                                                            <div class="file-path-wrapper">
                                                                                                <input class="file-path validate" type="text">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            <div class="row">
                                                                                <div class="col s12 m3 l3 mb-3 d-block">
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

