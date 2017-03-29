<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        {!! Html::style(elixir('css/back/bootstrap-select.css')) !!}
        {!! Html::style(elixir('css/back/main.css')) !!}
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>
    </head>

    <body class="theme-cyan">
        @include('back.layouts.head')

        @include('back.layouts.navbar')
        @include('back.layouts.sidebar')
        
        <section class="content home">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        <div class="color-bg"></div>
    
        <!-- Scripts -->
        {!! HTML::script(elixir('js/back/libscripts.bundle.js')); !!}
        {!! HTML::script(elixir('js/back/vendorscripts.bundle.js')); !!}
        {!! HTML::script(elixir('js/back/jquery.sparkline.min.js')); !!}
        {!! HTML::script(elixir('js/back/Chart.bundle.min.js')); !!}
        {!! HTML::script(elixir('js/back/mainscripts.bundle.js')); !!}
        {!! HTML::script(elixir('js/back/sparkline.min.js')); !!}
        {!! HTML::script(elixir('js/back/chartjs.min.js')); !!}
        {!! HTML::script(elixir('js/back/basic-form-elements.js')); !!}
        {!! HTML::script(elixir('js/back/bootstrap-material-datetimepicker.js')); !!}
        {!! HTML::script(elixir('js/back/index.js')); !!}

        @yield('scripts')
    </body>
</html>
