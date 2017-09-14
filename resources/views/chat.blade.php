@extends('layouts.app')
@section('title')
    Chat
@endsection
@section('chat_link')
    navigation__active
@endsection
@section('content')
    <main class="main">
        @include('shared.header')
        @include('shared.sidebar')
            <section class="content">
                <div class="content__inner">

                    <div class="messages">
                        <div class="messages__sidebar">
                            <div class="toolbar toolbar--inner mb-3">
                                <div class="toolbar__label">MSU-IIT Alumni</div>

                                <div class="actions toolbar__actions">
                                    <a href="#" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="messages__search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a class="listview__item" href="#">
                                    <img src="assets/demo/img/profile-pics/4.jpg" alt="" class="listview__img">

                                    <div class="listview__content">
                                        <div class="listview__heading">Davil Parnell</div>
                                        <p>Fierent fastidii recteque ad pro</p>
                                    </div>
                                </a>

                                <a class="listview__item listview__item--active" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/8.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Ann Watkinson</div>
                                        <p>Cum sociis natoque penatibus </p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Marse Walter</div>
                                        <p>Suspendisse sapien ligula</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Jeremy Robbins</div>
                                        <p>Phasellus porttitor tellus nec</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/4.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Reginald Horace</div>
                                        <p>Quisque consequat arcu eget</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/5.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Shark Henry</div>
                                        <p>Nam lobortis odio et leo maximu</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/2.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Paul Van Dack</div>
                                        <p>Nam posuere purus sed velit auctor sodales</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/1.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">James Anderson</div>
                                        <p>Vivamus imperdiet sagittis quam</p>
                                    </div>
                                </a>

                                <a class="listview__item" href="#">
                                    <div class="pull-left">
                                        <img src="assets/demo/img/profile-pics/3.jpg" alt="" class="listview__img">
                                    </div>
                                    <div class="listview__content">
                                        <div class="listview__heading">Kane Williams</div>
                                        <p>Suspendisse justo nulla luctus nec</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="messages__body">
                            <div class="messages__header">
                                <div class="toolbar toolbar--inner mb-0">
                                    <div class="toolbar__label" id="name_user">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                           

                                    <div class="actions toolbar__actions">
                                        <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
                                        <a href="#" class="actions__item zmdi zmdi-time"></a>
                                        <a href="#" class="actions__item zmdi zmdi-info-outline"></a>
                                        <div class="dropdown actions__item">
                                            <i class="actions__item zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Refresh</a>
                                                <a href="#" class="dropdown-item">Delete all</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="toolbar__search">
                                        <input type="text" placeholder="Search...">
                                        <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="messages__content" id="chat-messages">

                            </div>

                            <div class="messages__reply">
                                <textarea id="msg" class="messages__reply__text" placeholder="Type a message..."></textarea>
                                <button id="send_button" class="btn btn-success btn--icon messages__reply__btn"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
