<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
        <link rel="manifest" href="ico/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        {!! Html::style(elixir('css/front/bootstrap.min.css')) !!}
        {!! Html::style(elixir('css/front/font-awesome.css')) !!}
        {!! Html::style(elixir('css/front/jquery.fancybox.css')) !!}
        {!! Html::style(elixir('css/front/jquery-sticklr-1.4-light-color.css')) !!}
        {!! Html::style(elixir('css/front/bootstrap-datetimepicker.min.css')) !!}
        {!! Html::style(elixir('css/front/style.css')) !!}
        {!! Html::style(elixir('css/front/settings.css')) !!}
        
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>
    </head>

    <body>
        @include('front.layouts.header')

        @yield('slider')

        @yield('plan')
        
        <div class="container">
            <div class="row">
                @yield('breadcrumb')

                @include('front.layouts.left_bar')

                @yield('content')

                @include('front.layouts.right_bar')
            </div>
        </div>
        
        @include('front.layouts.footer')
    
        <!-- Scripts -->
        {!! HTML::script(elixir('js/front/jquery.js')); !!}
        {!! HTML::script(elixir('js/front/respond.min.js')); !!}
        {!! HTML::script(elixir('js/front/modernizr.custom.17475.js')); !!}
        {!! HTML::script(elixir('js/front/jquery.easing.js')); !!}
        {!! HTML::script(elixir('js/front/megamenu.js')); !!}
        {!! HTML::script(elixir('js/front/functions.js')); !!}
        {!! HTML::script(elixir('js/front/jquery.fancybox.pack.js')); !!}
        {!! HTML::script(elixir('js/front/jquery.fancybox-media.js')); !!}
        {!! HTML::script(elixir('js/front/fancy_func.js')); !!}
        {!! HTML::script(elixir('js/front/jquery.themepunch.plugins.min.js')); !!}
        {!! HTML::script(elixir('js/front/jquery.themepunch.revolution.min.js')); !!}
        {!! HTML::script(elixir('js/front/revolutio-slider-func.js')); !!}
        {!! HTML::script(elixir('js/front/jquery-sticklr-1.4.min.js')); !!}
        {!! HTML::script(elixir('js/front/bootstrap-datetimepicker.min.js')); !!}

        @yield('scripts')

        <script>
            // $(document).ready(function() {
            //     $('#short').sticklr({
            //         animate: true,
            //         showOn: 'hover'
            //     });
            // });
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 3000);
        </script>
        <!-- <ul id="short" class="sticklr">
            <li>
                <a href="#" class=" icon-font" style="text-indent:-9999px"></a>
                <ul>
                    <li class="sticklr-title"><a href="http://themeforest.net/user/Ansonika/portfolio?ref=ansonika">Change Font Family</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="icon-purchase"></a>
                <ul>
                    <li class="sticklr-title">
                        <a href="http://themeforest.net/item/edu-educational-courses-college-with-megamenu/5210923?ref=ansonika">Purchase </a>
                    </li>
                </ul>
            </li>
        </ul> -->
    </body>
</html>
