<div class="row">

    <div class="input-field col s12">
        <input type="text"
               name="name"
               id="name"
               value="{{old('name', $item->name ?? '')}}"
               class="
                    @error("name")
                        invalid
                    @enderror
                   validate
                   "
        >
        <label
            for="name">
            Имя пользователя
        </label>
        @error("name")
        <div
            class="alert alert-danger">{{ $message }}
        </div>
        @enderror
    </div>

    <div class="input-field col s12">
        <input type="email"
               name="email"
               id="email"
               value="{{old('email', $item->email ?? '')}}"
               class="
                    @error("email")
                        invalid
                    @enderror
                   validate
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
        <input type="password"
               name="password"
               id="password"
               value="{{old('password')}}"
               class="
                    @error("password")
                        invalid
                    @enderror
                   validate
                   "
        >
        <label
            for="password">
            Введите Пароль
        </label>
        @error("password")
        <div
            class="alert alert-danger">{{ $message }}
        </div>
        @enderror
    </div>

    <div class="input-field col s12">
        <input type="password"
               name="password_confirmation"
               id="password_confirmation"
               value="{{old('password_confirmation')}}"
               class="
                    @error("password_confirmation")
                        invalid
                    @enderror
                   validate
                   "
        >
        <label
            for="password">
            Подтвердите Пароль
        </label>
        @error("password_confirmation")
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
