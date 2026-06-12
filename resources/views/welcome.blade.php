@extends('layouts.app')

@section('title', 'RELAG | Educación Técnica Superior')

@section('content')
    <!-- Hero Section -->
    <header id="inicio" class="hero-section d-flex align-items-center overflow-hidden">
        <!-- New Animated Background Idea: Organic Floating Blobs -->
        <div class="hero-blobs">
            <div class="blob blob-1"></div>
            <div class="blob blob-2"></div>
            <div class="blob blob-3"></div>
        </div>
        
        <div class="container text-center position-relative z-2">
            <div class="logo-container mb-4" data-aos="zoom-in">
                <img src="{{ asset('images/logo_relag.png') }}" alt="RELAG Academia" class="img-fluid hero-logo shadow-lg rounded-circle bg-white p-2">
            </div>
            <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-4" data-aos="fade-up">
                ✨ Inscripciones abiertas 2026
            </div>
            <h1 class="display-1 fw-bold mb-3 hero-title" data-aos="fade-up" data-aos-delay="100">
                INSTITUTO TÉCNICO <br><span class="text-gradient">RELAG</span>
            </h1>
            <div class="h3 mb-5 fw-light text-muted" data-aos="fade-up" data-aos-delay="200">
                <span class="typed-text"></span>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('inscripcion') }}" class="btn btn-modern btn-primary px-5 py-3">
                    <i class="fas fa-rocket me-2"></i>Comenzar ahora
                </a>
                <a href="#servicios" class="btn btn-modern btn-outline-dark bg-white px-5 py-3 border">
                    Explorar programas
                </a>
            </div>
        </div>
    </header>

    <!-- About Section (Refined) -->
    <section id="nosotros" class="section-padding position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="position-relative pe-lg-5">
                        <div class="position-absolute top-0 start-0 translate-middle-x bg-primary opacity-10 rounded-circle" style="width: 300px; height: 300px; filter: blur(50px);"></div>
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Estudiantes" class="img-fluid rounded-5 shadow-2xl position-relative">
                        
                        <div class="card-modern position-absolute bottom-0 end-0 m-4 d-none d-md-block shadow-2xl border-0" style="width: 240px; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-shape bg-primary text-white mb-0" style="width: 50px; height: 50px;">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 text-primary">+15</h4>
                                    <p class="small text-muted mb-0">Años de excelencia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h6 class="text-primary fw-bold text-uppercase ls-wide mb-3">Nuestra Esencia</h6>
                    <h2 class="display-4 fw-bold mb-4">Formando los líderes técnicos del mañana.</h2>
                    <p class="lead text-muted mb-5">
                        En <span class="fw-bold text-dark">RELAG</span>, no solo enseñamos teoría. Proporcionamos un entorno artesanal donde cada estudiante pule sus habilidades con herramientas de última generación y mentoría personalizada.
                    </p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6">
                            <div class="p-4 bg-white border rounded-4 hover-lift">
                                <div class="icon-shape bg-info bg-opacity-10 text-info mb-3">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <h5 class="fw-bold">Alta Tecnología</h5>
                                <p class="small text-muted mb-0">Laboratorios equipados con estándares industriales.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-white border rounded-4 hover-lift">
                                <div class="icon-shape bg-secondary bg-opacity-10 text-secondary mb-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h5 class="fw-bold">Comunidad Activa</h5>
                                <p class="small text-muted mb-0">Red de contactos y bolsa de empleo exclusiva.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contacto" class="btn btn-modern btn-primary px-4 py-3">Conoce nuestra historia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Instruction Section (Restored & Refined) -->
    <section id="instruccion" class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <h6 class="text-primary fw-bold text-uppercase ls-wide mb-3">Metodología</h6>
                    <h2 class="display-4 fw-bold mb-4">Institución Académica de Alto Nivel</h2>
                    <p class="lead text-muted mb-5">
                        Nuestra metodología se basa en la instrucción técnica de alto nivel, enfocada en la excelencia y el desarrollo de habilidades prácticas reales.
                    </p>
                    <div class="mb-5">
                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-shape bg-primary bg-opacity-10 text-primary me-3 flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-2">Formación Integral</h4>
                                <p class="text-muted mb-0">Laboratorios de vanguardia para garantizar un aprendizaje profundo en áreas de refrigeración y electricidad.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('inscripcion') }}" class="btn btn-modern btn-primary px-5 py-3 shadow">
                        INSCRIBIRSE AHORA
                    </a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="fade-left">
                    <div class="instruction-img-wrapper p-3 p-md-5 bg-light rounded-5 shadow-sm border">
                        <img src="{{ asset('images/logo_relag.png') }}" alt="RELAG Instrucción" class="img-fluid instruction-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section (Modern Bento) -->
    <section id="servicios" class="section-padding bg-light bg-opacity-50">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase ls-wide mb-3">Programas Especializados</h6>
                <h2 class="display-5 fw-bold">Nuestras Especialidades</h2>
            </div>
            
            <div class="row g-4">
                <!-- Card Grande -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-modern h-100 p-0 overflow-hidden border-0 shadow-sm">
                        <div class="row g-0 h-100">
                            <div class="col-md-6">
                                <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Electrónica" class="h-100 w-100 object-fit-cover">
                            </div>
                            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                                <div class="badge bg-primary bg-opacity-10 text-primary align-self-start mb-3">Más Popular</div>
                                <h3 class="fw-bold mb-3">Electrónica Industrial</h3>
                                <p class="text-muted mb-4">Mantenimiento y reparación de sistemas electrónicos y automatización de procesos industriales de gran escala.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 small text-muted"><i class="fas fa-check-circle text-primary me-2"></i>PLC y Automatización</li>
                                    <li class="mb-2 small text-muted"><i class="fas fa-check-circle text-primary me-2"></i>Robótica Básica</li>
                                </ul>
                                <a href="#" class="btn btn-modern btn-outline-primary align-self-start">Explorar programa</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cards Pequeñas -->
                <div class="col-lg-4">
                    <div class="row g-4 h-100">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-modern h-100 p-4 border-0 shadow-sm">
                                <div class="icon-shape bg-info bg-opacity-10 text-info mb-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-snowflake"></i>
                                </div>
                                <h4 class="fw-bold mb-2">Refrigeración</h4>
                                <p class="small text-muted mb-3">Sistemas comerciales e industriales de climatización.</p>
                                <a href="#" class="text-primary fw-bold text-decoration-none small">Ver más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-modern h-100 p-4 border-0 shadow-sm">
                                <div class="icon-shape bg-warning bg-opacity-10 text-warning mb-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h4 class="fw-bold mb-2">Electricidad</h4>
                                <p class="small text-muted mb-3">Instalaciones residenciales y normativas vigentes.</p>
                                <a href="#" class="text-primary fw-bold text-decoration-none small">Ver más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonios" class="section-padding bg-light bg-opacity-50">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase ls-wide mb-3">Historias de Éxito</h6>
                <h2 class="display-5 fw-bold">Lo que dicen nuestros graduados</h2>
            </div>
            <div class="swiper mySwiper py-4" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm h-100">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"La formación técnica en RELAG superó mis expectativas. Hoy lidero mi propio taller de electrónica."</p>
                            <div class="d-flex align-items-center mt-auto">
                                <img src="https://i.pravatar.cc/150?u=andres" alt="Andrés Mendoza" class="rounded-circle me-3 border border-2 border-primary" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">Andrés Mendoza</h6>
                                    <small class="text-muted">Técnico Electrónico</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm h-100">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"El enfoque práctico me permitió integrarme al mundo laboral en refrigeración antes de graduarme."</p>
                            <div class="d-flex align-items-center mt-auto">
                                <img src="https://i.pravatar.cc/150?u=laura" alt="Laura Sofía" class="rounded-circle me-3 border border-2 border-primary" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">Laura Sofía</h6>
                                    <small class="text-muted">Especialista en Climatización</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm h-100">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"Mentoría real de expertos que trabajan en la industria eléctrica. Invaluable para mi carrera."</p>
                            <div class="d-flex align-items-center mt-auto">
                                <img src="https://i.pravatar.cc/150?u=mateo" alt="Mateo Rivera" class="rounded-circle me-3 border border-2 border-primary" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">Mateo Rivera</h6>
                                    <small class="text-muted">Técnico Electricista</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-5"></div>
            </div>
        </div>
    </section>

    <!-- Call to Action & Form -->
    <section id="contacto" class="section-padding position-relative overflow-hidden">
        <div class="position-absolute top-50 start-50 translate-middle bg-primary opacity-5 rounded-circle" style="width: 600px; height: 600px; filter: blur(120px); z-index: -1;"></div>
        
        <div class="container">
            <div class="row g-5">
                <!-- Promo Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="card-modern card-primary-gradient h-100 p-5 overflow-hidden position-relative border-0 shadow-2xl d-flex flex-column">
                        <div class="position-absolute top-0 end-0 bg-white rounded-circle" style="width: 280px; height: 280px; transform: translate(35%, -35%); opacity: 0.15; z-index: 0;"></div>
                        
                        <div class="position-relative z-1 text-white">
                            <h2 class="display-5 fw-bold mb-4" style="font-family: 'Outfit', sans-serif;">¿Listo para transformar tu carrera?</h2>
                            <p class="lead mb-5 opacity-75">Únete a la próxima generación de expertos técnicos. Formación práctica, real y profesional.</p>
                            
                            <div class="bg-white p-4 rounded-4 shadow-lg mb-5">
                                <p class="text-muted mb-1 small fw-bold">INVERSIÓN ÚNICA</p>
                                <div class="h1 fw-bold text-primary mb-0">$150.00</div>
                                <del class="text-muted small">$200.00</del>
                            </div>

                            <div class="d-flex align-items-center mt-auto">
                                <div class="icon-shape bg-white text-primary mb-0 shadow-lg" style="width: 50px; height: 50px;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold text-white">¿Dudas? Escríbenos</h6>
                                    <a href="https://wa.me/123456789" class="text-white text-decoration-none fw-bold">+123 456 789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="card-modern border-0 shadow-lg">
                        <h3 class="fw-bold mb-2">Déjanos un mensaje</h3>
                        <p class="text-muted mb-4">¿Tienes alguna duda técnica o administrativa? Escríbenos.</p>
                        
                        <form id="registrationForm" onsubmit="return false;">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label-modern">Tu Nombre</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 rounded-start-3"><i class="far fa-user text-muted"></i></span>
                                        <input type="text" class="form-control form-control-modern rounded-end-3" placeholder="Ej: Juan Pérez" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-modern">Correo Electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 rounded-start-3"><i class="far fa-envelope text-muted"></i></span>
                                        <input type="email" class="form-control form-control-modern rounded-end-3" placeholder="juan@ejemplo.com" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-modern">Asunto</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 rounded-start-3"><i class="fas fa-tag text-muted"></i></span>
                                        <input type="text" class="form-control form-control-modern rounded-end-3" placeholder="Ej: Información sobre cursos" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-modern">Mensaje</label>
                                    <div class="input-group">
                                        <span class="input-group-text align-items-start pt-3"><i class="far fa-comment-dots"></i></span>
                                        <textarea class="form-control form-control-modern" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="button" onclick="simulateSubmit()" class="btn btn-modern btn-primary w-100 py-3 shadow-lg">
                                        <i class="fas fa-paper-plane me-2"></i>ENVIAR MENSAJE
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Mensaje de éxito simulado -->
                        <div id="successMessage" class="text-center d-none py-5">
                            <div class="icon-shape bg-success text-white mx-auto mb-4 animate-bounce" style="width: 80px; height: 80px;">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <h4 class="fw-bold text-success">¡Solicitud Enviada!</h4>
                            <p class="text-muted">Gracias por tu interés. Nos pondremos en contacto contigo muy pronto.</p>
                            <button class="btn btn-modern btn-outline-primary mt-3" onclick="resetForm()">Volver a empezar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section text-center py-5 bg-dark">
        <div class="container" data-aos="fade-in">
            <i class="fas fa-quote-left fa-3x text-primary opacity-25 mb-4"></i>
            <blockquote class="blockquote mb-0">
                <p class="display-6 mb-4">"El genio se hace con un 1% de talento y un 99% de trabajo."</p>
                <footer class="blockquote-footer text-primary-emphasis">Albert Einstein</footer>
            </blockquote>
        </div>
    </section>
@endsection
