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
                                   name="{{$locale}}[address]"
                                   id="address_{{ $locale }}"
                                   value="{{old($locale.'.address', $item->translate($locale)->address ?? '')}}"
                                   class="
                                    @error($locale.".address")
                                       is-invalid
                                    @enderror
                                       "
                            >
                            <label
                                for="address_{{ $locale }}">
                                Адрес
                                ({{ strtoupper($locale) }})
                            </label>
                            @error($locale.".address")
                            <div
                                class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="input-field col s12">
                            <input type="text"
                                   name="{{$locale}}[time]"
                                   id="time_{{ $locale }}"
                                   value="{{old($locale.'.time', $item->translate($locale)->time ?? '')}}"
                                   class="
                                    @error($locale.".time")
                                       is-invalid
                                    @enderror
                                       "
                            >
                            <label
                                for="time_{{ $locale }}">
                                Расписание работы
                                ({{ strtoupper($locale) }})
                            </label>
                            @error($locale.".time")
                            <div
                                class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-field col s12">
                            <input type="text"
                                   name="{{$locale}}[weekend]"
                                   id="address_{{ $locale }}"
                                   value="{{old($locale.'.weekend', $item->translate($locale)->weekend ?? '')}}"
                                   class="
                                    @error($locale.".weekend")
                                       is-invalid
                                    @enderror
                                       "
                            >
                            <label
                                for="weekend_{{ $locale }}">
                                Выходные
                                ({{ strtoupper($locale) }})
                            </label>
                            @error($locale.".weekend")
                            <div
                                class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                        </div>
                        @include('layouts.admin.seo')
                    </div>

                @endforeach

                    <div class="input-field col s12 m12">
                        {!! Form::text('phone1', 'Главный телефон')
                            ->placeholder('Главный телефон')
                            ->value(old('phone1',$item->phone1 ?? ''))
                        !!}
                    </div>

                    <div class="input-field col s12 m12">
                        {!! Form::text('phone2', 'Телефон')
                            ->placeholder('Телефон')
                            ->value(old('phone2',$item->phone2 ?? ''))
                        !!}
                    </div>

                    <div class="input-field col s12 m12">
                        {!! Form::text('phone3', 'Телефон')
                            ->placeholder('Телефон')
                            ->value(old('phone3',$item->phone3 ?? ''))
                        !!}
                    </div>

                    <div class="input-field col s12 m12">
                        {!! Form::text('email', 'E-mail')
                            ->placeholder('Телефон')
                            ->value(old('email',$item->email ?? ''))
                        !!}
                    </div>

                    <div class="col s12 m3 d-block">
                        {!! Form::submit('Сохранить')
                        ->id('my-btn')
                        ->primary() !!}
                    </div>
                </div>

        </div>
    </div>
</div>
