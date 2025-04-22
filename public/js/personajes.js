document.addEventListener('DOMContentLoaded', () => {
  const carousels = document.querySelectorAll('.carousel');
  const paginationItems = document.querySelectorAll('#customPagination li');
  // Muestra el primer carrusel por defecto
  if (carousels.length > 0) {
    carousels[0].classList.add('active');
  }
  // Agrega el evento de clic a cada elemento de la lista
  paginationItems.forEach(item => {
    item.addEventListener('click', () => {
      // Obtener el ID del carrusel objetivo
      const targetCarousel = document.querySelector(item.getAttribute('data-bs-target'));
      // Ocultar todos los carruseles
      carousels.forEach(carousel => carousel.classList.remove('active'));
      // Mostrar solo el carrusel objetivo
      if (targetCarousel) {
        targetCarousel.classList.add('active');
      }
      // Actualizar la lista para reflejar el carrusel activo
      paginationItems.forEach(paginationItem => paginationItem.classList.remove('active'));
      item.classList.add('active');
    });
  });
});
