@extends('front.layouts.app')

@section('breadcrumb')
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li>{{ link_to(url('/'), trans('lang.home'), trans('lang.home')) }}</li>
            <li class="active">{{ trans('lang.front.people') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <section class="col-md-6 col-sm-6">
        <div class="col-right p-10">
            <h3>Danh sách gia sư hiện có</h3><hr>
            <div class="row">
                @foreach($a as $list)
                    <div class="col-md-6">
                        <div class="strip-courses">
                            <div class="title-course">
                                <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                                <ul>
                                    <li><i class="icon-bookmark"></i> MS: {{ $list->code }}</li>
                                </ul>
                            </div>
                            <div class="description">
                                    <p><strong>Lớp dạy: </strong>{{ $list->grades }}</p>
                                    <p><strong>Môn dạy: </strong>{{ $list->subjects }}</p>
                                    <p><strong>Địa chỉ: </strong>{{ $list->user->address }}</p>
                                    <p><strong>Mức lương: </strong>1,500,000 đồng/tháng</p>
                                    <p><strong>Số buổi: </strong>3 buổi</p>
                                    <p><strong>Thời gian: </strong>Dạy 120 phút/buổi các tối từ 17h-21h</p>
                                    <p><strong>Yêu cầu: </strong>Nữ Cử Nhân kinh nghiệm</p>
                                    <p><strong>Liên hệ: </strong><i class="icon-phone"></i> 0974 502 420</p>
                                    <ul>
                                        <li><a href="#" class="button_red_small bg-envelope"><i class="icon-envelope"></i></a></li>
                                        <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                    {{ link_to('#', trans('lang.signup'), ['class' => 'button_red_small btn-02 p-5']) }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
@endsection
