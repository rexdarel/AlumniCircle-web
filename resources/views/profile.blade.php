@extends('layouts.app')
@section('title')
Profile
@endsection
@section('profile_link')
active
@endsection
@section('content')

<style type="text/css">
#main {
    padding-bottom: 110px;
    padding-top: 50px;
}
.pv-main {
        border: 5px solid rgba(0, 0, 0, .14);
}
.profile-view .pv-header {
    background-image: url('{{ elixir('assets/img/headers/profile/1.jpg') }}');
    height: 300px;
}
</style>

    <div class="container container-alt" data-pjax>

        <div class="row">
            <div class="card profile-view">
                <div class="pv-header">
                    <img id="photo-avatar" src="storage/{{ Auth::user()->avatar }}" class="pv-main" alt="">
                </div>

                <div class="pv-body">
                    <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
                    <small>{{ Auth::user()->role->display_name }}</small>
                    <small>{{ Auth::user()->bio }}</small>
                    <ul class="pv-contact">
                        <li><i class="zmdi zmdi-pin"></i> Jupitor</li>
                        @foreach(Auth::user()->contacts as $contact)
                        @if($contact->isPrimary == 1)
                        <li><i class="zmdi zmdi-phone"></i> {{ $contact->number }}</li>
                        @endif
                        @endforeach
                    </ul>

                    
                    <a href="#" class="pv-follow-btn">Change Profile Image</a>
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
                                 role="tab" data-toggle="tab">Employment</a></li>
                                
                                 </ul>

                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active animated fadeInRight in"
                                    id="home9">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header bgm-cyan">
                                                    <h2>Basic Information
                                                        <!-- <small>You can type anything here...</small> -->
                                                    </h2>
                                                    <ul class="actions actions-alt">
                                                        <li class="dropdown">
                                                            <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="zmdi zmdi-more-vert"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <a href="#">Update</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-body card-padding">
                                                    <div class="pmb-block">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header bgm-cyan">
                                                    <h2>Contact Information
                                                        <!-- <small>You can type anything here...</small> -->
                                                    </h2>
                                                    <ul class="actions actions-alt">
                                                        <li class="dropdown">
                                                            <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="zmdi zmdi-more-vert"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <a href="#">Update</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-body card-padding">
                                                    <div class="pmb-block">
                                                        <div class="pmbb-body p-l-30">
                                                            <div class="pmbb-view">
                                                                @foreach(Auth::user()->contacts as $contact)
                                                                    @if($contact->isPrimary == 1)
                                                                        <dl class="dl-horizontal">
                                                                            <dt>Primary Contact</dt>
                                                                            <dd>{{ $contact->number }}</dd>
                                                                        </dl>
                                                                    @else
                                                                        <dl class="dl-horizontal">
                                                                            <dt>Alternative Contact</dt>
                                                                            <dd>{{ $contact->number }}</dd>
                                                                        </dl>
                                                                    @endif
                                                                @endforeach
                                                                <dl class="dl-horizontal">
                                                                    <dt>Email Address</dt>
                                                                    <dd>{{ Auth::user()->email }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Social Accounts</dt>
                                                                    <dd></dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Skype</dt>
                                                                    <dd>malinda.hollaway</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header bgm-cyan">
                                                    <h2>Locations
                                                        <!-- <small>You can type anything here...</small> -->
                                                    </h2>
                                                    <ul class="actions actions-alt">
                                                        <li class="dropdown">
                                                            <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="zmdi zmdi-more-vert"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li>
                                                                    <a href="#">Update</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-body card-padding">
                                                    <div class="pmb-block">
                                                        <div class="pmbb-body p-l-30">
                                                            <div class="pmbb-view">
                                                                @foreach($addresses as $address)
                                                                        <dl class="dl-horizontal">
                                                                            <dt>{{ $address->type }}</dt>
                                                                            <dd>{{ $address->street }} {{ $address->street1 }} {{ $address->barangay }} {{ $address->municipality }} {{ $address->city }} {{ $address->province }} {{ $address->country }}</dd>
                                                                        </dl>
                                                                @endforeach
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
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
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

