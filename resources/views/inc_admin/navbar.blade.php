        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'AngeliS') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if (Auth::check())
                            @can('view_users')
                                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                        <span class="text-info glyphicon glyphicon-user"></span> Korisnici
                                    </a>
                                </li>
                            @endcan

                            @can('view_posts')
                                <li class="{{ Request::is('posts*') ? 'active' : '' }}">
                                    <a href="{{ route('posts.index') }}">
                                        <span class="text-success glyphicon glyphicon glyphicon-pencil"></span> Tekstovi
                                    </a>
                                </li>
                            @endcan
                                

                            @can('view_roles')
                            <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                                <a href="{{ route('roles.index') }}">
                                    <span class="text-danger glyphicon glyphicon-lock"></span> Ovlašćenja
                                </a>
                            </li>
                            @endcan
                        
                                <li><a href="{{ route('categories') }}">
                                    <span class="text-success glyphicon glyphicon-list-alt">
                                        </span> Kategorije</a>
                                </li>
                                <li><a href="{{ route('tags') }}">
                                    <span class="text-danger glyphicon glyphicon-lock"></span> Oznake
                                    </a>
                                </li>
                                <li><a href="{{ route('posts.trashed') }}">
                                    <span class="text-danger glyphicon glyphicon-trash"></span> Kanta
                                    </a>
                                </li>
                                <li><a href="{{ route('home') }}">
                                    <span class="text-success glyphicon glyphicon glyphicon-home">
                                        </span> Naslovna</a>
                                </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Prijavite se</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:-20px; border-radius:50%">
                                    {{ Auth::user()->name }}
                                    <span class="label label-success">{{ Auth::user()->roles->pluck('name')->first() }}</span>
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="glyphicon glyphicon-log-out"></i> Odjavite se
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('/profile') }}">Profil korisnika</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
