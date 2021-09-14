
<div class="users-list-filter">
    <div class="card-panel">
        <div class="row">
            <form id="filter" action="{{ route('admin.product.index') }}">
                <div class="col s12 m6 l3">
                    <div class="input-field pt-2">
                        <div class="input-field col s12">
                            <input
                                id="title"
                                name="title"
                                type="text"
                                class="validate"
                                value="{{request()->title}}"
                            >
                            <label for="title" class="active">Поиск по названию</label>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <label for="users-list-status">Категория</label>
                    <div class="input-field">
                        <select id="#category"
                                class="select2 category browser-default"
                                name="category"
                        >
                            <option value=""></option>
                            @foreach($categories as $category)
                             <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <label for="users-list-status">Статус</label>
                    <div class="input-field">
                        <select id="#public"
                            class="select2 public browser-default"
                            name="status"
                        >
                            <option value=""></option>
                            <option value="false">Не опубликовано</option>
                            <option value="1">Опубликовано</option>
                        </select>
                    </div>
                </div>

                <div class="col s12 m6 l3 display-flex flex-column align-items-center show-btn">
                    <button type="submit" class="btn btn-block indigo waves-effect waves-light">Фильтр</button>
                    <a href="{{route('admin.product.index')}}" id="" class="btn btn-block mt-2"> Очистить</a>
                </div>
            </form>
        </div>
    </div>
</div>
