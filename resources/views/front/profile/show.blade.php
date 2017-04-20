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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">{{ $user->name }}</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Tôi là:</td>
                                            <td>{{ is_profile($user->role_id) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày tham gia:</td>
                                            <td>{{ format_date($user->created_at) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sinh nhật:</td>
                                            <td>{{ format_date($user->birthday) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính:</td>
                                            <td>{{ gender($user->gender) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ: </td>
                                            <td>{{ $user->address.', '.$user->partners[0]->city->name.', '.$city->city($user->partners[0]->city->parent_id).'.' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <a href="mailto:{{ config('app.email') }}">
                                                    {{ $user->email }}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại:</td>
                                            <td>
                                                {{ $user->mobile }} (Di động)
                                                <br>{{ $user->phone }} (Máy bàn)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @if ($user->role_id == 4)
                                    <p class="text-center">
                                        <a href="#" class="btn btn-primary">D</a>
                                        {{ link_to(url('danh-sach-lop'), 'Danh sách lớp', ['class' => 'btn btn-primary']) }}
                                    </p>
                                @else
                                    <p class="text-center">
                                        <a href="#" class="btn btn-primary">D</a>
                                        {{ link_to(url('danh-sach-gia-su'), 'Danh sách gia sư', ['class' => 'btn btn-primary']) }}
                                    </p>
                                @endif
                                
                            </div>
                          </div>
                        </div>
                             <div class="panel-footer">
                                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                <span class="pull-right">
                                    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                </span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
