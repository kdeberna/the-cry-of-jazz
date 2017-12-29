<header class="fluid-container" style="padding-left: 15px; padding-right: 15px;">
    <nav class="navbar navbar-default" style="margin-bottom: 0; min-height: 0;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="border: none; padding: 0; margin-top: 6px; margin-right: 0;">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0; height: auto;">
					<img src="/images/coj_logo.svg" width="200" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/film') }}"><i class="glyphicon glyphicon-film visible-xs-inline"></i>About the Film</a></li>
                    <li><a href="{{ url('/purchase') }}"><i class="glyphicon glyphicon-credit-card visible-xs-inline"></i>Purchase</a></li>
                    <li><a href="{{ url('/cast') }}"><i class="glyphicon glyphicon-user visible-xs-inline"></i>The Cast &amp; Crew</a></li>
                    <li><a href="{{ url('/press') }}"><i class="glyphicon glyphicon-bullhorn visible-xs-inline"></i>Press &amp; Media</a></li>
                    <li><a href="{{ url('/contact') }}"><i class="glyphicon glyphicon-comment visible-xs-inline"></i>Contact</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" style="display: none;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li>
                                 <a href="{{ url('/logout') }}"
                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                     Logout
                                 </a>
                                 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                             </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</header>
