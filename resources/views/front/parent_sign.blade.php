@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="single_content_left">
                        <h1 class="m-b-15">Đăng ký tìm gia sư</h1>

                        @include('front.layouts.message')

                        {!! Form::open(['action' => ['ParentsController@store'], 'method' =>  'POST', 'class' => 'apply_from']) !!}
                            <small class="required">Chú ý: những trường có dấu * là bắt buộc phải nhập.</small>
                            <div class="row">
                                <div class="col-md-3 col-xs-12 col-sm-12{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-12{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label>Số đi động <span class="required">*</span></label>
                                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email</label>
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-3 col-xs-12 col-sm-12{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label>Số máy bàn</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label>Tỉnh/Thành phố <span class="required"> *</span></label>
                                    {!! Form::select('city', $lists, null, ['class' => 'form-control','placeholder' => 'Tỉnh/Thành phố', 'id' => 'city_id']) !!}
                                </div>
                                <div class="col-md-4{{ $errors->has('city_id') ? ' has-error' : '' }}">
                                    <label>Quận/Huyện <span class="required">*</span></label>
                                    {!! Form::select('city_id', [], null, ['class' => 'form-control', 'placeholder' => 'Quận/Huyện', 'id' => 'district_id']) !!}
                                </div>

                                <div class="col-md-4{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.address') }} <small class="required">(Số nhà, ngõ, phố)</small></label>
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3{{ $errors->has('number') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.number') }} <span class="required">*</span></label>
                                    {!! Form::select('number', $numbers, null, ['class' => 'form-control','placeholder' => trans('lang.number')]) !!}
                                </div>

                                <div class="col-md-5{{ $errors->has('number') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.timer') }} <span class="required">*</span></label>
                                    {!! Form::select('time', $times, null, ['class' => 'form-control','placeholder' => trans('lang.p_timer')]) !!}
                                </div>

                                <div class="col-md-4{{ $errors->has('level') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.level') }} <span class="required">*</span></label>
                                    {!! Form::select('level', $levels, null, ['class' => 'form-control','placeholder' => trans('lang.level')]) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ trans('lang.grade') }} <span class="required"> * </span><small class="required">{{ trans('lang.front.min_grade') }}</small></label>
                                </div>
                                @foreach ($grades as $key => $grade)
                                    <div class="col-md-2 col-xs-6 col-sm-6">
                                        {{ Form::checkbox('grades[]', $grade, false, ['id' => $key + 1]) }}
                                        <label for="{{ $key + 1 }}"><span></span>{{ $grade }}</label>
                                    </div>
                                @endforeach
                            </div><br/>

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
                            </div><br/>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ trans('lang.p_days') }} <span class="required">*</span></label>
                                </div>
                                @foreach ($days as $key => $day)
                                    <div class="col-md-2 col-xs-6 col-sm-6">
                                        {{ Form::checkbox('days[]', $day->name, false, ['id' => 'day_'.$day->id]) }}
                                        <label for="{{ 'day_'.$day->id }}"><span></span>{{ $day->name }}</label>
                                    </div>
                                @endforeach
                            </div><br/>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ trans('lang.salary') }}<small class="required"> (1 buổi của Giáo viên là: 90 phút, 1 buổi Sinh Viên là: 120 phút)</small>
                                    </label>
                                    {!! Form::text('salary', null, ['class' => 'form-control ie7-margin']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ trans('lang.front.partner_note') }}</label>
                                    {!! Form::textarea('partner_note', null, ['size' => '30x2', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-xs-6 col-sm-4">
                                    {{ Form::checkbox('term', null, false, ['id' => 'term']) }}
                                    <label for="term" style="padding-top: 6px;padding-left: 10px;"><span></span>{{ trans('lang.term_1') }} <a href="#">{{ trans('lang.term_2') }}</a> {{ trans('lang.term_3') }}</label>
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
