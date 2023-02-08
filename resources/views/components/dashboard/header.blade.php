<header id="header">
    <a class="logo-img" href="{{route('home')}}"><img src="{{ asset('images/logo-little.svg') }}" alt="Logo la Roche sur Yon"></a>

    <a class="bm-icon">
        <span class="lines"></span>
    </a>

    <nav class="menu">
        <ul>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}" class="nav-link">Dashboard</a></li>
            <li class="{{ request()->routeIs('users*') ? 'active' : '' }}"><a href="{{route('users.index')}}" class="nav-link">Utilisateurs</a></li>
            <li class="{{ request()->routeIs('actualites*') ? 'active' : '' }}"><a href="{{route('actualites.index')}}" class="nav-link">Actualités</a></li>
        </ul>
    </nav>

    <a href="{{route('logout')}}" id="logout-btn" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
        Déconnexion

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 -mr-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
        </svg>

    </a>
</header>