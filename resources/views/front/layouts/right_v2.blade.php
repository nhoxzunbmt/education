<div class="col-xs-12 col-sm-4 custom_left">
    <div class="sidebar">
        <div class="list_block sidebar_item">
            <h3>Liên hệ</h3>
            <ul class="contact_info">
                <li><i class="fa fa-home"></i> Số 4, Ngõ 225/95/25, Đường Mỹ Đình, Nam Từ Liêm, Hà Nội.</li>
                <li><i class="fa fa-envelope"></i> {{ link_to('mailto:giasutritue2017@gmail.com', 'giasutritue2017@gmail.com') }}</li>
                <li><i class="fa fa-phone"></i> {{ link_to('tel:+841674537055', '(+84)1674.537.055') }}</li>
                <li><i class="fa fa-globe"></i>{{ link_to('/', 'www.giasutritue.com') }}</li>
            </ul>
        </div>
        <div class="list_block">
            <h3>Thời gian mở cửa</h3>
            <ul class="contact_info">
                <li><strong>Thứ 2 -Thứ 6:</strong> 8 giờ - 21 giờ</li>
                <li><strong>Thứ 7 - Chủ nhật:</strong> 10 giờ - 18 giờ</li>
            </ul>
        </div><!--end sidebar item-->
        <div class="list_block">
            <div class="newsletter" id="subscribes">
                <h3>Nhận thông tin mới nhất</h3>
                <span id="message" class="required" style="margin-bottom: 15px;"></span>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a id="subsc" class="btn btn_sign" style="padding: 5px 15px; font-size: 14px;">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
