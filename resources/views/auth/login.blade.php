<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.admin.head')


<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page"
    data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
    <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form" method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">Авторизация</h5>
                            </div>
                        </div>

                        <div class="row margin">

                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email" class="center-align">{{ __('E-Mail Address') }}</label>
                            </div>
                        </div>


                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">{{ __('Password') }}</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1">
                                <p>
                                    <label>
                                        <input type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>Запомнить меня</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit"
                                        class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                                    Вход
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request', app()->getLocale()) }}">
                                        Забыли пароль?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{asset('administrator/assets/js/vendors.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/search.min.js')}}"></script>
    <script src="{{asset('administrator/assets/js/custom/custom-script.min.js')}}"></script>
</body>
</html>
