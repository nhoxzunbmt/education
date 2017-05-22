@extends('front.layouts.app')

@section('content')
    <div class="custom_content custom">
            <div class="container large">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 custom_right">
                        <div class="single_content_left">
                            <h3>Liên hệ với chúng tôi</h3>
                            <p>- Sãn sàng giải đáp mọi khúc mắc của bạn trong việc tìm gia sư như học phí, thời gian học tâp, lựa chon giáo viên hay sinh viên...Thời gian 8h sáng - 10h tối</p>
                            <p>- Hoặc để lại lời nhắn bằng cách nhập vào nội dung bên dưới, chúng tôi sẽ gọi lại cho bạn trong vòng 8h làm việc.</p>

                            <div class="contact_form">
                                {!! Form::open(['action' => ['ContactController@store'], 'method' =>  'POST']) !!}
                                    <div class="row">
                                        <div class="col-md-7 col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Họ và tên <span class="required"> *</span></label>
                                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="form-group">
                                                <label>Email <span class="required"> *</span></label>
                                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7 col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Số điện thoại <span class="required"> *</span></label>
                                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 col-xs-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Message <span class="required">*</span></label>
                                                {!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    {!! Form::submit('Gửi cho chúng tôi', ['class' => 'btn btn_sign']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 custom_left">
                        <div class="sidebar">
                            <div class="list_block sidebar_item">
                                <h3>Liên hệ</h3>
                                <ul class="contact_info">
                                    <li><i class="fa fa-home"></i> Lorem ipsum dolor sit amet, consectetur</li>
                                    <li><i class="fa fa-envelope"></i> {{ link_to('mailto:giasutritue@gmail.com', 'giasutritue@gmail.com') }}</li>
                                    <li><i class="fa fa-phone"></i> {{ link_to('tel:+841674537055', '(+84)1674.537.055') }}</li>
                                    <li><i class="fa fa-globe"></i>{{ link_to('/', 'http://www.giasutritue.com') }}</li>
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
                                <div class="newsletter">
                                    <h3>Nhận thông tin mới nhất</h3>
                                    <form method="post" action="#">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                  <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-default btn-block commonBtn" type="submit">Đăng ký</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end sidebar-->
                    </div>
                </div><!--end row-->
            </div>
        </div><!--end custom content-->

        <div class="contact_map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6996633.738164338!2d-104.57070294113542!3d31.10069597439005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C+USA!5e0!3m2!1sen!2sbd!4v1460121293489" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection
