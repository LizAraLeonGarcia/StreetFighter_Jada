<nav id="navmenu" class="navmenu">
    <div class="navbarIMGizquierda">
        <img src="{{ asset('assets/img/navbar/1.png') }}" alt="Chun Li rosa" class="img-fluid">
    </div>

    <ul class="nav-list">
        <li class="nav-item">
            <a href="{{ route('inicio') }}"
               class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">
                Inicio
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('personajes') }}"
               class="nav-link {{ request()->routeIs('personajes') ? 'active' : '' }}">
                Personajes
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('especiales') }}"
               class="nav-link {{ request()->routeIs('especiales') ? 'active' : '' }}">
                Especiales
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('variantes') }}"
               class="nav-link {{ request()->routeIs('variantes') ? 'active' : '' }}">
                Variantes
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('galeria') }}"
               class="nav-link {{ request()->routeIs('galeria') ? 'active' : '' }}">
                Galería
            </a>
        </li>
    </ul>

    <div class="navbarIMGderecha">
        <img src="{{ asset('assets/img/navbar/2.png') }}" alt="Chun Li Clásico" class="img-fluid">
    </div>
</nav>