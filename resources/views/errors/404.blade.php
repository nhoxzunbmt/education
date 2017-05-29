@extends('front.layouts.app')

@section('content')
    <div class="mainContent error-content clearfix">
        <div class="container">
            <div class="error-content-top">
                <h1>404</h1>
                <h3>Error</h3>
            </div>
            <h3>Oops!</h3>
            <p>Đường dẫn không tồn tại</p>
            <p>Trở về  {{ link_to('/', 'trang chủ') }} hoặc {{ link_to('lien-he', 'liên hệ') }} với chúng tôi.</p>
        </div>
    </div>

    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection
