@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 custom_right">
                    <div class="post_left_section">
                        <div class="post single_post" style="border-bottom: none;">
                            <h1 class="font-w required text-center">Gia sư trí tuệ nhận dạy kèm tại nhà</h1>
                            <div class="post_desc">
                                <p class="font-w font-18 text-center text-u active">
                                    Nhận dạy kèm từ lớp 1 đến lớp 12 và LT Đại Học
                                </p>

                                <p class="font-w font-18 text-center text-u active">
                                    Nhận dậy kèm trên tất cả các nơi ở địa bàn Hà nội và HCM
                                </p>

                                <p class="font-w font-26 text-center text-u required p-t-b">
                                    Không ngại đường xa
                                </p>

                                <p class="font-w font-18 text-center text-u active">
                                    Các môn: toán ,lý, hóa, sinh, văn, ngoại ngữ, tin học, đàn, nhạc, vẽ, luyện thi đại học . . . 
                                </p>

                                <p class="font-w font-18 text-center text-u active">
                                    Quý phụ huynh học sinh có nhu cầu xin liên hệ. 
                                </p>

                                <p class="font-w font-18 text-center text-u required p-t-b">
                                    Điện thoại để tư vấn - đăng ký gia sư trực tiếp. 
                                </p>
                                <p class="text-center font-26 font-w required">01674.537.055</p>

                                <p class="font-18">Xin chân thành cảm ơn đến tất cả Quý Phụ Huynh Học Sinh đã tín nhiệm trung tâm gia sư chúng tôi trong suốt thời gian qua.</p>

                                <p class="font-w font-18 text-center text-u required p-t-b">Tất cả vì học sinh thân yêu</p>
                                <p class="font-w font-18 text-center text-u active">Hãy để cho chúng tôi thắp sáng ước mơ của các em bằng con đường "giáo dục"</p>
                                <p class="font-18 font-w text-center">Kinh chúc quý phụ huynh và các em học sinh sức khỏe và thành đạt.</p>
                                <hr />
                                <h2 class="text-center font-w text-u required p-t-b">Bảng học phí tham khảo</h2>
                                <p class="p-t-b font-18">- <font class="required">Trung tâm gia sư trí tuệ</font> đưa ra bảng học phí 1 buổi dạy của gia sư cho quý phụ huynh và các bạn gia sư tham khảo <font class="required">(một buổi dạy 2h với sinh viên và 1h30' đối với giáo viên)</font>. </p>
                                <p class="font-18">- Mức học phí áp dụng với 1 học sinh, nếu học nhóm hay có yêu cầu khác vui lòng liên hệ trung tâm.</p>
                                
                                <table class="table table-bordered m-t-10">
                                    <tbody>
                                        <tr>
                                            <td class="col-sm-4 text-b-v font-18" rowspan="2">Khối lớp</td>
                                            <td class="col-sm-8 text-b-v font-18" colspan="4">Học phí/buổi</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-b-v font-18">Sinh viên</td>
                                            <td colspan="2" class="text-b-v font-18">Giáo viên</td>
                                        </tr>

                                        <tr>
                                            <td class="text-b-v font-18">Lớp lá, 1, 2, 3, 4</td>
                                            <td colspan="2" class="text-center font-18">120.000 - 140.000 đ</td>
                                            <td colspan="2" class="text-center font-18">150.000 - 180.000 đ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-b-v font-18">Lớp 5, 6, 7, 8</td>
                                            <td colspan="2" class="text-center font-18">140.000 - 160.000 đ</td>
                                            <td colspan="2" class="text-center font-18">180.000 - 200.000 đ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-b-v font-18">Lớp 9, 10, 11, 12</td>
                                            <td colspan="2" class="text-center font-18">180.000 - 200.000 đ</td>
                                            <td colspan="2" class="text-center font-18">220.000 - 250.000 đ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-b-v font-18">Ltđh - ngoại ngữ</td>
                                            <td colspan="2" class="text-center font-18">220.000 - 250.000 đ</td>
                                            <td colspan="2" class="text-center font-18">280.000 - 300.000 đ</td>
                                        </tr>
                                    </tbody>
                                </table>
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
