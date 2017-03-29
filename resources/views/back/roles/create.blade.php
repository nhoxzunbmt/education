@extends('back.layouts.app')

@section('title')
    {{ trans('lang.back.create') }}
@endsection

@section('content')
    <div class="block-header">
        <h2>{{ trans('lang.back.role') }}</h2>
        <ol class="breadcrumb breadcrumb-col-orange" style="padding-left: 0px;">
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i>{{ trans('lang.back.dashboard') }}</a></li>
            <li class="active">{{ trans('lang.back.create') }}</li>
        </ol>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card" style="padding: 0px;">
                <div class="header">
                    <h2> {{ trans('lang.back.create') }} </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="datepicker form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="form-group drop-custum">
                                <select class="form-control show-tick">
                                    <option value="">-- Gender --</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Speciality">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Website URL">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                            <button type="submit" class="btn btn-raised">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
