@extends('front.layouts.app')

@section('slider')
    @include('front.layouts.slider')
@endsection

@section('plan')
    @include('front.layouts.plan')
@endsection

@section('content')
    <section class="col-md-6 col-sm-6">
        <div class="col-right p-10">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="color_1">Bảng giá gia sư tham khảo</h4>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td class="col-sm-4 text-vertical text-center text-bold" rowspan="2">KHỐI LỚP</td>
                                <td class="col-sm-8 text-center text-bold" colspan="4">Học phí/buổi</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="text-bold text-center">Sinh viên</td>
                                <td colspan="2" class="text-bold text-center">Giáo viên</td>
                            </tr>

                            <tr>
                                <td>LỚP Lá, 1, 2, 3, 4</td>
                                <td colspan="2" class="text-center">120.000 - 140.000 đ</td>
                                <td colspan="2" class="text-center">150.000 - 180.000 đ</td>
                            </tr>

                            <tr>
                                <td>LỚP 5, 6, 7, 8</td>
                                <td colspan="2" class="text-center">140.000 - 160.000 đ</td>
                                <td colspan="2" class="text-center">180.000 - 200.000 đ</td>
                            </tr>

                            <tr>
                                <td>LỚP 9, 10, 11, 12</td>
                                <td colspan="2" class="text-center">180.000 - 200.000 đ</td>
                                <td colspan="2" class="text-center">220.000 - 250.000 đ</td>
                            </tr>

                            <tr>
                                <td>LTĐH-NGOẠI NGỮ</td>
                                <td colspan="2" class="text-center">220.000 - 250.000 đ</td>
                                <td colspan="2" class="text-center">280.000 - 300.000 đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <h4 class="color_1">Danh sách lớp mới cần gia sư</h4>
                <div class="col-md-6">
                    <div class="strip-courses">
                        <div class="title-course">
                            <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                            <ul>
                                <li><i class="icon-bookmark"></i> MS: 98768</li>
                            </ul>
                        </div>
                        <div class="description">
                                <p><strong>Lớp dạy: </strong>Lớp 2.</p>
                                <p><strong>Môn dạy: </strong>Toán. Tiếng việt.</p>
                                <p><strong>Địa chỉ: </strong>Nguyễn Đình Chiểu - P3  Q.Phú Nhuận - Hồ Chí Minh</p>
                                <p><strong>Mức lương: </strong>1,500,000 đồng/tháng</p>
                                <p><strong>Số buổi: </strong>3 buổi</p>
                                <p><strong>Thời gian: </strong>Dạy 120 phút/buổi các tối từ 17h-21h</p>
                                <p><strong>Yêu cầu: </strong>Nữ Cử Nhân kinh nghiệm</p>
                                <p><strong>Liên hệ: </strong><i class="icon-phone"></i> 0974 502 420</p>
                                <ul>
                                    <li><a href="#" class="button_red_small bg-envelope"><i class="icon-envelope"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                </ul>
                                {{ link_to('#', trans('lang.signup'), ['class' => 'button_red_small btn-02 p-5']) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="strip-courses">
                        <div class="title-course">
                            <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                            <ul>
                                <li><i class="icon-bookmark"></i> MS: 98768</li>
                            </ul>
                        </div>
                        <div class="description">
                                <p><strong>Lớp dạy: </strong>Lớp 2.</p>
                                <p><strong>Môn dạy: </strong>Toán. Tiếng việt.</p>
                                <p><strong>Địa chỉ: </strong>Nguyễn Đình Chiểu - P3  Q.Phú Nhuận - Hồ Chí Minh</p>
                                <p><strong>Mức lương: </strong>1,500,000 đồng/tháng</p>
                                <p><strong>Số buổi: </strong>3 buổi</p>
                                <p><strong>Thời gian: </strong>Dạy 120 phút/buổi các tối từ 17h-21h</p>
                                <p><strong>Yêu cầu: </strong>Nữ Cử Nhân kinh nghiệm</p>
                                <p><strong>Liên hệ: </strong>0974 502 420</p>
                                <ul>
                                    <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                </ul>
                                {{ link_to('#', trans('lang.signup'), ['class' => 'button_red_small btn-02 p-5']) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="strip-courses">
                        <div class="title-course">
                            <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                            <ul>
                                <li><i class="icon-bookmark"></i> MS: 98768</li>
                            </ul>
                        </div>
                        <div class="description">
                                <p><strong>Lớp dạy: </strong>Lớp 2.</p>
                                <p><strong>Môn dạy: </strong>Toán. Tiếng việt.</p>
                                <p><strong>Địa chỉ: </strong>Nguyễn Đình Chiểu - P3  Q.Phú Nhuận - Hồ Chí Minh</p>
                                <p><strong>Mức lương: </strong>1,500,000 đồng/tháng</p>
                                <p><strong>Số buổi: </strong>3 buổi</p>
                                <p><strong>Thời gian: </strong>Dạy 120 phút/buổi các tối từ 17h-21h</p>
                                <p><strong>Yêu cầu: </strong>Nữ Cử Nhân kinh nghiệm</p>
                                <p><strong>Liên hệ: </strong>0974 502 420</p>
                                <ul>
                                    <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                </ul>
                                {{ link_to('#', trans('lang.signup'), ['class' => 'button_red_small btn-02 p-5']) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="strip-courses">
                        <div class="title-course">
                            <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                            <ul>
                                <li><i class="icon-bookmark"></i> MS: 98768</li>
                            </ul>
                        </div>
                        <div class="description">
                                <p><strong>Lớp dạy: </strong>Lớp 2.</p>
                                <p><strong>Môn dạy: </strong>Toán. Tiếng việt.</p>
                                <p><strong>Địa chỉ: </strong>Nguyễn Đình Chiểu - P3  Q.Phú Nhuận - Hồ Chí Minh</p>
                                <p><strong>Mức lương: </strong>1,500,000 đồng/tháng</p>
                                <p><strong>Số buổi: </strong>3 buổi</p>
                                <p><strong>Thời gian: </strong>Dạy 120 phút/buổi các tối từ 17h-21h</p>
                                <p><strong>Yêu cầu: </strong>Nữ Cử Nhân kinh nghiệm</p>
                                <p><strong>Liên hệ: </strong>0974 502 420</p>
                                <ul>
                                    <li><a href="#" class="button_red_small bg-fb"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-tw"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#" class="button_red_small bg-gg"><i class="icon-google-plus"></i></a></li>
                                </ul>
                                {{ link_to('#', trans('lang.signup'), ['class' => 'button_red_small btn-02 p-5']) }}
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center">{{ link_to(url('/danh-sach-lop'), 'Xem thêm', ['class' => 'button_large']) }}</p>
        </div>
    </section>
@endsection
