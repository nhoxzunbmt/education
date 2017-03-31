@extends('back.layouts.app')

@section('title')
    {{ trans('lang.back.role') }}
@endsection

@section('content')
    <div class="block-header">
        <h2>{{ trans('lang.back.role') }}</h2>
        <ol class="breadcrumb breadcrumb-col-orange" style="padding-left: 0px;">
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i>{{ trans('lang.back.dashboard') }}</a></li>
            <li class="active">{{ trans('lang.back.role') }}</li>
        </ol>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card" style="padding: 0px;">
                <div class="header">
                    <h2> {{ trans('lang.back.role') }} </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="col-md-1">{{ trans('lang.back.id') }}</th>
                                <th class="col-md-3">{{ trans('lang.back.roles.name') }}</th>
                                <th class="col-md-1">{{ trans('lang.back.roles.slug') }}</th>
                                <th class="col-md-2">{{ trans('lang.back.created_at') }}</th>
                                <th class="col-md-2">{{ trans('lang.back.updated_at') }}</th>
                                <th class="col-md-1">{{ trans('lang.back.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $key => $role)
                                <tr>
                                    <td class="text-right">{{ $key + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->slug }}</td>
                                    <td>{{ format_date($role->created_at) }}</td>
                                    <td>{{ format_date($role->updated_at) }}</td>
                                    <td>#</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">{{ trans('lang.on_result') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
