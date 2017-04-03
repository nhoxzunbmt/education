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
            <h3>Thanh toán</h3><hr>
            <div class="row">
                <div class="col-md-12">
                    <p>Có 2 hình thức bạn có thể thanh toán với chúng tôi</p>
                    <h5 class="color_1">1. Thanh toán chuyển khoản:</h5>
                    <ul class="list_1">
                        <li>Không cung cấp giấy tờ tùy thân và bằng cấp của gia sư khi đi giao nhận lớp cho bên phụ huynh.</li>
                        <li>Không kiểm tra kiến thức của gia sư bằng các bài kiểm tra trực tiếp môn học mà gia sư đó sẽ đi nhận dạy.</li>
                        <li>Không chịu trách nhiệm về kết quả việc học của con em qu‎ý phụ hunh và luôn lấy lý do bào chữa.</li>
                    </ul>
                    <h5 class="color_1">2. Thanh toán trực tiếp:</h5>
                    <ul class="list_1">
                        <li>Phụ huynh đang cần thuê 1 giáo viên thì trung tâm gia sư lừa đảo sẽ giới thiệu 1 sinh viên.</li>
                        <li>Phụ huynh muốn thuê 1 sinh viên học đại học thì có thể giới thiệu 1 sinh viên học cao đẳng hoặc trung cấp.</li>
                        <li>Phụ huynh cần người gia sư dạy tốt thì giới thiệu 1 người chưa có kinh nghiệm dạy.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
