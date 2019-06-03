@extends('layouts.boot')

@section('content')
    <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <h2 class="form-login-heading">Вход</h2>
        <div class="login-wrap">
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
            <br>
            <button class="btn btn-theme btn-block" type="submit">Войти</button>

            <hr>

            <div class="registration">
                Нет аккаунта?<br/>
                <a class="" href="{{ url('/registration') }}">
                    Зарегестрироваться
                </a>
            </div>
        </div>
    </form>
@endsection
