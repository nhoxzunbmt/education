@extends('front.layouts.app')

@section('content')
    <div class="main-content courses_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <div class="profile-sidebar">
                                <div class="profile-widget">
                                    <div class="top-info" style="background: url(img/home/learn/learn_1.jpg);">
                                        <img src="img/home/learn/learn_1.jpg" alt="" class="img-fluid">
                                        <h5 class="name">Matthew Doe</h5>
                                        <p class="rank">Front-End Developer</p>
                                    </div> 

                                    <div class="middle-info">
                                        <h5>About Me</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Matthew Doe</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Edinburgh, Scotland</li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:#">example@example.com</a></li>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i>(934)-163-9163</li>
                                            <li><i class="fa fa-birthday-cake" aria-hidden="true"></i>1995-03-29</li>
                                        </ul> <!-- /list-unstyled -->
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia magnam quidem rem nobis dicta officia, quaerat praesentium totam labore repellendus assumenda, libero, quas tempora itaque.
                                        </p>
                                    </div> <!-- /middle-info -->
                                    
                                    <div class="bottom-info">
                                        <h5>Skills</h5>

                                        <h6>HTML5</h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <!-- /progress -->

                                        <h6>CSS3</h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <!-- /progress -->                             

                                        <h6>jQuery</h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <!-- /progress -->

                                    </div> <!-- /bottom-info -->
                                    

                                </div> <!-- /profile-widget -->
                            </div>
                </div>

                <div class="col-md-6 col-xs-12 col-sm-12">

                </div>

                @include('front.layouts.right')
            </div>
        </div>
    </div>
    
    @section('partner')
        @include('front.layouts.partner')
    @endsection
@endsection
