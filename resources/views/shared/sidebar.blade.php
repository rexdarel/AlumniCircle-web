<aside id="sidebar" class="sidebar c-overflow">
    <div class="s-profile">
        <a href="#" data-ma-action="profile-menu-toggle">
            <div class="sp-pic">
                <img src="{{ elixir('assets/img/demo/profile-pics/1.jpg') }}" alt="">
            </div>

            <div class="sp-info">
                {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}

                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>

        <ul class="main-menu">
            <li>
                <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-settings"></i> Settings</a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-time-restore"></i> Logout</a>
            </li>
        </ul>
    </div>

    <ul class="main-menu">
        <li class="@yield('home_link')"><a href="/forums"><i class="zmdi zmdi-home"></i> Home</a></li>
        <li class="@yield('profile_link')"><a href="{{ route('profile') }}"><i class="zmdi zmdi-face"></i> Profile</a></li>
        <li class="@yield('chat_link')"><a href="{{ route('chat') }}"><i class="zmdi zmdi-comments"></i> Chat</a></li>
        <li><a href="index.html"><i class="zmdi zmdi-accounts"></i> People</a></li>
        <li><a href="index.html"><i class="zmdi zmdi-settings"></i> Settings</a></li>
        <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-long-arrow-tab"></i> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </aside>