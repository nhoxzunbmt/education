@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="single_content_left">
                        <h1 class="m-b-15">Đăng ký gia sư</h1>

                        @include('front.layouts.message')

                        {!! Form::open(['action' => ['TeachersController@store'], 'method' =>  'POST', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-4{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.name') }}<span class="required"> *</span></label>
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.email') }}<span class="required"> *</span></label>
                                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.gender') }} <span class="required">*</span></label>
                                {!! Form::select('gender', $genders, null, ['class' => 'form-control','placeholder' => trans('lang.gender')]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label>{{ trans('lang.birthday') }} <span class="required">* </span></label>
                                    <div class='input-group date' id='birthday'>
                                        {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.mobile') }} <span class="required"> * </span></label>
                                {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="col-md-4{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.avatar') }} <span class="required"> * </span></label>
                                {!! Form::file('avatar', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12{{ $errors->has('city_id') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.front.teacher_city') }} <span class="required">*</span></label>
                                {!! Form::select('city_id', $lists, null, ['class' => 'form-control','placeholder' => trans('lang.city'), 'id' => 'city_id']) !!}
                            </div>
                        </div>

                        <div id="district_lable" class="row hidden">
                            <div class="col-md-12">
                                <label>Khu vực bạn có thể dạy</label>
                            </div>
                        </div>

                        <div id="hn" class="row hidden">
                            @foreach($hn as $key => $value)
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('districts[]', $value->name, false, ['id' => 'hn_'.$key]) }}
                                    <label for="{{ 'hn_'.$key }}"><span></span>{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div id="hcm" class="row hidden">
                            @foreach($hcm as $key => $value)
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('districts[]', $value->name, false, ['id' => 'hcm_'.$key]) }}
                                    <label for="{{ 'hcm_'.$key }}"><span></span>{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div id="hp" class="row hidden">
                            @foreach($hp as $key => $value)
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('districts[]', $value->name, false, ['id' => 'hp_'.$key]) }}
                                    <label for="{{ 'hp_'.$key }}"><span></span>{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div id="dn" class="row hidden">
                            @foreach($dn as $key => $value)
                                <div class="col-md-4 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('districts[]', $value->name, false, ['id' => 'dn_'.$key]) }}
                                    <label for="{{ 'dn_'.$key }}"><span></span>{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div id="ct" class="row hidden">
                            @foreach($ct as $key => $value)
                                <div class="col-md-3 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('districts[]', $value->name, false, ['id' => 'ct_'.$key]) }}
                                    <label for="{{ 'ct_'.$key }}"><span></span>{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div><br>

                        <div class="row">
                            <div class="col-md-4{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.front.teacher_number') }} <span class="required">*</span></label>
                                {!! Form::select('number', $numbers, null, ['class' => 'form-control','placeholder' => trans('lang.number')]) !!}
                            </div>

                            <div class="col-md-4{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label>Tôi có thể dạy được các buổi <span class="required">*</span></label>
                                {!! Form::select('time', $times, null, ['class' => 'form-control','placeholder' => trans('lang.p_timer')]) !!}
                            </div>

                            <div class="col-md-4{{ $errors->has('level') ? ' has-error' : '' }}">
                                <label>{{ trans('lang.front.teacher_level') }} <span class="required">*</span></label>
                                {!! Form::select('level', $levels, null, ['class' => 'form-control','placeholder' => trans('lang.front.teacher_level')]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('lang.front.teacher_grade') }} <span class="required"> * </span><small style="color: red;">{{ trans('lang.front.min_grade') }}</small></label>
                            </div>
                            @foreach ($grades as $key => $grade)
                                <div class="col-md-2 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('grades[]', $grade, false, ['id' => $key + 1]) }}
                                    <label for="{{ $key + 1 }}"><span></span>{{ $grade }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('lang.subjects') }} <span class="required">*</span></label>
                            </div>
                            @foreach ($subjects as $subject)
                                <div class="col-md-2 col-xs-6 col-sm-6">
                                    {{ Form::checkbox('subjects[]', $subject->name, false, ['id' => 'sub_'.$subject->id]) }}
                                    <label for="{{ 'sub_'.$subject->id }}"><span></span>{{ $subject->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('lang.days') }} <span class="required">*</span></label>
                            </div>
                            @foreach ($days as $key => $day)
                                <div class="col-md-2 col-xs-4 col-sm-4">
                                    {{ Form::checkbox('days[]', $day->name, false, ['id' => 'day_'.$day->id]) }}
                                    <label for="{{ 'day_'.$day->id }}"><span></span>{{ $day->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('lang.salary') }}<br />
                                <small style="color: red;">1 buổi của Giáo viên là: 90 phút, 1 buổi Sinh Viên là: 120 phút</small>
                                </label>
                                {!! Form::text('salary', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ trans('lang.front.achievement') }}</label>
                                {!! Form::textarea('partner_note', null, ['size' => '30x2', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::checkbox('term', null, false, ['id' => 'term']) }}
                                <label for="term"><span></span>{{ trans('lang.term_1') }} <a href="#">{{ trans('lang.term_2') }}</a> {{ trans('lang.term_3') }}</label>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-2 col-xs-6 col-sm-6">
                                {!! Form::submit(trans('lang.signup'), ['class' => 'btn btn_sign']) !!}
                            </div>
                            <div class="col-md-2 col-xs-6 col-sm-6">
                                {!! Form::reset('Nhập lại', ['class' => 'btn btn_reset']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
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
            $('#birthday').datetimepicker({
                format: 'DD-MM-Y',
            });

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

            $(document).on('change', 'select#city_id', function(e) {
                e.preventDefault();
                var e = document.getElementById("city_id");
                var city_id = e.options[e.selectedIndex].value;
                if (city_id == 1) {
                    $('#hn').removeClass('hidden');
                    $('#district_lable').removeClass('hidden');
                    $('#hcm').addClass('hidden');
                    $('#hp').addClass('hidden');
                    $('#dn').addClass('hidden');
                    $('#ct').addClass('hidden');
                } else if (city_id == 2) {
                    $('#hcm').removeClass('hidden');
                    $('#district_lable').removeClass('hidden');
                    $('#hn').addClass('hidden');
                    $('#hp').addClass('hidden');
                    $('#dn').addClass('hidden');
                    $('#ct').addClass('hidden');
                } else if (city_id == 3) {
                    $('#hp').removeClass('hidden');
                    $('#district_lable').removeClass('hidden');
                    $('#hn').addClass('hidden');
                    $('#hcm').addClass('hidden');
                    $('#dn').addClass('hidden');
                    $('#ct').addClass('hidden');
                } else if (city_id == 4) {
                    $('#dn').removeClass('hidden');
                    $('#district_lable').removeClass('hidden');
                    $('#hn').addClass('hidden');
                    $('#hcm').addClass('hidden');
                    $('#hp').addClass('hidden');
                    $('#ct').addClass('hidden');
                } else if (city_id == 5) {
                    $('#ct').removeClass('hidden');
                    $('#district_lable').removeClass('hidden');
                    $('#hn').addClass('hidden');
                    $('#hcm').addClass('hidden');
                    $('#hp').addClass('hidden');
                    $('#dn').addClass('hidden');
                } else {
                    $('#district_lable').addClass('hidden');
                    $('#ct').addClass('hidden');
                    $('#hn').addClass('hidden');
                    $('#hcm').addClass('hidden');
                    $('#hp').addClass('hidden');
                    $('#dn').addClass('hidden');
                }
            });
            var e = document.getElementById("city_id");
            var city_id = e.options[e.selectedIndex].value;
            if (city_id == 1) {
                $('#hn').removeClass('hidden');
                $('#district_lable').removeClass('hidden');
                $('#hcm').addClass('hidden');
                $('#hp').addClass('hidden');
                $('#dn').addClass('hidden');
                $('#ct').addClass('hidden');
            } else if (city_id == 2) {
                $('#hcm').removeClass('hidden');
                $('#district_lable').removeClass('hidden');
                $('#hn').addClass('hidden');
                $('#hp').addClass('hidden');
                $('#dn').addClass('hidden');
                $('#ct').addClass('hidden');
            } else if (city_id == 3) {
                $('#hp').removeClass('hidden');
                $('#district_lable').removeClass('hidden');
                $('#hn').addClass('hidden');
                $('#hcm').addClass('hidden');
                $('#dn').addClass('hidden');
                $('#ct').addClass('hidden');
            } else if (city_id == 4) {
                $('#dn').removeClass('hidden');
                $('#district_lable').removeClass('hidden');
                $('#hn').addClass('hidden');
                $('#hcm').addClass('hidden');
                $('#hp').addClass('hidden');
                $('#ct').addClass('hidden');
            } else if (city_id == 5) {
                $('#ct').removeClass('hidden');
                $('#district_lable').removeClass('hidden');
                $('#hn').addClass('hidden');
                $('#hcm').addClass('hidden');
                $('#hp').addClass('hidden');
                $('#dn').addClass('hidden');
            } else {
                $('#district_lable').addClass('hidden');
                $('#ct').addClass('hidden');
                $('#hn').addClass('hidden');
                $('#hcm').addClass('hidden');
                $('#hp').addClass('hidden');
                $('#dn').addClass('hidden');
            }
        });
    </script>
@endsection