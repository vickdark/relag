# Instituto Técnico RELAG - Un Mundo de Conocimientos

Bienvenido al repositorio oficial del **Instituto Técnico RELAG**. Este es un sitio web moderno desarrollado para representar la identidad y los servicios educativos de la academia, enfocado en la excelencia técnica y la formación profesional.

## 🚀 Descripción del Proyecto

El sitio ha sido diseñado con una estética "premium" y moderna, alejándose de los estilos genéricos y utilizando tecnologías de vanguardia para ofrecer una experiencia de usuario interactiva y fluida.

### Características Principales:
- **Diseño Moderno (UI/UX)**: Implementación de *Glassmorphism*, gradientes de malla (*Mesh Gradients*) y tipografía contemporánea (**Plus Jakarta Sans** & **Outfit**).
- **Interactividad Avanzada**:
    - Animaciones de entrada con **AOS (Animate On Scroll)**.
    - Efectos de escritura dinámica con **Typed.js**.
    - Sliders táctiles y modernos con **Swiper.js**.
- **Estructura Mantenible**: Refactorización completa utilizando componentes de **Laravel Blade** (Layouts y Partials).
- **Secciones Detalladas**:
    - **Inicio (Hero)**: Bienvenida dinámica con el logo institucional.
    - **Nosotros & Instrucción**: Descripción de la esencia y metodología académica de la institución.
    - **Especialidades Técnicas**: Catálogo de programas (Electrónica, Refrigeración, Electricidad) con imágenes representativas.
    - **Testimonios**: Historias de éxito de nuestros graduados con avatares reales.
    - **Inscripción**: Formulario moderno con validación visual y simulador de envío.
    - **Acceso Externo**: Enlace directo a la plataforma académica personalizada.

## 🛠️ Tecnologías Utilizadas

- **Framework**: [Laravel 11](https://laravel.com)
- **Frontend**: [Blade Templates](https://laravel.com/docs/blade), [Sass](https://sass-lang.com/)
- **Estilos**: [Bootstrap 5](https://getbootstrap.com/) (Personalizado)
- **Iconografía**: [FontAwesome 6](https://fontawesome.com/)
- **Librerías JS**: AOS, Typed.js, Swiper.js
- **Herramienta de Construcción**: [Vite](https://vitejs.dev/)

## 📦 Instalación y Uso

1. **Clonar el repositorio**:
   ```bash
   git clone <url-del-repositorio>
   cd relag
   ```

2. **Instalar dependencias de PHP**:
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node**:
   ```bash
   npm install
   ```

4. **Configurar el entorno**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Ejecutar el servidor de desarrollo**:
   ```bash
   # En una terminal
   php artisan serve
   
   # En otra terminal (para los assets)
   npm run dev
   ```

---
Diseñado con ❤️ para el **Instituto Técnico RELAG**.
