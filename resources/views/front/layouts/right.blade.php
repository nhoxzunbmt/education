<div class="col-xs-12 col-sm-3 col-lg-2 courses_left hidden-xs">
    <div class="courses_left_inner">
        <h3>GS tại hà nội</h3>
        <ul>
            @foreach($branch_hn as $hn)
                <li class="{!! set_active(['i/'.$hn->slug]) !!}">
                    {{ link_to(url('i/'.$hn->slug), $hn->name) }}
                </li>
            @endforeach
        </ul>
        <h3>GS tại hồ chí minh</h3>
        <ul>
            @foreach($branch_hcm as $hcm)
                <li class="{!! set_active(['i/'.$hcm->slug]) !!}">
                    {{ link_to(url('i/'.$hcm->slug), $hcm->name) }}
                </li>
            @endforeach
        </ul>
    </div>
</div>