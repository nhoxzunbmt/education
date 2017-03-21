<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        {!! Html::style(elixir('css/main.css')) !!}

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>
    </head>

    <body>
        <div id="ui" class="ui">
            @include('admin.layouts.header')

            @include('admin.layouts.navbar')

            <div id="content" class="ui-content">
                <div class="ui-content-body">
                    @yield('content')
                </div>
                @include('admin.layouts.right')
            </div>

            @include('admin.layouts.footer')
        </div>

        <!-- Scripts -->
        {!! HTML::script(elixir('js/jquery-2.1.1.js')); !!}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        {!! HTML::script(elixir('js/jquery.nicescroll.min.js')); !!}
        {!! HTML::script(elixir('js/autosize.min.js')); !!}
        {!! HTML::script(elixir('js/main.js')); !!}

        <script>
            $('.logout').click(function(e) {
                e.preventDefault();
                $('.logout-form').submit();
            });

            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });

                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 5000
                };
                
                toastr.success('Chào mừng bạn đến trang quản lý shop items!');
            }, 3000);
        </script>

        @yield('scripts')
    </body>
</html>
