@extends('layouts.app')
@section('title')
    Home
@endsection
@section('home_link')
    navigation__active
@endsection
@section('content')
<main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
            <style type="text/css">
                .messages__post__text{width:100%;border:2;border-radius:2px;padding:.5rem;resize:none;height: 70px}
            </style>
            <style>
            .reorder {
  
  /* Setup Flexbox */
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;

  /* Reverse Column Order */
  -webkit-flex-flow: column-reverse;
  flex-flow: column-reverse;

}  </style>

            

            @include('shared.header')
            @include('shared.sidebar')

            <section class="content">
  
                    <div class="card-demo col-md-8">
                    <div class="card">

                        <div class="card-header">
                            <h2 class="card-title">Post anything here...</h2>
                            <!-- <small class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</small> -->
                        </div>

                        <div class="card-block">
                            <textarea id="postText" class="messages__post__text" placeholder="Post announcements, job ads,..."></textarea>
                        </div>
                    
                            
                       <div class="card-footer text-right">
                            <button class="btn btn-primary" id="postButton">Post</button>
                        </div>

                    </div>
                </div>
                <div id="posts" class="reorder">
            </div>
                @include('shared.footer')
            </section>
        </main>
@endsection
