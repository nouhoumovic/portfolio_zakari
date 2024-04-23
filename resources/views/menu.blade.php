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
          @foreach ($groupes as $groupe)
            <li class="nav-item">
                <a href="{{ route('groupe_show',$groupe->id) }}" class="nav-link {{ (request()->is('article/show/')) ? 'active' : '' }}">{{ $groupe->libelle }}</a>
            </li>
          @endforeach
        </ul>
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </div>
  </header>


