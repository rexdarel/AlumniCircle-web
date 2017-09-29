@extends('layouts.app')
@section('title')
Home
@endsection
@section('home_link')
  active
@endsection
@section('content')
@include('shared.header')
<section id="main">
  @include('shared.sidebar')
  <section id="content">
    <div class="container">
      <div class="block-header">
        <h2>Wall
          <small>Yeah, I got wall views as well!. These image grids are generated only using CSS.
          </small>
        </h2>

        <ul class="actions">
          <li>
            <a href="#">
              <i class="zmdi zmdi-trending-up"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="zmdi zmdi-check-all"></i>
            </a>
          </li>
          <li class="dropdown">
            <a href="#">
              <i class="zmdi zmdi-more-vert"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="#">Refresh</a>
              </li>
              <li>
                <a href="#">Manage Widgets</a>
              </li>
              <li>
                <a href="#">Widgets Settings</a>
              </li>
            </ul>
          </li>
        </ul>

      </div>
      <div class="row wall">
        <div class="col-md-8">
          <div class="card w-post">
            <div class="card-body">
              <textarea class="wp-text auto-size" placeholder="Write Something..."></textarea>

              <div class="tab-content p-0">
                <div class="wp-media tab-pane" id="wpm-image">
                  Images - Coming soon...
                </div>

                <div class="wp-media tab-pane" id="wpm-video">
                  Video Links - Coming soon...
                </div>

                <div class="wp-media tab-pane" id="wpm-link">
                  Links - Coming soon...
                </div>
              </div>

              <div class="wp-actions clearfix">
                <div class="wpa-media-list pull-left">
                  <a data-toggle="tab" href="#wpm-image" class="c-amber">
                    <i class="zmdi zmdi-image"></i>
                  </a>
                  <a data-toggle="tab" href="#wpm-video" class="c-green">
                    <i class="zmdi zmdi-play-circle"></i>
                  </a>
                  <a data-toggle="tab" href="#wpm-link" class="c-blue">
                    <i class="zmdi zmdi-link"></i>
                  </a>
                </div>

                <button class="btn btn-primary btn-sm pull-right">Post</button>
              </div>
            </div>
          </div>
          <div class="card w-item">
            <div class="card-header">
              <div class="media">
                <div class="pull-left">
                  <img class="avatar-img" src="assets/img/demo/profile-pics/1.jpg" alt="">
                </div>

                <div class="media-body">
                  <h2>Mallinda Hollaway
                    <small>Posted on 31st Aug 2015 at 07:00</small>
                  </h2>
                </div>
              </div>
            </div>

            <div class="card-body card-padding">
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

              <div class="wi-preview lightbox clearfix">
                <div class="wip-item" data-src="asssets/img/headers/4.png"
                style="background-image: url(assets/img/headers/4.png);">
                <div class="lightbox-item"></div>
              </div>
            </div>

            <div class="wi-stats clearfix">
              <div class="wis-numbers">
                <span><i class="zmdi zmdi-comments"></i> 36</span>
                <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
              </div>

              <div class="wis-commentors">
                <a href="#"><img src="assets/img/demo/profile-pics/1.jpg" alt=""></a>
                <a href="#"><img src="assets/img/demo/profile-pics/2.jpg" alt=""></a>
                <a href="#"><img src="assets/img/demo/profile-pics/3.jpg" alt=""></a>
                <a href="#"><img src="assets/img/demo/profile-pics/5.jpg" alt=""></a>
              </div>
            </div>
          </div>

          <div class="wi-comments">

            <!-- Comment Listing -->
            <div class="list-group">
              <div class="list-group-item media">
                <a href="#" class="pull-left">
                  <img src="assets/img/demo/profile-pics/5.jpg" alt="" class="lgi-img">
                </a>

                <div class="media-body">
                  <a href="#" class="lgi-heading">David Nathan <small class="c-gray m-l-10">3 mins ago...</small></a>

                  <small class="lgi-text">Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</small>
                </div>
              </div>
            </div>

            <!-- Comment form -->
            <div class="wic-form">
              <textarea placeholder="Write something..." data-ma-action="wall-comment-open"></textarea>

              <div class="wicf-actions text-right">
                <button class="btn btn-sm btn-link" data-ma-action="wall-comment-close">Cancel</button>
                <button class="btn btn-sm btn-primary">Post</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs">
        <div class="card">
          <div class="card-header">
            <h2>About me</h2>
          </div>

          <div class="card-body card-padding">
            Maecenas malesuada. Nam adipiscing. Etiam vitae tortor. Maecenas ullamcorper, dui et
            placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. <a
            data-ui-sref="pages.profile.profile-about">
            <small>Read more...</small>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2>Contact Information
            <small>Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit
              libero
            </small>
          </h2>
        </div>
        <div class="card-body card-padding">
          <div class="pmo-contact">
            <ul>
              <li class="ng-binding"><i class="zmdi zmdi-phone"></i> 00971123456789</li>
              <li class="ng-binding"><i class="zmdi zmdi-email"></i> malinda.h@gmail.com
              </li>
              <li class="ng-binding"><i class="zmdi zmdi-facebook-box"></i>
                malinda.hollaway
              </li>
              <li class="ng-binding"><i class="zmdi zmdi-twitter"></i> @malinda
                (twitter.com/malinda)
              </li>
              <li>
                <i class="zmdi zmdi-pin"></i>
                <address class="m-b-0 ng-binding">
                  44-46 Morningside Road,<br>
                  Edinburgh,<br>
                  Scotland
                </address>
              </li>
            </ul>
          </div>

          <a class="pmo-map" href="#">
            <img src="img/demo/map.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</section>
@endsection
