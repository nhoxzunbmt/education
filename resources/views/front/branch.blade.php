@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-10">
                    <div class="popularCourse padding-border-right clearfix">
                        <h3 class="m-b-30">Danh sách các lớp tại <strong class="active">{{ $city_name->name }}</strong></h3>

                        @if ($lists->count())
                            @foreach ($lists->chunk(3) as $grades)
                                <div class="row">
                                    @foreach($grades as $list)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="imageBox">
                                                <div class="productImage clearfix">
                                                    {{ Html::image(url('/avatars').'/'.image_teacher($list->user->avatar), $list->user->name, ['width' => 262, 'height' => 186]) }}
                                                    <span class="sticker"><strong style="color: #05b197;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ $status->teacher_level($list->level) }}</strong></span>
                                                </div>
                                                <div class="productCaption clearfix">
                                                    <h3 class="m-t-10">
                                                        {{ link_to($list->slug, $list->user->name, $list->title) }}
                                                    </h3>
                                                    <p><strong>Dạy lớp: </strong>{{ sub_string($list->grades) }}</p>
                                                    <p class="m-b-15"><strong>Lớp: </strong>{{ sub_string($list->subjects) }}</p>
                                                    <div class="caption-bottom">
                                                        <div class="price">
                                                            <span class="offer-price">{{ salary($list->salary) }}</span>
                                                        </div>
                                                        <div class="user">
                                                            <a href="#" class="btn_sign _dk-gs">ĐK gia sư</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @else
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <img class="text-center" src="{{ url('/') }}/img/noresult.png">
                                    </p>
                                </div>
                            </div>
                        @endif
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
