@extends('layouts.app')
@section('title')
Profile
@endsection
@section('profile_link')
active
@endsection
@section('content')
@include('shared.header')
<style type="text/css">
#main {
    padding-bottom: 110px;
    padding-top: 50px
}
</style>
<section id="main">
  @include('shared.sidebar')
  <section id="content">
    <div class="container container-alt">

        <!-- <div class="block-header">
            <h2>Malinda Hollaway
                <small>Web/UI Developer, Edinburgh, Scotland</small>
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
        </div> -->
        <div class="row">
            <div class="card profile-view">
                <div class="pv-header">
                    <img src="assets/img/demo/profile-pics/profile-pic.jpg" class="pv-main" alt="">
                </div>

                <div class="pv-body">
                    <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
                    <small>{{ Auth::user()->bio }}</small>

                    <ul class="pv-contact">
                        <li><i class="zmdi zmdi-pin"></i> Jupitor</li>
                        <li><i class="zmdi zmdi-phone"></i> +11 55694785</li>
                    </ul>

                    <a href="#" class="pv-follow-btn">Follow</a>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="card">
                <div class="container">
                    <div role="tabpanel" class="tab">
                        <ul class="tab-nav" role="tablist">
                            <li class="active"><a href="#home9" aria-controls="home9" role="tab"
                              data-toggle="tab">About</a></li>
                              <li role="presentation"><a href="#profile9" aria-controls="profile9"
                                 role="tab" data-toggle="tab">Profile</a></li>
                                 <li role="presentation"><a href="#messages9" aria-controls="messages9"
                                     role="tab" data-toggle="tab">Messages</a></li>
                                 </ul>

                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active animated fadeInRight in"
                                    id="home9">
                                    <div class="pmb-block">
                                        <div class="pmbb-header">
                                            <h2><i class="zmdi zmdi-account m-r-10"></i> Basic Information</h2>
                                        </div>
                                        <div class="pmbb-body p-l-30">
                                            <div class="pmbb-view">
                                                <dl class="dl-horizontal">
                                                    <dt>Full Name</dt>
                                                    <dd>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Gender</dt>
                                                    <dd>{{ Auth::user()->gender }}</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Birthday</dt>
                                                    <dd>{{ Auth::user()->birthdate }}</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Username</dt>
                                                    <dd>{{ Auth::user()->username }}</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Role</dt>
                                                    <dd>{{ Auth::user()->role->display_name }}</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pmb-block">
                                        <div class="pmbb-header">
                                            <h2><i class="zmdi zmdi-phone m-r-10"></i> Contact Information</h2>
                                        </div>
                                        <div class="pmbb-body p-l-30">
                                            <div class="pmbb-view">
                                                <dl class="dl-horizontal">
                                                    <dt>Mobile Phone</dt>
                                                    <dd>00971 12345678 9</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Email Address</dt>
                                                    <dd>malinda.h@gmail.com</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Twitter</dt>
                                                    <dd>@malinda</dd>
                                                </dl>
                                                <dl class="dl-horizontal">
                                                    <dt>Skype</dt>
                                                    <dd>malinda.hollaway</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane animated fadeInRight" id="profile9">
                                    <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor,
                                        tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur
                                        turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus
                                    pede. Nulla sit amet est. Donec mi odio, faucibus.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane animated fadeInRight" id="messages9">
                                    <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit
                                        quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus
                                        pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque
                                        quis, convallis in, nisi. Praesent ac sem eget est egestas
                                    volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
