@extends('layouts.app')
@section('title')
Profile
@endsection
@section('chat_link')
active
@endsection
@section('content')
@include('shared.header')
<style type="text/css">
    #main {
    padding-bottom: 0px;
    padding-top: 60px
}
.messages {
    height: calc(100vh - 90px);
    position: relative;
}
</style>
<section id="main">
  @include('shared.sidebar')
  <section id="content">
    <div class="container container-alt">
        <div class="messages card">
            <div class="m-sidebar">
                <header>
                    <h2 class="hidden-xs">Messages</h2>

                    <ul class="actions">
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-comment-text"></i>
                            </a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="#" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Profile & Status</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>

                <div class="ms-search hidden-xs">
                    <div class="fg-line">
                        <i class="zmdi zmdi-search"></i>

                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <div class="list-group c-overflow">
                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="{{ elixir('assets/img/demo/profile-pics/4.jpg') }}" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Davil Parnell</div>
                            <small class="lgi-text">Fierent fastidii recteque ad pro</small>
                            <small class="ms-time">05:00 PM</small>
                        </div>
                    </a>

                    <a class="list-group-item media active" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/2.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Ann Watkinson</div>
                            <small class="lgi-text">Cum sociis natoque penatibus </small>
                            <small class="ms-time">10:02 AM</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/3.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Marse Walter</div>
                            <small class="lgi-text">Suspendisse sapien ligula</small>
                            <small class="ms-time">Yesterday</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/2.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Jeremy Robbins</div>
                            <small class="lgi-text">Phasellus porttitor tellus nec</small>
                            <small class="ms-time">23/04/16</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/4.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Reginald Horace</div>
                            <small class="lgi-text">Quisque consequat arcu eget</small>
                            <small class="ms-time">15/04/16</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/5.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Shark Henry</div>
                            <small class="lgi-text">Nam lobortis odio et leo maximu</small>
                            <small class="ms-time">30/03/16</small>
                        </div>
                    </a>

                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="assets/img/demo/profile-pics/2.jpg" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">Paul Van Dack</div>
                            <small class="lgi-text">Nam posuere purus sed velit auctor sodales</small>
                            <small class="ms-time">10/03/16</small>
                        </div>
                    </a>
                </div>

            </div>

            <div class="m-body">
                <header class="mb-header">
                    <div class="mbh-user clearfix">
                        <img src="assets/img/demo/profile-pics/2.jpg" alt="">
                        <div class="p-t-5" id="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                    </div>

                    <ul class="actions">
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-refresh-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Contact Info</a>
                                </li>
                                <li>
                                    <a href="#">Mute</a>
                                </li>
                                <li>
                                    <a href="#">Clear Messages</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>

                <div class="mb-list">
                    <div class="mbl-messages c-overflow" id="chat-messages">
                    </div>

                    <div class="mbl-compose">
                        <form role="form" id="form">
                        <textarea placeholder="Type a message..." id="msg" required=""></textarea>

                        <button id="send_button" type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
@endsection
