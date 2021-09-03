<div class="col s12">
    <h4 class="card-title">Настройки SEO</h4>
    <p>
        Настройки SEO - заполняются СЕО специалистами и не являются обязательными для работы
        сайта.
    </p>

    <div class="input-field col s12">
        <input type="text"
               name="{{$locale}}[seo_title]"
               id="seo_title_{{ $locale }}"
               value="{{old($locale.'.seo_title', $item->translate($locale)->seo_title ?? '')}}"
               class="
                    @error($locale.".seo_title")
                        is-invalid
                    @enderror
                   "
        >

        <label
            for="seo_title_{{ $locale }}">
            SEO_Title
            ({{ strtoupper($locale) }})
        </label>
        @error($locale.".seo_title")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

    </div>
    <div class="input-field col s12">
        <input type="text"
               name="{{$locale}}[seo_key]"
               id="seo_key_{{ $locale }}"
               value="{{old($locale.'.seo_key', $item->translate($locale)->seo_key ?? '')}}"
               class="
                    @error($locale.".seo_key")
                         is-invalid
                    @enderror
                   "
        >

        <label
            for="seo_key_{{ $locale }}">
            SEO_Key
            ({{ strtoupper($locale) }})
        </label>
        @error($locale.".seo_key")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

    </div>
    <div class="input-field col s12">
        <input type="text"
               name="{{$locale}}[seo_description]"
               id="seo_description_{{ $locale }}"
               value="{{old($locale.'.seo_description', $item->translate($locale)->seo_description ?? '')}}"
               class="
                   @error($locale.".seo_description")
                         is-invalid
                   @enderror
                   "
        >

        <label
            for="seo_description_{{ $locale }}">
            SEO_Description
            ({{ strtoupper($locale) }})
        </label>
        @error($locale.".seo_description")
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

    </div>
</div>
