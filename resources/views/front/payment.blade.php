@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="post_left_section">
                        <div class="post single_post" style="border-bottom: none;">
                            <div class="post_desc">
                                <div class="post_thumb">
                                    <img src="{{ url('/') }}/img/gia-su.jpg" height="260">
                                </div>
                                <h3 class="text-center required p-t-b">NỘI QUY NHẬN LỚP DẠY</h3>
                                <p class="text-c">Giáo viên - sinh viên đến trung tâm nhận lớp cần mang theo các giấy tờ sau:</p>
                                <p class="text-c">- Thẻ giáo viên hoặc thẻ sinh viên</p>
                                <p class="text-c">- Chứng minh nhân dân</p>
                                <p class="text-c">- Các bằng cấp liên quan.</p>

                                <h3 class="text-center required m-b-15">QUY TRÌNH NHẬN LỚP NHƯ SAU:</h3>
                                <p class="text-c m-b-15"><font class="required">1/.</font> Truy cập vào {{ link_to('/', 'www.giasutritue.vn', ['class' => 'text-c required']) }} để chọn lớp dạy phù hợp.</p>
                                <p class="text-c m-b-15"><font class="required">2/.</font> Sau khi xác định được lớp dạy phù hợp, Quý thầy cô và các em Sinh viên phải đóng phí nhận lớp cho trung tâm.</p>
                                <p class="text-c m-b-15"><font class="required">3/.</font> Công ty có trách nhiệm liên lạc, hẹn ngày giờ đến gặp Phụ huynh, công ty xuất giấy giới thiệu và Giáo Viên - Sinh Viên có trách nhiệm trình giấy giới thiệu khi đến gặp Phụ Huynh.</p>
                                <p class="text-c m-b-15"><font class="required">4/.</font> Khi đến nhận lớp, nếu có bất kỳ trở ngại nào (không gặp được Phụ Huynh, thay đổi thời gian học, số lượng học sinh, thay đổi thông tin so với hợp đồng ban đầu...) dẫn đến việc chưa nhận được lớp, Giáo Viên – Sinh Viên phải báo gấp về công ty theo các số điện thoại sau: <font class="required">0913905231 - 0908880299</font> ngay khi rời nhà Phụ Huynh để Công ty kịp thời xác minh và giải quyết.</p>
                                <p class="text-c m-b-15"><font class="required">5/.</font> Công ty sẽ chịu trách nhiệm bảo lãnh trong vòng 30 ngày, nếu có bất cứ sự cố khách quan nào từ phía Phụ huynh học sinh (đã được xác minh) công ty sẽ hoàn lại phí một phần hoặc 100% cho Giáo Viên – Sinh Viên. Thời gian giải quyết sự cố từ 3 đến 7 ngày làm việc. Sau 30 ngày thì công ty sẽ không còn trách nhiệm giải quyết.  Khi đến nhận lại phí Quý thầy cô và các em Sinh Viên cần mang theo giấy giới thiệu để đối chiếu hồ sơ cam kết khi nhận lớp mới được nhận lại phí.</p>
                                <p class="text-c"><font class="required"></font></p>
                            </div>
                        </div>
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
