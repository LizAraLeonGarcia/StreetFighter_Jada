document.addEventListener('DOMContentLoaded', function () {
  // Obtén las imágenes de la paginación
  const thumbnails = document.querySelectorAll('.thumbnail-image');
  const activeImage = document.getElementById('active-image');

  // Función para cambiar la imagen activa
  function changeActiveImage(newSrc) {
    activeImage.src = newSrc;
  }

  // Función para actualizar la clase activa en las miniaturas
  function setActiveThumbnail(newActive) {
    thumbnails.forEach(thumbnail => {
      thumbnail.classList.remove('active');
    });
    newActive.classList.add('active');
  }

  // Agrega el evento de clic a cada miniatura
  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function () {
      const largeSrc = thumbnail.getAttribute('data-large-src');
      changeActiveImage(largeSrc);
      setActiveThumbnail(thumbnail);
    });
  });

  // Iniciar con la primera imagen seleccionada
  const firstThumbnail = thumbnails[0];
  setActiveThumbnail(firstThumbnail);
});
