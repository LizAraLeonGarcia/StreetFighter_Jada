document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper-container', {
    loop: true,                // Para que el carrusel sea continuo
    centeredSlides: false,      // Asegura que la primera imagen está centrada
    initialSlide: 0,           // Empieza desde la primera imagen
    spaceBetween: 20,          // Espacio entre imágenes
    /*navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },*/
    pagination: {
      el: '.swiper-pagination',
      clickable: true,         // Habilita la paginación clickable
    },
  // Hacer que el carrusel sea cíclico
    loop: true, 
    breakpoints: {
      640: {
        slidesPerView: 1, // En pantallas pequeñas, mostrar una imagen
      },
      768: {
        slidesPerView: 2, // En pantallas medianas, mostrar dos imágenes
      },
      1024: {
        slidesPerView: 3, // En pantallas grandes, mostrar tres imágenes
      },
    },
  });  
});
