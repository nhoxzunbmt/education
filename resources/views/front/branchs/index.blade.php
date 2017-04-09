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
            <h3>Danh sách các lớp tại <strong class="red">{{ $city->name }}</strong></h3><hr>
            @foreach ($lists->chunk(2) as $a)
            <div class="row">
                @foreach($a as $list)
                    <div class="col-md-6">
                        <div class="strip-courses">
                            <div class="title-course">
                                <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                                <ul>
                                    <li><i class="icon-bookmark"></i> MS: {{ $list->code }}</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>
@endsection
