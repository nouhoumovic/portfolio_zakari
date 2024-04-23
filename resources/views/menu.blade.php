<header class="header">
    <div class="container">
      <nav class="navbar">
        <a href="#" class="nav-logo">
          <img src="{{ asset('front/image/logo.png')}}" alt="">
        </a>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="{{ route('welcome') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Accueil</a>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">A Propos</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Projets</a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('all_articles') }}" class="nav-link {{ (request()->is('all_articles')) ? 'active' : '' }}">Articles Zakari</a>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">journey</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Blog</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li> --}}
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>
