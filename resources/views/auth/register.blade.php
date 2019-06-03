@extends('layouts.boot')

@section('content')
    <form class="form-login" role="form" method="POST" action="{{ url('/registration') }}">
        {{ csrf_field() }}
        <h2 class="form-login-heading">Регистрация</h2>
        <div class="login-wrap">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Имя">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Пароль">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Пароль(еще раз)">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-block">
                    Зарегестрироваться
                </button>
            </div>
        </div>
    </form>

@endsection
