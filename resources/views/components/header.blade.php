<header id="header">
  <a class="logo-img" href="{{route('home')}}"><img src="{{ asset('images/logo-little.svg') }}" alt="Logo la Roche sur Yon"></a>

  <a class="bm-icon">
        <span class="lines"></span>
  </a>

  <nav class="menu">
    <ul>
      <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }} nav-link">Accueil</a></li>
      <li><a href="{{route('actualites')}}" class="{{ request()->routeIs('actualites') ? 'active' : '' }} nav-link">Actualités</a></li>
      <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }} nav-link">Contact</a></li>
    </ul>
  </nav>
</header>