@extends('layouts.app')
@section('title')
Chat
@endsection
@section('chat_link')
active
@endsection
@section('content')

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

    <div class="container container-alt" data-pjax>
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

                <div class="list-group" style="overflow-y: scroll;">
                    @foreach ($users as $user)
                        @if($user->status == 'APPROVED' && $user->id != Auth::user()->id)
                    <a class="list-group-item media" href="#">
                        <div class="pull-left">
                            <img src="storage/{{ $user->avatar }}" alt="" class="lgi-img">
                        </div>
                        <div class="media-body">
                            <div class="lgi-heading">{{ $user->firstname }} {{ $user->lastname }}</div>
                            <small class="lgi-text">Fierent fastidii recteque ad pro</small>
                            <small class="ms-time">05:00 PM</small>
                        </div>
                    </a>
                    @endif
                    @endforeach
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

@endsection
