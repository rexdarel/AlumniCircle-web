<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="assets/demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name" id="name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                    <div class="user__email">{{ Auth::user()->type }}</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('profile') }}">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
        <ul class="navigation">
            <li class="@yield('home_link')"><a href="{{ route('home') }}"><i class="material-icons">home</i> Home</a></li>

            <li class="@yield('dashboard_link')"><a href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>


            <li class="@yield('profile_link')"><a href="{{ route('profile') }}"><i class="material-icons">person</i> Profile</a></li>

            <li class="@yield('chat_link')"><a href="{{ route('chat') }}"><i class="material-icons">chat</i> Chat</a></li>

            <li class="@yield('alumni_link')"><a href="{{ route('alumni_management') }}"><i class="material-icons">group</i> Alumni Management</a></li>
            @if(Auth::user()->type == 'Super Admin')
            <li class="@yield('admin_link')"><a href="{{ route('admin_management') }}"><i class="material-icons">work</i> Admin Management</a></li>

            @endif

     


            <li class="@yield('settings_link')"><a href="index.html"><i class="material-icons">settings</i> Settings</a></li>

            <li class="@yield('logout_link')"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</aside>