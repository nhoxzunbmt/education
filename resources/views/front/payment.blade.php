@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="post_left_section">
                        <div class="post single_post" style="border-bottom: none;">
                            <div class="post_desc">
                                <div class="post_thumb">
                                    <img src="{{ url('/') }}/img/gia-su.jpg" height="260">
                                </div>
                                <h3 class="text-center required p-t-b">Chua co du lieu</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @include('front.layouts.right')
            </div>
        </div>
    </div>
    
    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection
