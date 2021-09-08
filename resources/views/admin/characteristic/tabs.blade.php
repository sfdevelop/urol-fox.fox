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
                                   value="{{old($locale.'.title', $item->translate($locale)->title ?? '')}}"
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
