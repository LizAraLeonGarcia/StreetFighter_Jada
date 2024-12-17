<nav id="navmenu" class="navmenu">
    <div class="navbarIMGizquierda">
        <img src="{{ asset('assets/img/navbar/1.png') }}" alt="Chun Li rosa" class="img-fluid">
    </div>
    <ul class="nav-list">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="{{ url('/personajes') }}" class="nav-link">Personajes</a></li>
        <li class="nav-item"><a href="{{ url('/especiales') }}" class="nav-link">Especiales</a></li>
        <li class="nav-item"><a href="{{ url('/variantes') }}" class="nav-link">Variantes</a></li>
        <li class="nav-item"><a href="{{ url('/galeria') }}" class="nav-link">Galería</a></li>
    </ul>
    <div class="navbarIMGderecha">
        <img src="{{ asset('assets/img/navbar/2.png') }}" alt="Chun Li Clásico" class="img-fluid">
    </div>
</nav>
