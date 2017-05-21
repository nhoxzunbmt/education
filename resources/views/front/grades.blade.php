@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-10">
                    <div class="popularCourse padding-border-right clearfix">
                        <h3 style="margin-bottom: 30px;">Danh sách các lớp hiện có</h3>
                        <div class="row">
                            {!! Form::open(['action' => ['ParentsController@list'], 'method' => 'GET']) !!}
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    {!! Form::select('grades', $search_grades, $params['grades'], ['class' => 'form-control', 'placeholder' => 'Chọn lớp']) !!}
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    {!! Form::select('city', $cities, $params['city'], ['class' => 'form-control','placeholder' => trans('lang.city'), 'id' => 'city_id']) !!}
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    {!! Form::select('city_id', [], $params['city_id'], ['class' => 'form-control', 'placeholder' => 'Quận/Huyện', 'id' => 'district_id']) !!}
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    {!! Form::submit('Search', ['class' => 'btn btn_sign', 'style' => 'padding: 4px 15px;']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>

                        @if ($lists->count())
                            @foreach ($lists->chunk(3) as $grades)
                                <div class="row">
                                    @foreach($grades as $list)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="imageBox">
                                                <div class="productCaption boder-grade clearfix">
                                                    <p class="title-grade">Lớp đang cần gia sư</p>
                                                    <div style="margin: 10px 0;">
                                                        <p><strong>Lớp dạy: </strong>{{ $list->grades }}</p>
                                                        <p><strong>Môn dạy: </strong>{{ $list->subjects }}</p>
                                                        <p><strong>Địa chỉ: </strong>{{ $list->city->name.', '.$city->city($list->city->parent_id).'.' }}</p>
                                                        <p><strong>Số buổi: </strong>{{ $list->number }} buổi</p>
                                                        <p><strong>Thời gian: </strong>{{ $status->time($list->time) }}</p>
                                                        <p><strong>Yêu cầu: </strong>{{ $status->level($list->level) }}</p>
                                                        <p><strong>Liên hệ ngay: </strong>0974 502 420</p>
                                                    </div>
                                                    <div class="caption-bottom">
                                                        <div class="price">
                                                            <span class="offer-price">{{ salary($list->salary) }}</span>
                                                        </div>
                                                        <div class="price" style="border-right: none;">
                                                            <span class="offer-price" style="color: #16d5b8;">MS: {{ $list->code }}</span>
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
                                    <p class="red">{{ trans('lang.no_result') }}</p>
                                </div>
                            </div>
                        @endif

                        <ul class="pagination">
                            <li>
                                <a aria-label="Previous" href="#">
                                    <span aria-hidden="true">Previous</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">38</a></li>
                            <li>
                                <a aria-label="Next" href="#">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>
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
