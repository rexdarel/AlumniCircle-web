@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('profile_link')
    navigation__active
@endsection
@section('content')
<main class="main">

            

            @include('shared.header')
            @include('shared.sidebar')

            <section class="content">
                <div class="content__inner content__inner--sm">
                    <header class="content__title">
                        <h1>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
                        <small>Web/UI Developer, Edinburgh, Scotland</small>

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="card profile">
                        <div class="profile__img">
                            <img src="assets/demo/img/contacts/2.jpg" alt="">

                            <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
                        </div>

                        <div class="profile__info">
                            <p>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magnae tiam porta sem malesuada magna mollis euismod.</p>

                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>
                                <li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
                                <li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">

                    <div class="card-block">
                        <div class="tab-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="home" role="tabpanel">
                                    <h4 class="card-block__title mb-4">About Mallinda Hollaway</h4>

                            <p>Pellentesque vitae quam quis tellus dignissim faucibus. Suspendisse mattis felis at faucibus lobortis. Sed sit amet tellus dolor. Fusce quis sollicitudin velit. Praesent gravida ullamcorper lectus et tincidunt. Phasellus lectus quam, porta pharetra feugiat in, auctor eget dolor.</p>

                            <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>

                            <br>

                            <h4 class="card-block__title mb-4">Contact Information</h4>

                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                <li><i class="zmdi zmdi-email"></i>robertbosborne@inbound.plus</li>
                                <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                                <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                                <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                            </ul>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel">
                                    <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis. Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat. Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane fade" id="messages" role="tabpanel">
                                    <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis. Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat. Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis. Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat. Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane fade" id="settings" role="tabpanel">
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                @include('shared.footer')
            </section>
        </main>
@endsection
