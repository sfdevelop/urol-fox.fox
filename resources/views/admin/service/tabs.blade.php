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

                        <div class="mt-4 input-field col s12">

                            <textarea name="{{ $locale }}[description]"
                                      id="description_{{ $locale }}"
                                      rows="5"
                                      class="materialize-textarea ckeditor">{{old( $locale.'.description',$item->translate($locale)->description ?? '')  }}</textarea>
                        </div>

                        @include('layouts.admin.seo')
                    </div>

                @endforeach
                <div class="col s12">
                    <div class="input-field col s12 m6">
                        <input type="hidden"
                               name="public"
                               value="0"
                        >
                        <label>
                            <input type="checkbox"
                                   name="public"
                                   @if ($item->public==1)
                                   checked
                                   @endif
                                   value="1"
                                {{old ('public')? 'checked': null}}
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
                <div class="col s12 file-field input-field">
                    <div class="btn float-left">
                        <span>Изображение</span>
                        <input name="file"
                               type="file"
                            {{$item->exists ? '': 'required'}}
                        >
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate"
                               type="text">
                    </div>
                    @error("file")
                    <div
                        class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
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
