@extends('layouts.app')
@section('title')
    People
@endsection
@section('people_link')
    active
@endsection
@section('content')
    <div class="container container-alt">

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

        <!-- Add button -->
        <button class="btn btn-float btn-danger m-btn"><i class="zmdi zmdi-plus"></i></button>

        <div class="card">
            <div class="action-header clearfix">
                <div class="ah-label hidden-xs">Some text here</div>

                <div class="ah-search">
                    <input type="text" placeholder="Start typing..." class="ahs-input">

                    <i class="ahs-close" data-ma-action="action-header-close">&times;</i>
                </div>

                <ul class="actions">
                    <li>
                        <a href="#" data-ma-action="action-header-open">
                            <i class="zmdi zmdi-search"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="zmdi zmdi-time"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" aria-expanded="true">
                            <i class="zmdi zmdi-sort"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="#">Last Modified</a>
                            </li>
                            <li>
                                <a href="#">Last Edited</a>
                            </li>
                            <li>
                                <a href="#">Name</a>
                            </li>
                            <li>
                                <a href="#">Date</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="zmdi zmdi-info"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body card-padding">

                <div class="contacts clearfix row">
                    @foreach ($users as $user)
                        @if($user->status == 'APPROVED')
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="c-item">
                                    <a href="#" class="ci-avatar">
                                        <img src="storage/{{ $user->avatar }}" alt="">
                                    </a>

                                    <div class="c-info">
                                        <strong>{{ $user->firstname }} {{ $user->lastname }}</strong>
                                        <small>{{ $user->email }}</small>
                                        @if($user->role->display_name == 'Administrator')
                                            <small style="color: #F44336">{{ $user->role->display_name }}</small>
                                        @else
                                            <small style="color: #2196F3">{{ $user->role->display_name }}</small>
                                        @endif
                                    </div>

                                    <div class="c-footer">
                                        <button class="waves-effect"><i class="zmdi zmdi-person-add"></i> View
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach

                </div>

                <div class="load-more">
                    <a href="#"><i class="zmdi zmdi-refresh-alt"></i> Load More...</a>
                </div>
            </div>
        </div>
    </div>
@endsection