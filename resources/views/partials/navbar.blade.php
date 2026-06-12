<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-glass py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold fs-3" href="#inicio">
            <img src="{{ asset('images/logo_relag.png') }}" alt="RELAG Logo" height="45" class="me-2">
            <span style="font-family: 'Outfit', sans-serif;"><span class="text-primary">RE</span>LAG</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fas fa-bars-staggered fs-4 text-primary"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="{{ route('home') }}#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="{{ route('home') }}#nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="{{ route('home') }}#instruccion">Instrucción</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="{{ route('home') }}#servicios">Programas</a></li>
                <li class="nav-item"><a class="nav-link px-3 fw-semibold" href="{{ route('home') }}#testimonios">Testimonios</a></li>
                <li class="nav-item ms-lg-4 d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <a class="btn btn-modern btn-outline-primary border-2 px-4 shadow-sm" href="https://plataformaacademica.mambacode.dev/login" target="_blank">
                        <i class="fas fa-user-circle me-2"></i>Plataforma
                    </a>
                    <a class="btn btn-modern btn-primary px-4 py-2 shadow" href="{{ route('inscripcion') }}">
                        Inscribirse
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
