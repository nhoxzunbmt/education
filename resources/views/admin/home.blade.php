@extends('admin.layouts.app')

@section('content')
    <div class="ui-container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel short-states">
                    <div class="panel-title">
                        <h4> <span class="label label-danger pull-right">Daily Income</span></h4>
                    </div>
                    <div class="panel-body">
                        <h1>$1,3012</h1>
                        <div class="text-danger pull-right">53% <i class="fa fa-bolt"></i></div>
                        <small>Daily income</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel short-states">
                    <div class="panel-title">
                        <h4> <span class="label label-info pull-right">Weekly Income</span></h4>
                    </div>
                    <div class="panel-body">
                        <h1>$5,534</h1>
                        <div class="text-primary pull-right">65% <i class="fa fa-level-up"></i></div>
                        <small>Weekly Income</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel short-states">
                    <div class="panel-title">
                        <h4> <span class="label label-warning pull-right">Monthly Income</span></h4>
                    </div>
                    <div class="panel-body">
                        <h1>$22,329</h1>
                        <div class="text-warning pull-right">77% <i class="fa fa-level-down"></i></div>
                        <small>Monthly Income</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel short-states">
                    <div class="panel-title">
                        <h4> <span class="label label-success pull-right">Annual Income</span></h4>
                    </div>
                    <div class="panel-body">
                        <h1>$268,188</h1>
                        <div class="text-success pull-right">88% <i class="fa fa-level-up"></i></div>
                        <small>Annual Income</small>
                    </div>
                </div>
            </div>
        </div>
        <!--states end-->

        <!--task distribution start-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <header class="panel-heading">
                        Profit Database
                    </header>
                    <div class="panel-body-">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th> Company</th>
                                <th class="hidden-phone">Descrition</th>
                                <th>Profit</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">Graphics</a></td>
                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                <td>1320.00$ </td>
                                <td><span class="label label-info label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        ThemeBucket
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>556.00$ </td>
                                <td><span class="label label-warning label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        asd
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>13240.00$ </td>
                                <td><span class="label label-success label-mini">Paid</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        BCSE
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>3455.50$ </td>
                                <td><span class="label label-danger label-mini">Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">AVC Ltd</a></td>
                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                <td>110.00$ </td>
                                <td><span class="label label-primary label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Themeforest
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>456.00$ </td>
                                <td><span class="label label-warning label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">AVC Ltd</a></td>
                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                <td>110.00$ </td>
                                <td><span class="label label-primary label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        BCSE
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>3455.50$ </td>
                                <td><span class="label label-danger label-mini">Paid</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">AVC Ltd</a></td>
                                <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                <td>110.00$ </td>
                                <td><span class="label label-primary label-mini">Due</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Themeforest
                                    </a>
                                </td>
                                <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                <td>456.00$ </td>
                                <td><span class="label label-warning label-mini">Due</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

