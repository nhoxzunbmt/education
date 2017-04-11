<aside class="col-md-3 col-sm-3">
    <div class="col-left">
        <ul class="submenu-col">
            <li><a href="javascript:void(0)" id="active">{{ trans('lang.menu.ph') }}</a></li>
            <li>{{ link_to(url('/dang-ky-tim-gia-su'), trans('lang.menu.ph_dk')) }}</li>
            <li>{{ link_to(url('/phu-huynh-can-biet'), trans('lang.menu.ph_what')) }}</li>
            <li>{{ link_to(url('/phu-huynh-luu-y'), trans('lang.menu.ph_note')) }}</li>
            <li>{{ link_to(url('/hoc-phi-gia-su'), trans('lang.menu.hocphi')) }}</li>
            <li>{{ link_to(url('/dich-vu-gia-su'), trans('lang.menu.dichvu')) }}</li>
        </ul>
        <ul class="submenu-col">
            <li><a href="javascript:void(0)" id="active">{{ trans('lang.menu.gs') }}</a></li>
            <li>{{ link_to(url('/dang-ky-gia-su'), trans('lang.menu.gs_dk')) }}</li>
            <li>{{ link_to(url('/gia-su-nhan-lop'), trans('lang.menu.quytrinh')) }}</li>
            <li>{{ link_to(url('/phi-gia-su'), trans('lang.menu.phi')) }}</li>
            <li>{{ link_to(url('/gia-su-can-biet'), trans('lang.menu.gs_what')) }}</li>
        </ul>
        <div style="padding: 5px 10px;">
            <h5>Upcoming Courses</h5>
            <p>Suspendisse quis risus turpis, ut pharetra arcu. Donec adipiscing, quam non faucibus luctus, mi arcu blandit diam, at faucibus mi ante vel augue.</p>
            <p><a href="#" class=" button_red_small">View Courses</a></p>
        </div>
    </div>
    <p><img src="images/banner.jpg" alt="Banner" class="img-rounded img-responsive"></p>
</aside>
