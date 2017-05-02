<header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4" id="logo">
            <a href="{{ url('/') }}">
                <img src="http://www.ansonika.com/edu/img/logo.png">
            </a>
        </div>
        <div class="col-md-8 col-sm-8">
            <div id="phone" class="hidden-xs"><strong>(+84)(0)1674.537.055</strong>dovv1987@gmail.com</div>
        </div>
        </div>
    </div>
</header>

<nav>
<div class="megamenu_container">
<a id="megamenu-button-mobile" href="#">Menu</a>
    <ul class="megamenu">
        <li class="{!! set_active(['danh-sach-lop']) !!}">{{ link_to(url('danh-sach-lop'), trans('lang.new_class'), ['class' => 'nodrop-down']) }}</li>
        <li class="drop-normal {!! set_active(['dang-ky-tim-gia-su', 'phu-huynh-can-biet', 'phu-huynh-luu-y', 'hoc-phi-gia-su', 'dich-vu-gia-su']) !!}">
            <a href="javascript:void(0)" class="drop-down">{{ trans('lang.parents') }}</a>
            <div class="drop-down-container normal">
                <ul>
                    <li>{{ link_to(url('dang-ky-tim-gia-su'), trans('lang.menu.ph_dk'), ['class' => set_active(['dang-ky-tim-gia-su'])]) }}</li>
                    <li>{{ link_to(url('phu-huynh-can-biet'), trans('lang.menu.ph_what') ,['class' => set_active(['phu-huynh-can-biet'])]) }}</li>
                    <li>{{ link_to(url('phu-huynh-luu-y'), trans('lang.menu.ph_note'), ['class' => set_active(['phu-huynh-luu-y'])]) }}</li>
                    <li>{{ link_to(url('hoc-phi-gia-su'), trans('lang.menu.hocphi'), ['class' => set_active(['hoc-phi-gia-su'])]) }}</li>
                    <li>{{ link_to(url('dich-vu-gia-su'), trans('lang.menu.dichvu'), ['class' => set_active(['dich-vu-gia-su'])]) }}</li>
                </ul>
            </div>
        </li>
        
        <li class="drop-normal {!! set_active(['dang-ky-gia-su', 'gia-su-nhan-lop', 'phi-gia-su', 'gia-su-can-biet']) !!}">
            <a href="javascript:void(0)" class="drop-down">{{ trans('lang.teacher') }}</a>
            <div class="drop-down-container normal">
                <ul>
                    <li>{{ link_to(url('dang-ky-gia-su'), trans('lang.menu.gs_dk') , ['class' => set_active(['dang-ky-gia-su'])]) }}</li>
                    <li>{{ link_to(url('gia-su-nhan-lop'), trans('lang.menu.quytrinh') , ['class' => set_active(['gia-su-nhan-lop'])]) }}</li>
                    <li>{{ link_to(url('phi-gia-su'), trans('lang.menu.phi'), ['class' => set_active(['phi-gia-su'])]) }}</li>
                    <li>{{ link_to(url('gia-su-can-biet'), trans('lang.menu.gs_what') , ['class' => set_active(['gia-su-can-biet'])]) }}</li>
                </ul>
            </div>
        </li>
        
        <li class="{!! set_active(['thanh-toan']) !!}">{{ link_to(url('thanh-toan'), trans('lang.payment'), ['class' => 'nodrop-down']) }}</li>
        
        <li class="drop-normal">
            <a href="#" class="nodrop-down">{{ trans('lang.recruit') }}</a>
        </li>

        <li>
            <a href="javascript:void(0)" class="drop-down">{{ trans('lang.contact') }}</a>
            <div class="drop-down-container" style="display: none;">
                <div class="row">
                
                    <div class="col-md-6">
                        <div id="map_1"><iframe style="height:300px; width:100%; border:0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2482.336900888852!2d-0.18850530000000001!3d51.52538029999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10d04b6d1a254faa!2sMaida+Vale+Library!5e0!3m2!1sit!2sit!4v1410245771307"></iframe></div>
                    </div>
                    
                    <div class="col-md-6">
                        <h4>Address</h4>
                        <ul>
                            <li><i class="icon-home"></i> 11 Fifth Ave, Loftus - NEW JERSEY, US</li>
                            <li><i class="icon-phone"></i> Telephone: + 61 (2) 8093 3400</li>
                            <li><i class="icon-phone-sign"></i> Fax: +61 (2) 9542 3599</li>
                            <li><i class="icon-envelope"></i> Email: <a href="#">submissions@domain.com</a></li>
                        </ul>
                        <br>
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Questions?</h5>
                                <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.</p>
                                <p><a href="contact.html" class="button_red_small">Read more</a></p>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Apply now</h5>
                                <p>An utinam reprimique duo, putant mandamus cu qui. Autem possim his cu, quodsi nominavi fabellas ut sit, mea ea ullum epicurei.</p>
                                <p><a href="contact.html" class="button_red_small" title="Contact">Contact us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        @if (!auth()->check())
            <li class="pull-right" style="padding-bottom: 10px;">
                {{ link_to(url('login'), trans('lang.login'), ['class' => 'nodrop-down', 'style' => 'line-height: 0px']) }}
            </li>
        @else
            <li class="drop-normal pull-right" style="padding-bottom: 10px;">
                <a href="javascript:void(0)" class="drop-down" style="line-height: 0px; text-transform: none;">{{ auth()->user()->email }}</a>
                <div class="drop-down-container normal">
                    <ul>
                        <li>{{ link_to(url('profile'), 'Thông tin cá nhân') }}</li>
                        <li>
                            {{ link_to(url('logout'), 'Logout', ['id' => 'logout']) }}
                            {!! Form::open(['url' => 'logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </li>
        @endif
    </ul>
</div>
</nav>
