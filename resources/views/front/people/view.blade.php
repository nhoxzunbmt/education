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
            <h3>Danh sách các lớp hiện có</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="strip-courses">
                        <div class="title-course">
                            <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                            <ul>
                                <li><i class="icon-bookmark"></i> MS: {{ $partner->code }}</li>
                            </ul>
                        </div>
                        <div class="description">
                                <p><strong>Lớp dạy: </strong>{{ $partner->grades }}</p>
                                <p><strong>Môn dạy: </strong>{{ $partner->subjects }}</p>
                                <p><strong>Địa chỉ: </strong>{{ $partner->user->address.', '.$partner->city->name.', '.$city->city($partner->city->parent_id).'.' }} <a href="#" style="padding-top: -3px;"><i class="icon-map-marker red"></i></a></p>
                                <p><strong>Mức lương: </strong>{{ salary($partner->salary) }}</p>
                                <p><strong>Số buổi: </strong><span class="red">{{ $partner->number }}</span> buổi/tuần</p>
                                <p><strong>Thời gian: </strong>{{ $status->time($partner->time) }}</p>
                                <p><strong>Yêu cầu: </strong>{{ $status->level($partner->level) }}</p>
                                <p><strong>Tình trạng: </strong><span class="red">{{ $status->statu($partner->status) }}</span></p>
                                <p><strong>Liên hệ: </strong><span class="red"><i class="icon-phone"></i> 0974 502 420</span></p>
                                <ul>
                                    <li><a href="#" class="button_red_small bg-envelope"><i class="icon-envelope"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                </ul>
                                {{ link_to(url('chi-tiet/'.$partner->slug), trans('lang.detail'), ['class' => 'button_red_small btn-02 p-5']) }}
                        </div>
                    </div>
                </div>
                <p>Dia chi ban do</p>
                <div class="col-md-12">
                    <div id="map_1"><iframe style="height:300px; width:100%; border:0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2482.336900888852!2d-0.18850530000000001!3d51.52538029999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10d04b6d1a254faa!2sMaida+Vale+Library!5e0!3m2!1sit!2sit!4v1410245771307"></iframe></div>
                </div>
            </div>
        </div>
    </section>
@endsection
