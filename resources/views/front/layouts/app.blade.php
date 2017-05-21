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

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
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
        {!! Html::style(elixir('options/optionswitch.css')) !!}

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
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

       {!! HTML::script(elixir('options/optionswitcher.js')); !!}


        @yield('scripts')

        <script>
            $('#logout').click(function(e) {
                e.preventDefault();
                $('#logout-form').submit();
            });
            // window.setTimeout(function() {
            //     $(".alert").fadeTo(500, 0).slideUp(500, function(){
            //         $(this).remove(); 
            //     });
            // }, 3000);
        </script>
    </body>
</html>
