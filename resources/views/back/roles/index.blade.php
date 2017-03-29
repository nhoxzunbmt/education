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
                    {{ link_to('backend/roles/create', 'create', ['class' => 'btn  btn-raised bg-teal waves-effect']) }}
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
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
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->slug }}</td>
                                    <td>{{ format_date($role->created_at) }}</td>
                                    <td>{{ format_date($role->updated_at) }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <button type="button" class="btn btn-xs bg-cyan dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Show <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">view</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">edit</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">delete</a></li>
                                                
                                            </ul>
                                        </div>
                                    </td>
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
