@extends('layouts.admin_layouts')

@section('title', 'Категории' )

@section('new-css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/pages/page-users.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/assets/css/themes/sfdevelop.scss')}}">
@endsection

@section('new-js')
    <script src="{{asset('administrator/assets/js/scripts/page-users.min.js')}}"></script>
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Категории</span></h5>
                        </div>
                        <div class="col s2 m6 l6 right">
                            <a href="{{route('admin.category.create')}}"
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

                                    <ul>
                                        @foreach ($categories as $category)
                                            <li class="category_li">

                                                {{ $category->title }}

                                                <div class="right">
                                                    <img style="border-radius: 8px; border: 1px solid #ccc; max-width: 40px"
                                                         class="responsive-img"
                                                         src="{{$category->getFirstMediaUrl('category', 'thumb-p')}}"/>
                                                    <a class="mb-6 btn-floating waves-effect waves-light cyan col p-0 tooltipped"
                                                       href="{{route('admin.category.edit', $category->id)}}"
                                                       data-position="left"
                                                       data-tooltip="Редактирование"
                                                    >
                                                        <i class="material-icons dp48">create</i>
                                                    </a>

                                                    <form method="POST" action="{{route('admin.category.destroy', $category->id)}} "
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

                                                </div>

                                            </li>
                                            <ul class="pl-1">
                                                @foreach ($category->childrenCategories as $childCategory)
                                                    @include('admin.category.child_category', ['child_category' => $childCategory])
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </ul>

{{--                                    @include('admin.category.child_category')--}}

                                    <div class="paginate">
                                        @if ($categories->total() > $categories->count())
                                            {{ $categories->links() }}
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
