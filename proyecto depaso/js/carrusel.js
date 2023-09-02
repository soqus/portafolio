const slides = document.querySelectorAll('.carrusel .slide');
let currentSlide = 0;

// Función para mostrar el siguiente slide
function showNextSlide() {
  slides[currentSlide].style.display = 'none'; // Ocultar slide actual
  currentSlide = (currentSlide + 1) % slides.length; // Obtener el siguiente slide
  slides[currentSlide].style.display = 'block'; // Mostrar el siguiente slide
}

// Mostrar el primer slide
slides[currentSlide].style.display = 'block';

// Cambiar de slide automáticamente cada 2 segundos
setInterval(showNextSlide, 2500);
