<section class="col-md-3 col-sm-3">
    <div class="col-left">
        <ul class="submenu-col">
            <li>{{ link_to('#', 'Gia sư tại hà nội', ['id' => 'active']) }}</li>
            @foreach($branch_hn as $hn)
                <li>{{ link_to(url('/grades/'.$hn->slug), $hn->name) }}</li>
            @endforeach
        </ul>
        <ul class="submenu-col">
            <li>{{ link_to('#', 'Gia sư tại tp. hồ chí minh', ['id' => 'active']) }}</li>
            @foreach($branch_hcm as $hcm)
                <li>{{ link_to(url('/grades/'.$hcm->slug), $hcm->name) }}</li>
            @endforeach
        </ul><hr>
    </div>
    <p><img src="images/banner.jpg" alt="Banner" class="img-rounded img-responsive"></p>
</section>
