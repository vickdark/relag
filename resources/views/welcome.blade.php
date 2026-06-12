@extends('layouts.app')

@section('title', 'RELAG | Educación Técnica Superior')

@section('content')
    <!-- Hero Section -->
    <header id="inicio" class="hero-section d-flex align-items-center">
        <div class="container text-center">
            <div class="logo-container mb-4" data-aos="zoom-in">
                <img src="{{ asset('images/logo_relag.png') }}" alt="RELAG Academia" class="img-fluid hero-logo shadow-lg rounded-circle bg-white p-2">
            </div>
            <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-4" data-aos="fade-up">
                ✨ Inscripciones abiertas 2026
            </div>
            <h1 class="display-1 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">
                INSTITUTO TÉCNICO <br><span class="text-gradient">RELAG</span>
            </h1>
            <div class="h3 mb-5 fw-light text-muted" data-aos="fade-up" data-aos-delay="200">
                <span class="typed-text"></span>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3" data-aos="fade-up" data-aos-delay="300">
                <a href="#contacto" class="btn btn-modern btn-primary">
                    <i class="fas fa-rocket me-2"></i>Comenzar ahora
                </a>
                <a href="#nosotros" class="btn btn-modern btn-outline-dark bg-white">
                    Explorar programas
                </a>
            </div>
        </div>
    </header>

    <!-- About Section (Original) -->
    <section id="nosotros" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Estudiantes" class="img-fluid rounded-5 shadow-lg">
                        <div class="card-modern position-absolute bottom-0 end-0 m-4 d-none d-md-block" style="width: 200px;">
                            <h4 class="fw-bold text-primary mb-0">+15</h4>
                            <p class="small text-muted mb-0">Años de experiencia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <h6 class="text-primary fw-bold text-uppercase mb-3">Nuestra Esencia</h6>
                    <h2 class="display-5 fw-bold mb-4">Formando los líderes técnicos del mañana.</h2>
                    <p class="lead text-muted mb-4">
                        En RELAG, no solo enseñamos teoría. Proporcionamos un entorno artesanal donde cada estudiante pule sus habilidades con herramientas de última generación y mentoría personalizada.
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape me-3 mb-0" style="width: 48px; height: 48px; font-size: 1.2rem;">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <span class="fw-bold">Alta Tecnología</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape me-3 mb-0" style="width: 48px; height: 48px; font-size: 1.2rem;">
                                    <i class="fas fa-users"></i>
                                </div>
                                <span class="fw-bold">Comunidad Activa</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-modern btn-primary px-4">Conoce nuestra historia</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Instruction Section (New) -->
    <section id="instruccion" class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-lg-6 mb-5 mb-lg-0 order-2 order-lg-1" data-aos="fade-right">
                    <h1 class="display-3 fw-bold text-primary mb-4" style="font-family: 'Outfit', sans-serif;">
                        INSTITUCIÓN <br> ACADÉMICA
                    </h1>
                    <p class="lead text-muted mb-5">
                        Nuestra metodología se basa en la instrucción técnica de alto nivel, enfocada en la excelencia y el desarrollo de habilidades prácticas reales.
                    </p>
                    <div class="mb-5">
                        <h4 class="fw-bold mb-3"><i class="fas fa-graduation-cap text-primary me-2"></i> Formación Integral</h4>
                        <p class="text-muted">
                            Contamos con laboratorios equipados con tecnología de vanguardia para garantizar un aprendizaje profundo en áreas de refrigeración, electricidad y más.
                        </p>
                    </div>
                    <a href="#contacto" class="btn btn-modern btn-primary px-5 py-3 shadow">
                        INSCRIBIRSE
                    </a>
                </div>
                <!-- Image/Logo Column -->
                <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2" data-aos="fade-left">
                    <div class="p-4 bg-light rounded-5 shadow-sm border">
                        <img src="{{ asset('images/logo_relag.png') }}" alt="RELAG Instrucción" class="img-fluid" style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="servicios" class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase mb-3">Excelencia Académica</h6>
                <h2 class="display-5 fw-bold">Especialidades Técnicas</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-modern h-100 p-0">
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Electrónica Industrial" class="card-img-top-modern">
                            <div class="position-absolute top-0 start-0 m-3">
                                <div class="icon-shape bg-white shadow-sm mb-0" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="fas fa-microchip"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body-modern">
                            <h4 class="fw-bold mb-3">Electrónica Industrial</h4>
                            <p class="text-muted mb-4">Mantenimiento y reparación de sistemas electrónicos y automatización de procesos industriales.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Ver detalles <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-modern h-100 p-0">
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1513128034602-7814ccaddd4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Refrigeración" class="card-img-top-modern">
                            <div class="position-absolute top-0 start-0 m-3">
                                <div class="icon-shape bg-white shadow-sm mb-0" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="fas fa-snowflake"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body-modern">
                            <h4 class="fw-bold mb-3">Refrigeración y Climatización</h4>
                            <p class="text-muted mb-4">Especialízate en sistemas de refrigeración comercial, industrial y aire acondicionado de precisión.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Ver detalles <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-modern h-100 p-0">
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Electricidad" class="card-img-top-modern">
                            <div class="position-absolute top-0 start-0 m-3">
                                <div class="icon-shape bg-white shadow-sm mb-0" style="width: 40px; height: 40px; font-size: 1rem;">
                                    <i class="fas fa-bolt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body-modern">
                            <h4 class="fw-bold mb-3">Electricidad Residencial</h4>
                            <p class="text-muted mb-4">Instalaciones eléctricas seguras y normativas vigentes para proyectos de vivienda y comercio.</p>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Ver detalles <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonios" class="section-padding bg-white bg-opacity-50">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase mb-3">Historias de Éxito</h6>
                <h2 class="display-5 fw-bold">Lo que dicen nuestros graduados</h2>
            </div>
            <div class="swiper mySwiper py-4" data-aos="zoom-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"La formación técnica en RELAG superó mis expectativas. Hoy lidero mi propio taller de electrónica."</p>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?u=andres" alt="Andrés Mendoza" class="rounded-circle me-3 border border-2 border-primary" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">Andrés Mendoza</h6>
                                    <small class="text-muted">Técnico Electrónico</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"El enfoque práctico me permitió integrarme al mundo laboral en refrigeración antes de graduarme."</p>
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?u=laura" alt="Laura Sofía" class="rounded-circle me-3 border border-2 border-primary" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="fw-bold mb-0">Laura Sofía</h6>
                                    <small class="text-muted">Especialista en Climatización</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-3">
                        <div class="card-modern border-0 shadow-sm">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="fst-italic text-muted mb-4">"Mentoría real de expertos que trabajan en la industria eléctrica. Invaluable para mi carrera."</p>
                            <div class="d-flex align-items-center">
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
    <section id="contacto" class="section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Promo Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="card-modern h-100 p-5 overflow-hidden position-relative" style="background-color: #6366f1; border: none; z-index: 1;">
                        <!-- Círculo decorativo blanco (Movido al inicio y con z-index negativo relativo al contenido) -->
                        <div class="position-absolute top-0 end-0 bg-white rounded-circle" style="width: 280px; height: 280px; transform: translate(35%, -35%); opacity: 0.15; z-index: 0;"></div>
                        
                        <div class="position-relative" style="z-index: 2;">
                            <h2 class="display-5 fw-bold mb-4 text-white" style="font-family: 'Outfit', sans-serif;">¿Listo para transformar tu carrera?</h2>
                            <p class="lead mb-5 text-white opacity-75">Únete a la próxima generación de expertos técnicos. Formación práctica, real y profesional.</p>
                            
                            <div class="bg-white p-4 rounded-4 shadow-lg mb-5">
                                <p class="text-muted mb-1 small fw-bold">INVERSIÓN ÚNICA</p>
                                <div class="h1 fw-bold text-primary mb-0" style="color: #6366f1 !important;">$150.00</div>
                                <del class="text-muted small">$200.00</del>
                            </div>

                            <div class="d-flex align-items-center mt-auto text-white">
                                <div class="flex-shrink-0">
                                    <i class="fab fa-whatsapp fa-2x"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">¿Dudas? Escríbenos</h6>
                                    <a href="https://wa.me/123456789" class="text-white text-decoration-none opacity-100">+123 456 789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="card-modern">
                        <h3 class="fw-bold mb-4">Formulario de Inscripción</h3>
                        <form id="registrationForm" onsubmit="return false;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label-modern">Nombre Completo</label>
                                    <input type="text" class="form-control form-control-modern" placeholder="Ej: Juan Pérez" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-modern">Correo Electrónico</label>
                                    <input type="email" class="form-control form-control-modern" placeholder="juan@ejemplo.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-modern">Número de Teléfono</label>
                                    <input type="tel" class="form-control form-control-modern" placeholder="+57 300..." required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label-modern">Programa de Interés</label>
                                    <select class="form-select form-control-modern">
                                        <option selected disabled>Selecciona un programa</option>
                                        <option>Electrónica Industrial</option>
                                        <option>Refrigeración y Climatización</option>
                                        <option>Electricidad Residencial</option>
                                        <option>Mecatrónica Básica</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label-modern">Mensaje Adicional (Opcional)</label>
                                    <textarea class="form-control form-control-modern" rows="3" placeholder="Cuéntanos tus expectativas..."></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="button" onclick="simulateSubmit()" class="btn btn-modern btn-primary w-100 py-3">
                                        ENVIAR INSCRIPCIÓN
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Mensaje de éxito simulado -->
                        <div id="successMessage" class="text-center d-none py-5">
                            <div class="icon-shape bg-success text-white mx-auto mb-4" style="width: 80px; height: 80px;">
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
