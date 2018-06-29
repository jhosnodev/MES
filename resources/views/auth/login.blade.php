@extends('layouts.app')

@section('company', 'BF Global')
@section('title', 'Inicio de Sesión')

@section('guest-content')
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('img/bfglobal-logo.png') }}" alt="bfglobal-logo">
                            </a>
                        </div>
                        <div class="login-form">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">Dirección de Correo</label>

                                    <div >
                                        <input id="email" type="email" class="form-control au-input au-input--full" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div >
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group login-checkbox">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>

                                    </div>
                                    <label for="">
                                        <a class="btn btn-link text-right" href="{{ route('password.request') }}">
                                            ¿Olvidó su contraseña?
                                        </a>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                            ¡Entrar!
                                        </button>

                                    </div>
                                </div>
                                <div class="register-link">
                                    <p>
                                        ¿No esta registrado?
                                        <a href="{{ route('register') }}">¡Registrese Aquí!</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>











@endsection
