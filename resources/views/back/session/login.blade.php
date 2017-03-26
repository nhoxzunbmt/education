<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        {!! Html::style(elixir('css/back/main.css')) !!}
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>
    </head>

    <body class="login-page authentication">
        <div class="container">
            <div class="card-top"></div>
            <div class="card">
                <h1 class="title">{{ trans('lang.login') }}<div class="msg">{{ trans('lang.loger') }}</div></h1>
                <div class="col-md-12">
                    {!! Form::open(['action' => ['Back\SessionController@login'], 'method' =>  'POST']) !!}
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account"></i>
                            </span>
                            <div class="form-line">
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => trans('lang.email')]) !!}
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                            <div class="form-line">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('lang.password')]) !!}
                            </div>
                        </div>
                        <div>
                            <div class>
                                {!! Form::checkbox('remember', null, old('remember') ? 'checked' : '', ['class' => 'filled-in chk-col-pink', 'id' => 'rememberme']) !!}
                                <label for="rememberme">{{ trans('lang.remember') }}</label>
                            </div>
                            <div class="text-center">
                                {!! Form::submit(trans('lang.login'), ['class' => 'btn btn-raised waves-effect g-bg-cyan']) !!}
                            </div>
                            <div class="text-center">
                                <a href="#">{{ trans('lang.forgot') }}</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>    
        </div>
        <div class="theme-bg"></div>
    </body>
</html>
