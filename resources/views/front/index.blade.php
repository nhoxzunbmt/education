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
            
            <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="box-style-one borders"><img src="images/teacher.jpg" alt="" class="picture img-responsive"><h5>Lesson one</h5></div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9">
                    <h4>Putant mandamus</h4>
                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media" href="http://www.youtube.com/watch?v=pgk-719mTxM" rel="media-gallery">Play video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
            </div><!-- End Strip course -->
            
             <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="box-style-one borders"><img src="images/teacher-2.jpg" alt="" class="picture img-responsive"><h5>Lesson two</h5></div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9">
                    <h4>Quodsi nominavi</h4>
                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media" href="http://www.youtube.com/watch?v=pgk-719mTxM" rel="media-gallery">Play video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
            </div><!-- End Strip course -->
            
            <div class="strip-lessons">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="box-style-one borders"><img src="images/teacher-3.jpg" alt="" class="picture img-responsive"><h5>Lesson three</h5></div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-9">
                    <h4>Saepe tantas</h4>
                    <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, <strong>mea ea ullum epicurei</strong>. Saepe tantas ocurreret duo ea, has facilisi vulputate an. Pri aeque iuvaret nominati et, ad mea clita numquam. </p>
                    <ul class="data-lessons">
                        <li><i class="icon-time"></i>Duration: 3 hours</li>
                        <li><i class="icon-film"></i><a class="fancybox-media" href="http://www.youtube.com/watch?v=pgk-719mTxM" rel="media-gallery">Play video</a></li>
                        <li><i class="icon-cloud-download"></i><a href="#">Donwload prospect</a></li>
                    </ul>
                </div>
            </div>
            </div>

            <p class="text-center"><a href="contact.html" class="button_large">View all courses </a></p>
        </div>
    </section>
@endsection
