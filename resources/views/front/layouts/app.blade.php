<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

        {!! SEO::generate() !!}

        <!-- Styles -->
        {!! Html::style(elixir('plugins/bootstrap/css/bootstrap.min.css')) !!}
        {!! Html::style(elixir('css/bootstrap-datetimepicker.min.css')) !!}
        {!! Html::style(elixir('plugins/selectbox/select_option1.css')) !!}
        {!! Html::style(elixir('plugins/font-awesome/css/font-awesome.min.css')) !!}
        {!! Html::style(elixir('plugins/flexslider/flexslider.css')) !!}
        {!! Html::style(elixir('plugins/animate.css')) !!}
        {!! Html::style(elixir('plugins/pop-up/magnific-popup.css')) !!}
        {!! Html::style(elixir('plugins/rs-plugin/css/settings.css')) !!}
        {!! Html::style(elixir('plugins/owl-carousel/owl.carousel.css')) !!}
        {!! Html::style(elixir('css/style.css')) !!}
        {!! Html::style(elixir('css/color-option2.css')) !!}

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-100384115-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>

    <body class="body-wrapper">
        <div class="main_wrapper">
            @include('front.layouts.header')

            @yield('slider')

            <div class="mainContent clearfix" style="padding: 0px;">
                @yield('content')

                @yield('partner')
            </div>
        </div>

        @include('front.layouts.footer')
    
        <!-- Scripts -->
        {!! HTML::script(elixir('plugins/jquery/jquery-1.11.1.min.js')); !!}
        {!! HTML::script(elixir('plugins/bootstrap/js/bootstrap.min.js')); !!}
        {!! HTML::script(elixir('plugins/flexslider/jquery.flexslider.js')); !!}
        {!! HTML::script(elixir('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')); !!}
        {!! HTML::script(elixir('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')); !!}
        {!! HTML::script(elixir('plugins/selectbox/jquery.selectbox-0.1.3.min.js')); !!}
        {!! HTML::script(elixir('plugins/pop-up/jquery.magnific-popup.js')); !!}
        {!! HTML::script(elixir('plugins/animation/waypoints.min.js')); !!}
        {!! HTML::script(elixir('plugins/count-up/jquery.counterup.js')); !!}
        {!! HTML::script(elixir('plugins/animation/wow.min.js')); !!}
        {!! HTML::script(elixir('plugins/animation/moment.min.js')); !!}
        {!! HTML::script(elixir('plugins/calender/fullcalendar.min.js')); !!}
        {!! HTML::script(elixir('plugins/owl-carousel/owl.carousel.js')); !!}
        {!! HTML::script(elixir('plugins/timer/jquery.syotimer.js')); !!}
        {!! HTML::script(elixir('plugins/smoothscroll/SmoothScroll.js')); !!}
        {!! HTML::script(elixir('js/bootstrap-datetimepicker.js')); !!}
        {!! HTML::script(elixir('js/moment.js')); !!}
        {!! HTML::script(elixir('js/custom.js')); !!}

        @yield('scripts')

        <script>
            $('#logout').click(function(e) {
                e.preventDefault();
                $('#logout-form').submit();
            });

            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 3000);
        </script>

        <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="panel panel-default formPanel">
                        <div class="panel-heading" style="padding: 15px 25px;">
                            <h3 class="panel-title">Đăng nhập</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="panel-body">
                            <p id="login-error"></p>
                            {!! Form::open(['action' => ['Auth\LoginController@login'], 'method' => 'POST', 'id' => 'formLogin']) !!}
                                <div class="form-group">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    {!! Form::text('log', null, ['id' => 'log', 'class' => 'form-control', 'placeholder' => 'Email hoặc số điện thoại']) !!}
                                </div>

                                <div class="form-group">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        {{ Form::checkbox('remember', null, old('remember') ? 'checked' : '', ['id' => 'remember']) }}
                                        <label for="remember" style="padding-left: 0px;"><span></span>{{ trans('lang.remember') }}</label>
                                    </div>
                                </div>

                                <button id="login" type="submit" class="btn btn-block commonBtn">Log in</button>
                            {!! Form::close() !!}

                            <div class="alt-text">or</div>
                            <div class="modal-border"></div>
                            <div class="alt-btn">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="facebook-btn btn btn-block" href="#"><i class="fa fa-facebook"></i> Log in with Facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                    <a class="twitter-btn btn btn-block" href="#"><i class="fa fa-twitter" style="font-size: 24px;"></i> Log in with Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
