@extends('layouts.app')

@section('title', 'Inscripción | Instituto Técnico RELAG')

@section('content')
<section class="section-padding bg-light min-vh-100">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-modern border-0 shadow-2xl overflow-hidden p-0">
                    <div class="row g-0">
                        <!-- Sidebar de Información -->
                        <div class="col-lg-4 card-primary-gradient p-5 text-white d-flex flex-column justify-content-center">
                            <h2 class="fw-bold mb-4" style="font-family: 'Outfit', sans-serif;">Inicia tu Futuro</h2>
                            <p class="opacity-75 mb-5">Completa este formulario detallado para procesar tu solicitud de ingreso. Uno de nuestros asesores se pondrá en contacto contigo en las próximas 24 horas.</p>
                            
                            <ul class="list-unstyled mb-0">
                                <li class="mb-4 d-flex align-items-center">
                                    <div class="icon-shape bg-white text-primary me-3 shadow-sm" style="width: 40px; height: 40px;">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Certificación Oficial</span>
                                </li>
                                <li class="mb-4 d-flex align-items-center">
                                    <div class="icon-shape bg-white text-primary me-3 shadow-sm" style="width: 40px; height: 40px;">
                                        <i class="fas fa-microchip"></i>
                                    </div>
                                    <span>Tecnología de Punta</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="icon-shape bg-white text-primary me-3 shadow-sm" style="width: 40px; height: 40px;">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <span>Mentoría Personalizada</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Formulario Real -->
                        <div class="col-lg-8 p-5 bg-white">
                            <div class="mb-5">
                                <h3 class="fw-bold mb-2">Formulario de Inscripción</h3>
                                <p class="text-muted">Proceso de Admisión Académica 2026</p>
                            </div>

                            <form id="enrollmentForm" onsubmit="return false;">
                                <!-- Datos Personales -->
                                <h5 class="fw-bold text-primary mb-4 pb-2 border-bottom">1. Información Personal</h5>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <label class="form-label-modern">Nombre Completo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                            <input type="text" class="form-control form-control-modern" placeholder="Ej: Juan Pérez" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-modern">Documento de Identidad</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                            <input type="text" class="form-control form-control-modern" placeholder="C.C. o TI" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-modern">Correo Electrónico</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            <input type="email" class="form-control form-control-modern" placeholder="juan@ejemplo.com" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-modern">Número de Teléfono</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                            <input type="tel" class="form-control form-control-modern" placeholder="+57 300..." required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Información Académica -->
                                <h5 class="fw-bold text-primary mb-4 pb-2 border-bottom">2. Elección Académica</h5>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-12">
                                        <label class="form-label-modern">Programa de Interés</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                            <select class="form-select form-control-modern" required>
                                                <option selected disabled>Selecciona una especialidad</option>
                                                <option>Electrónica Industrial</option>
                                                <option>Refrigeración y Climatización</option>
                                                <option>Electricidad Residencial</option>
                                                <option>Mecatrónica Básica</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label-modern">Jornada Preferida</label>
                                        <div class="d-flex flex-wrap gap-4 mt-2 p-3 bg-light rounded-4">
                                            <div class="form-check custom-radio">
                                                <input class="form-check-input" type="radio" name="jornada" id="mañana" checked>
                                                <label class="form-check-label fw-semibold" for="mañana">Mañana (8am - 12pm)</label>
                                            </div>
                                            <div class="form-check custom-radio">
                                                <input class="form-check-input" type="radio" name="jornada" id="tarde">
                                                <label class="form-check-label fw-semibold" for="tarde">Tarde (2pm - 6pm)</label>
                                            </div>
                                            <div class="form-check custom-radio">
                                                <input class="form-check-input" type="radio" name="jornada" id="noche">
                                                <label class="form-check-label fw-semibold" for="noche">Noche (6pm - 10pm)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de Envío -->
                                <div class="col-12 text-end">
                                    <button type="button" onclick="simulateEnrollment()" class="btn btn-modern btn-primary px-5 py-3 shadow-lg">
                                        <i class="fas fa-file-signature me-2"></i>FINALIZAR INSCRIPCIÓN
                                    </button>
                                </div>
                            </form>

                            <!-- Mensaje de Éxito -->
                            <div id="successEnrollment" class="text-center d-none py-5">
                                <div class="icon-shape bg-success text-white mx-auto mb-4 animate-bounce" style="width: 80px; height: 80px;">
                                    <i class="fas fa-check fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-success">¡Pre-inscripción Completada!</h4>
                                <p class="text-muted">Hemos recibido tus datos correctamente. Pronto te enviaremos un correo con los siguientes pasos para tu matrícula.</p>
                                <a href="{{ route('home') }}" class="btn btn-modern btn-outline-primary mt-3">Volver al inicio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function simulateEnrollment() {
        const form = document.getElementById('enrollmentForm');
        const success = document.getElementById('successEnrollment');
        
        // Simulación visual de validación
        const inputs = form.querySelectorAll('input[required], select[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (isValid) {
            form.classList.add('d-none');
            success.classList.remove('d-none');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
</script>
@endsection
