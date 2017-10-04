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
        <div class="row">
            <div class="analytics-container">
                <div class="col-md-4">
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

