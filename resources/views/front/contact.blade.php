@extends('front.layouts.app')

@section('breadcrumb')
    <div class="col-md-12">
        <h1>Contact</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
        </ul>
    </div>
@endsection

@section('content')
    <section class="col-md-6 col-sm-6">
        <div class="col-right">
            <h3>General Enquire or Apply</h3>
            <hr>
            <div id="message-contact"></div>
            <form method="post" action="#">
                <div class="row">
                    <div class="col-md-6">
                        <label>Name <span class="required">* </span></label>
                        <input type="text" class="form-control ie7-margin" id="name_contact">
                    </div>
                    <div class="col-md-6">
                        <label>Last name <span class="required">* </span></label>
                        <input type="text" class="form-control ie7-margin" id="lastname_contact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email <span class="required">* </span></label>
                        <input type="email" id="email_contact" class="form-control ie7-margin">
                    </div>
                    <div class="col-md-6">
                        <label>Phone <span class="required">* </span></label>
                        <input type="text" id="phone_contact" class="form-control ie7-margin">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Select a department</label>
                        <select id="subject_contact" class="form-control">
                            <option value="Administration">Administration</option>
                            <option value="Admissions">Admissions</option>
                            <option value="Courses">Courses</option>
                            <option value="Apply">Apply</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="c1" name="cc" />
                        <label for="c1"><span></span>Check Box 1</label>
                    </div>
                    <input type="radio" id="r1" name="rr" />
                    <label for="r1"><span></span>Radio Button 1</label>
                    <p>
                    <input type="radio" id="r2" name="rr" />
                    <label for="r2"><span></span>Radio Button 2</label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Message <span class="required">*</span></label>
                        <textarea rows="5" id="message_contact" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label><span class="required">*</span> Are you human? 3 + 1 =</label>
                        <input type="text" id="verify_contact" class="form-control">
                    </div>
                    <div class="button-align col-md-3">
                        <input type="submit" id="submit-contact" value="Submit" class=" button_medium">
                    </div>
                </div>
                <hr>
            </form>
            
            <h4>Plan a visit</h4>
            <div id="message-visit"></div>
            <form method="post" action="assets/visit.php" id="visit">
                <div class="row">
                    <div class="col-md-6">
                        <label>Name <span class="required">* </span></label>
                        <input type="text" class="form-control ie7-margin" id="name_visit">
                    </div>
                    <div class="col-md-6">
                        <label>Last name <span class="required">* </span></label>
                        <input type="text" class="form-control ie7-margin" id="lastname_visit">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email <span class="required">* </span></label>
                        <input type="email" id="email_visit" class="form-control ie7-margin">
                    </div>
                    <div class="col-md-6">
                        <label>Phone <span class="required">* </span></label>
                        <input type="text" id="phone_visit" class="form-control ie7-margin">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="date" class="input-append" style="position:relative;">
                            <label>Select a date <span class="required">* </span></label>
                            <input type="text" class=" dateinput form-control" id="date_visit">
                            <span class="add-on" style="position:absolute; top:34px; right:5px; cursor:pointer"><i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label><span class="required">*</span> Are you human? 3 + 1 =</label>
                        <input type="text" id="verify_visit" class="form-control">
                    </div>
                </div>
                <input type="submit" id="submit-visit" value="Submit" class=" button_medium">
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('#date').datetimepicker({
            format: 'dd-MM-yyyy',
        });
    </script>
@endsection
