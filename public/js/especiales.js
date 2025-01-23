document.addEventListener('DOMContentLoaded', function () {
  // Selecciona las listas de personajes
  const evilRyuButton = document.getElementById('evilryu');
  const violentKenButton = document.getElementById('violentken');
  const chunLiRosaButton = document.getElementById('chunlirosa');

  // Selecciona los contenedores de personajes
  const evilRyuContainer = document.querySelector('.evilryu-container');
  const violentKenContainer = document.querySelector('.violentken-container');
  const chunLiRosaContainer = document.querySelector('.chunlirosa-container');

  // Selecciona las miniaturas de imágenes de cada contenedor
  const evilRyuThumbnails = evilRyuContainer.querySelectorAll('.thumbnail-image');
  const violentKenThumbnails = violentKenContainer.querySelectorAll('.thumbnail-image');
  const chunLiRosaThumbnails = chunLiRosaContainer.querySelectorAll('.thumbnail-image');

  // Función para cambiar la imagen activa
  function changeActiveImage(container, newSrc) {
    const activeImage = container.querySelector('#active-image');
    activeImage.src = newSrc;
  }

  // Función para actualizar la clase activa en las miniaturas
  function setActiveThumbnail(thumbnails, newActive) {
    thumbnails.forEach(thumbnail => {
      thumbnail.classList.remove('active');
    });
    newActive.classList.add('active');
  }

  // Función para mostrar el contenedor correcto
  function showCharacter(containerToShow, thumbnails) {
    // Oculta todos los contenedores
    evilRyuContainer.style.display = 'none';
    violentKenContainer.style.display = 'none';
    chunLiRosaContainer.style.display = 'none';

    // Muestra el contenedor del personaje seleccionado
    containerToShow.style.display = 'block';

    // Vincula los eventos de las miniaturas con el contenedor actual
    const currentThumbnails = thumbnails;
    currentThumbnails.forEach(thumbnail => {
      thumbnail.addEventListener('click', function () {
        const largeSrc = thumbnail.getAttribute('data-large-src');
        changeActiveImage(containerToShow, largeSrc);
        setActiveThumbnail(currentThumbnails, thumbnail);
      });
    });
  }

  // Función para manejar el cambio de clase "active" en los elementos de la lista
  function setActiveTab(activeTab) {
    // Quita la clase "active" de todos los elementos de la lista
    const tabs = document.querySelectorAll('ol li');
    tabs.forEach(tab => tab.classList.remove('active'));

    // Añade la clase "active" al tab seleccionado
    activeTab.classList.add('active');
  }

  // Agrega los eventos de clic en cada personaje
  evilRyuButton.addEventListener('click', function () {
    showCharacter(evilRyuContainer, evilRyuThumbnails);
    setActiveTab(evilRyuButton);
  });

  violentKenButton.addEventListener('click', function () {
    showCharacter(violentKenContainer, violentKenThumbnails);
    setActiveTab(violentKenButton);
  });

  chunLiRosaButton.addEventListener('click', function () {
    showCharacter(chunLiRosaContainer, chunLiRosaThumbnails);
    setActiveTab(chunLiRosaButton);
  });

  // Inicia con Evil Ryu seleccionado por defecto
  showCharacter(evilRyuContainer, evilRyuThumbnails);
  setActiveTab(evilRyuButton);
});
