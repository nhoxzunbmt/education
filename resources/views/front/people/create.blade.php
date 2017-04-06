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
        <div class="col-right">
            <h3>{{ trans('lang.front.people') }}</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    @include('partials.message')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <small style="color: red;">{{ trans('lang.note_vaid') }}</small>
                </div>
            </div>
            {!! Form::open(['action' => ['Front\PeopleController@store'], 'method' =>  'POST']) !!}
                <div class="row">
                    <div class="col-md-6{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.name') }}<span class="required"> *</span></label>
                        {!! Form::text('name', null, ['class' => 'form-control ie7-margin']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('lang.email') }}<span class="required"></span></label>
                        {!! Form::email('email', null, ['class' => 'form-control ie7-margin']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.mobile') }} <span class="required"> *</span></label>
                        {!! Form::text('mobile', null, ['class' => 'form-control ie7-margin']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('lang.phone') }} <span class="required"></span></label>
                        {!! Form::text('phone', null, ['class' => 'form-control ie7-margin']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6{{ $errors->has('city') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.city') }} <span class="required"> *</span></label>
                        {!! Form::select('city', $lists, null, ['class' => 'form-control','placeholder' => trans('lang.city'), 'id' => 'city_id']) !!}
                    </div>
                    <div class="col-md-6{{ $errors->has('city_id') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.district') }} <span class="required">*</span></label>
                        {!! Form::select('city_id', [], null, ['class' => 'form-control ie7-margin', 'placeholder' => 'Quận/Huyện', 'id' => 'district_id']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.address') }} <span class="required">*</span></label>
                        {!! Form::textarea('address', null, ['size' => '30x2', 'class' => 'form-control']) !!}
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
                        <label>{{ trans('lang.grade') }} <span class="required"> * </span><small style="color: red;">{{ trans('lang.front.min_grade') }}</small></label>
                    </div>
                    @foreach ($grades as $key => $grade)
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-2">
                            {{ Form::checkbox('days[]', $day->name, false, ['id' => 'day_'.$day->id]) }}
                            <label for="{{ 'day_'.$day->id }}"><span></span>{{ $day->name }}</label>
                        </div>
                    @endforeach
                </div><br/>

                <div class="row">
                    <div class="col-md-12">
                        <label>{{ trans('lang.salary') }}<small style="color: red;"> (1 buổi của Giáo viên là: 90 phút, 1 buổi Sinh Viên là: 120 phút)</small>
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
                    <div class="col-md-12{{ $errors->has('captcha') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.captcha') }} <span class="required">*</span></label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('captcha', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! $captcha !!}
                    </div>
                    <div class="col-md-8">
                        {{ Form::checkbox('term', null, false, ['id' => 'term']) }}
                        <label for="term" style="padding-top: 6px;padding-left: 10px;"><span></span>{{ trans('lang.term_1') }} <a href="#">{{ trans('lang.term_2') }}</a> {{ trans('lang.term_3') }}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        {!! Form::submit(trans('lang.signup'), ['class' => 'button_medium']) !!}
                    </div>
                    <div class="col-md-2">
                        {!! Form::reset('Nhập lại', ['class' => 'button_medium bg-red']) !!}
                    </div>
                    <div class="col-md-8"></div>
                </div>
            {!! Form::close() !!}
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
