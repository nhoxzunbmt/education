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
            <h3>Danh sách gia sư hiện có</h3><hr>
            <div class="row">
                    <div class="col-md-6">
                        <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="https://www2.mmu.ac.uk/media/mmuacuk/style-assets/images/r-research/profile-Zeyad.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">John Marvel</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div>



                        <div class="strip-courses">
                            <div class="title-course">
                                <p><i class="icon-book"></i>Lớp đang cần gia sư</p>
                                <ul>
                                    <li><i class="icon-bookmark"></i> MS: </li>
                                </ul>
                            </div>
                            <div class="description">
                                <div >
                                    <img src="{{ url('/avatars/avatar_1491120260.jpg') }}" width="100" height="120">
                                    <span><strong>Lớp dạy: </strong>s</span>
                                    <span><strong>Lớp dạy: </strong>s</span>
                                    <p><strong>Môn dạy: </strong>s</p>
                                    <p><strong>Địa chỉ: </strong>s</p>
                                </div>
                                    
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
            </div>
        </div>
    </section>
@endsection

@section('scritps')
    <script type="text/javascript">
       $().ready( function()
        {
            $('[rel="tooltip"]').tooltip();
        });

        function rotateCard(btn)
        {
            var $card = $(btn).closest('.card-container');
            console.log($card);
            if($card.hasClass('hover')){
                $card.removeClass('hover');
            } else {
                $card.addClass('hover');
            }
        }
    </script>
@endsection
