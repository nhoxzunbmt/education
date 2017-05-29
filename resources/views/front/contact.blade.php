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

                        @include('front.layouts.message')

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
                                            <label>Nội dung <span class="required">*</span></label>
                                            {!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                {!! Form::submit('Gửi cho chúng tôi', ['class' => 'btn btn_sign']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                @include('front.layouts.right_v2')
            </div>
        </div>
    </div>

    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3724.2769216342144!2d105.77032977322636!3d21.021602892966836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d21.0215599!2d105.77187149999999!4m3!3m2!1d21.0215529!2d105.77185639999999!5e0!3m2!1svi!2s!4v1496026463329" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection

@section('scripts')
    <script>
        $(function () {
            $('#subsc').on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('#subscribes'),
                    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                    email = form.find($('input')).val(),
                    mess = validate(email);


                $.ajax({
                    url : "/subscribe",
                    type : "post",
                    dataType: "json",
                    cache: false,
                    data : {
                        '_token': CSRF_TOKEN,
                        email: email
                    },
                    success : function(response) {
                        console.log(response);
                    },
                    error : function() {
                        if (mess) {
                            $("#message").text('Đăng ký nhận tin tức thành công, xin cảm ơn');
                            $("#message").css("color", "green");
                        } else {
                            $("#message").text('Email không đúng hoặc bạn chưa nhập!');
                            $("#message").css("color", "red");
                        }
                    }
                });
            });

            function validate(email)
            {
                var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return regex.test(email);
            }
        });
    </script>
@endsection
