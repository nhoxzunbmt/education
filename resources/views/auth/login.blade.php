@extends('front.layouts.app')

@section('content')
    <section class="col-md-6 col-sm-6">
        <div class="col-right">
            <h3>{{ trans('lang.login') }}</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    @include('partials.message')
                </div>
            </div>
            {!! Form::open(['action' => ['Auth\LoginController@login'], 'method' =>  'POST']) !!}
                <div class="row">
                    <div class="col-md-6{{ $errors->has('log') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.emmail_or_phone') }}<span class="required"></span></label>
                        {!! Form::text('log', null, ['class' => 'form-control ie7-margin']) !!}
                    </div>
                    <div class="col-md-6">
                        <label>{{ trans('lang.password') }}<span class="required"></span></label>
                        {!! Form::password('password', ['class' => 'form-control ie7-margin']) !!}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12{{ $errors->has('captcha') ? ' has-error' : '' }}">
                        <label>{{ trans('lang.captcha') }} <span class="required">*</span></label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('captcha', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! $captcha !!}
                    </div>
                    <div class="col-md-4" style="padding-top: 7px;">
                        {{ Form::checkbox('remember', null, old('remember') ? 'checked' : '', ['id' => 'remember']) }}
                        <label for="remember"><span></span>{{ trans('lang.remember') }}</label>
                    </div>
                    <div class="col-md-3">
                        {!! Form::submit(trans('lang.login'), ['class' => 'button_medium pull-right']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
