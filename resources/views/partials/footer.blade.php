<footer class="footer-modern">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <a class="navbar-brand fw-bold fs-3 text-white d-block mb-4" href="#inicio">
                    <span style="font-family: 'Outfit', sans-serif;"><span class="text-primary">RE</span>LAG</span>
                </a>
                <p class="text-white text-opacity-50 mb-4 pe-lg-5">Instituto líder en formación técnica superior, comprometido con la excelencia y el futuro laboral de nuestros estudiantes.</p>
                <div class="d-flex gap-3 mb-4">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h6 class="fw-bold text-white mb-4">Institución</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#nosotros" class="footer-link">Sobre nosotros</a></li>
                    <li class="mb-2"><a href="#servicios" class="footer-link">Programas</a></li>
                    <li class="mb-2"><a href="#" class="footer-link">Blog</a></li>
                    <li><a href="#contacto" class="footer-link">Contacto</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6 class="fw-bold text-white mb-4">Contacto</h6>
                <ul class="list-unstyled text-white text-opacity-50">
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        123 Calle Ejemplo, SF 12345
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-phone-alt text-primary me-3"></i>
                        +123 456 789
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        hola@relag.edu.co
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h6 class="fw-bold text-white mb-4">Horarios</h6>
                <ul class="list-unstyled text-white text-opacity-50 mb-4">
                    <li class="mb-2">Lunes - Viernes: 8am - 6pm</li>
                    <li>Sábados: 9am - 1pm</li>
                </ul>
                <a href="https://plataformaacademica.mambacode.dev/login" target="_blank" class="btn btn-modern btn-outline-primary btn-sm w-100 border-2 py-2">
                    <i class="fas fa-user-circle me-2"></i>Aula Virtual
                </a>
            </div>
        </div>
        <hr class="my-5 border-white opacity-10">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small text-white text-opacity-50 mb-0">
                    &copy; {{ date('Y') }} <span class="fw-bold">RELAG</span>. Todos los derechos reservados.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <p class="small text-white text-opacity-50 mb-0">
                    Diseñado con ❤️ por <a href="https://mambacode.dev" target="_blank" class="text-primary text-decoration-none fw-bold">Mamba Code</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
.social-link {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: rgba(255,255,255,0.05);
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
}
.social-link:hover {
    background: var(--bs-primary);
    transform: translateY(-5px);
    color: white;
}
.footer-link {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}
.footer-link:hover {
    color: var(--bs-primary);
    padding-left: 5px;
}
</style>
