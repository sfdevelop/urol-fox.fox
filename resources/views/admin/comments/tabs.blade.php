<div class="row">
    <div class="col s12">
        <div class="row active" id="main-view"
             style="display: block;">

            <div class="input-field col s12">
                <input type="text"
                       name="name"
                       id="name"
                       value="{{old('name', $item->name ?? '')}}"
                       class="
                                    @error("name")
                                       is-invalid
                                    @enderror
                                       "
                >
                <label
                    for="name">
                    Имя
                </label>
                @error("name")
                <div
                    class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-field col s12">
                <input type="text"
                       name="email"
                       id="email"
                       value="{{old('email', $item->email ?? '')}}"
                       class="
                                    @error("email")
                                       is-invalid
                                    @enderror
                                       "
                >
                <label
                    for="email">
                    e-mail
                </label>
                @error("email")
                <div
                    class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="input-field col s12">
                <textarea class="mt-2" name="description" id="description" cols="30" rows="30">{{old('description', $item->description ?? '')}}</textarea>
                <label
                    for="email">
                    Отзыв
                </label>
                @error("email")
                <div
                    class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>



            <div class="col s12">
                <div class="input-field col s12 m6">
                    <input type="hidden"
                           name="is_public"
                           value="0"
                    >
                    <label>
                        <input type="checkbox"
                               name="is_public"
                               @if ($item->is_public==1)
                                   checked
                               @endif
                               value="1"
                            {{old ('is_public')? 'checked': null}}
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
            </div>

            <div class="col s6 input-field">
                <input type="text" name="date_picker" class="datepicker" value="{{ \Carbon\Carbon::create($item->date)->format('d-m-Y')}}">
                <label
                    for="date_picker">
                    Дата
                </label>
            </div>

            <div class="col s6 input-field">
                <input type="text" name="time_picker" class="timepicker" value="{{ \Carbon\Carbon::create($item->date)->format('H:i')}}">
                <label
                    for="time_picker">
                    Время
                </label>
            </div>

            <div class="col s12 m3 d-block">
                {!! Form::submit('Сохранить')
                ->id('my-btn')
                ->primary() !!}
            </div>
        </div>

    </div>
</div>
