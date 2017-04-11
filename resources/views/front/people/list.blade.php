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
                {!! Form::open(['action' => ['Front\PeopleController@list'], 'method' => 'GET'], ['class' => 'form-inline', 'id' => 'newsletter']) !!}
                    <div class="col-md-3">
                        {!! Form::select('grades', $search_grades, $params['grades'], ['class' => 'form-control', 'placeholder' => 'Chọn lớp', 'style' => 'width: 130px;']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::select('city', $cities, $params['city'], ['class' => 'form-control','placeholder' => trans('lang.city'), 'id' => 'city_id', 'style' => 'width: 180px;']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::select('city_id', [], $params['city_id'], ['class' => 'form-control', 'placeholder' => 'Quận/Huyện', 'id' => 'district_id', 'style' => 'width: 130px;']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::submit('Search', ['class' => 'button_medium pull-right', 'style' => 'position:relative']) !!}
                    </div>
                {!! Form::close() !!}
            </div>

            @if ($lists->count())
                @foreach ($lists->chunk(2) as $grades)
                <div class="row">
                    @foreach($grades as $list)
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
                                        <p><strong>Địa chỉ: </strong>{{ $list->user->address.', '.$list->city->name.', '.$city->city($list->city->parent_id).'.' }} <a href="#" style="padding-top: -3px;"><i class="icon-map-marker red"></i></a></p>
                                        <p><strong>Mức lương: </strong>{{ salary($list->salary) }}</p>
                                        <p><strong>Số buổi: </strong><span class="red">{{ $list->number }}</span> buổi/tuần</p>
                                        <p><strong>Thời gian: </strong>{{ $status->time($list->time) }}</p>
                                        <p><strong>Yêu cầu: </strong>{{ $status->level($list->level) }}</p>
                                        <p><strong>Tình trạng: </strong><span class="red">{{ $status->statu($list->status) }}</span></p>
                                        <p><strong>Liên hệ: </strong><span class="red"><i class="icon-phone"></i> 0974 502 420</span></p>
                                        <ul>
                                            <li><a href="{{ Share::load(Request::fullUrl(), $list->title)->facebook() }}" class="button_red_small bg-envelope"><i class="icon-envelope"></i></a></li>
                                            <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                        </ul>
                                        {{ link_to(url('chi-tiet/'.$list->slug), trans('lang.detail'), ['class' => 'button_red_small btn-02 p-5']) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endforeach
            @else
                <div class="row">
                    <div class="col-md-12">
                        <p class="red">{{ trans('lang.no_result') }}</p>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    {!! $lists->appends(['grades' => $params['grades'], 'city' => $params['city'], 'city_id' =>$params['city_id']])->links() !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('#city_id').on('change', function(e) {
                e.preventDefault();

                var city_id = $(this).val();
                $.get('/districts/' + city_id, function (data) {
                    $('#district_id').empty();
                    $.each(data, function(key, value) {
                        $('#district_id').append($('<option>', { value : key }).text(value));
                    });
                });
            });
        });
    </script>
@endsection
