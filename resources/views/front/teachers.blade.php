@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-10">
                    <div class="popularCourse padding-border-right clearfix">
                        <h3 class="m-b-30">Danh sách gia sư hiện có</h3>
                        <div class="row m-b-30">
                            {!! Form::open(['action' => ['TeachersController@list'], 'method' => 'GET']) !!}
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
                                                <div class="productImage clearfix">
                                                    {{ Html::image(url('/avatars').'/'.image_teacher($list->user->avatar), $list->user->name, ['width' => 262, 'height' => 186]) }}
                                                    <span class="sticker"><strong style="color: #05b197;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>{{ $status->teacher_level($list->level) }}</strong></span>
                                                </div>
                                                <div class="productCaption clearfix">
                                                    <h3 class="m-t-10">
                                                        {{ link_to($list->slug, $list->user->name, $list->title) }}
                                                    </h3>
                                                    <p><strong>Dạy lớp: </strong>{{ $list->grades }}</p>
                                                    <p class="m-b-15"><strong>Lớp</strong>{{ $list->subjects }}</p>
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
                                    <p class="required">{{ trans('lang.no_result') }}</p>
                                </div>
                            </div>
                        @endif

                        <ul class="pagination">
                            <li><a href="#"><span aria-hidden="true">Previous</span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">38</a></li>
                            <li><a href="#"><span aria-hidden="true">Next</span></a></li>
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
