<div class="row">
    <div class="col s12">
        <div class="row active" id="main-view"
             style="display: block;">
            <div class="col s12 mb-2">
                @if (!$item->exists)
                    <select name="characteristic_id"
                            id="characteristic_id_select"
                            class="select2 w-100 d-block position-relative form-control"
                    >
                        <option disabled value="">Выберите характеристику</option>
                        @foreach($allCharacteristic as $Specification)
                            <option value="{{$Specification->id}}">{{$Specification->title}}</option>
                        @endforeach
                    </select>

                    <input hidden type="text" id="product_id" name="product_id" value="{{$idProduct}}">

                @endif
            </div>
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
                                   name="{{$locale}}[title_character]"
                                   id="title_character_{{ $locale }}"
                                   value="{{old($locale.'.title_character', $item->translate($locale)->title_character ?? '')}}"
                                   class="
                                    @error($locale.".title_character")
                                       is-invalid
                                    @enderror
                                       "
                            >
                            <label
                                for="title_character_{{ $locale }}">
                                Заголовок
                                ({{ strtoupper($locale) }})
                            </label>
                            @error($locale.".title_character")
                            <div
                                class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                @endforeach

                <div class="col s12 m3 d-block">
                    {!! Form::submit('Сохранить')
                    ->id('my-btn')
                    ->primary() !!}
                </div>
            </div>
        </div>
    </div>
</div>
