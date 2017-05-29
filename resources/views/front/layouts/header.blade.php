<header class="header-wrapper header-v2">
    <div class="topbar clearfix">
        <div class="container">
            <ul class="topbar-left">
                <li class="phoneNo"><i class="fa fa-phone"></i>{{ link_to('tel:+841674537055', '01674.537.055') }}</li>
                <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>{{ link_to('mailto:giasutritue2017@gmail.com', 'giasutritue2017@gmail.com') }}
                </li>
            </ul>
            <ul class="topbar-right">
                <li class="LanguageList"><i class="fa fa-globe" aria-hidden="true"></i>
                    <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Vietnamese</option>
                        <option value="1">English</option>
                    </select>
                </li>
                @if(!auth()->check())
                    <li>
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <a href='#loginModal' data-toggle="modal" >Login</a>
                    </li>
                @else
                    <li>{{ auth()->user()->name }}</li>
                @endif
            </ul>
        </div>
    </div>

    <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                    <span class="sr-only">&nbsp;</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand logo clearfix" href="{{ url('/') }}">
                                    <img src="{{ url('/') }}/img/logo.png" alt="" class="img-responsive" />
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown {!! set_active(['danh-sach-lop', 'danh-sach-gia-su']) !!}">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh sách</a>
                                        <ul class="dropdown-menu">
                                            <li class="{!! set_active(['danh-sach-lop']) !!}">{{ link_to('danh-sach-lop', 'Lớp chưa giao') }}</li>
                                            <li class="{!! set_active(['danh-sach-gia-su']) !!}">{{ link_to('danh-sach-gia-su', 'Gia sư hiện có') }}</li>
                                        </ul>
                                    </li>

                                    <li class="dropdown {!! set_active(['dang-ky-tim-gia-su', 'phu-huynh-can-biet', 'hoc-phi-gia-su']) !!}">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phụ huynh</a>
                                        <ul class="dropdown-menu">
                                            <li class="{!! set_active(['dang-ky-tim-gia-su']) !!}">{{ link_to('dang-ky-tim-gia-su', 'Đăng ký tìm gia sư') }}</li>
                                            <li class="{!! set_active(['phu-huynh-can-biet']) !!}">{{ link_to('phu-huynh-can-biet', 'Phụ huynh cần biết') }}</li>
                                            <li class="{!! set_active(['hoc-phi-gia-su']) !!}">{{ link_to('hoc-phi-gia-su', 'Học phí gia sư') }}</li>
                                        </ul>
                                    </li>

                                    <li class="dropdown {!! set_active(['dang-ky-lam-gia-su', 'gia-su-can-biet', 'thanh-toan']) !!}">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gia sư</a>
                                        <ul class="dropdown-menu">
                                            <li class="{!! set_active(['dang-ky-lam-gia-su']) !!}">{{ link_to('dang-ky-lam-gia-su', 'Đăng ký gia sư') }}</li>
                                            <li class="{!! set_active(['gia-su-can-biet']) !!}">{{ link_to('gia-su-can-biet', 'Gia sư cần biết') }}</li>
                                            <li class="{!! set_active(['thanh-toan']) !!}">{{ link_to('thanh-toan', 'Hướng dẫn thanh toán') }}</li>
                                        </ul>
                                    </li>
                                    <li class="{!! set_active(['lien-he']) !!}">{{ link_to('lien-he', 'Liên hệ') }}</li>
                                    <li class="apply_now">{{ link_to('dang-ky-lam-gia-su', 'Đăng ký', ['style' => 'padding: 10px 20px;']) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
