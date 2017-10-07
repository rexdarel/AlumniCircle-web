@extends('layouts.app')
@section('title')
    Charts
@endsection
@section('charts_link')
    active
@endsection
@section('content')


    <div class="container container-alt">
        <!--Div that will hold the pie chart-->
        <div class="block-header">
            <h2>Contacts
                <small>Manage your contact information</small>
            </h2>

            <ul class="actions m-t-20 hidden-xs">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="#">Privacy Settings</a>
                        </li>
                        <li>
                            <a href="#">Account Settings</a>
                        </li>
                        <li>
                            <a href="#">Other Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="analytics-container">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bgm-cyan m-b-20">
                            <h2>Some Title
                                <small>Phasellus condimentum ipsum id auctor</small>
                            </h2>
                            <ul class="actions actions-alt">
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>

                                        </li>
                                        <li>
                                            <a href="#">Change Graph Type</a>
                                        </li>
                                        <li>
                                            <a href="#">Other Settings</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div id="png"></div>
                        </div>

                        <div class="card-body card-padding" id="chart_div">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

