document.addEventListener('DOMContentLoaded', function () {
  // Selecciona las listas de personajes
  const evilRyuButton = document.getElementById('evilRyu');
  const violentKenButton = document.getElementById('violentKen');
  const chunLiRosaButton = document.getElementById('chunLiRosa');
  const feiLongMoradoButton = document.getElementById('feiLongMorado');
  const mBisonVerdeButton = document.getElementById('mBisonVerde');
  const dhalsimGrisButton = document.getElementById('dhalsimGris');
  // Selecciona los contenedores de personajes
  const evilRyuContainer = document.querySelector('.evilRyu-container');
  const violentKenContainer = document.querySelector('.violentKen-container');
  const chunLiRosaContainer = document.querySelector('.chunLiRosa-container');
  const feiLongMoradoContainer = document.querySelector('.feiLongMorado-container');
  const mBisonVerdeContainer = document.querySelector('.mBisonVerde-container');
  const dhalsimGrisContainer = document.querySelector('.dhalsimGris-container');
  // Selecciona las miniaturas de imágenes de cada contenedor
  const evilRyuThumbnails = evilRyuContainer.querySelectorAll('.thumbnail-image');
  const violentKenThumbnails = violentKenContainer.querySelectorAll('.thumbnail-image');
  const chunLiRosaThumbnails = chunLiRosaContainer.querySelectorAll('.thumbnail-image');
  const feiLongMoradoThumbnails = feiLongMoradoContainer.querySelectorAll('.thumbnail-image');
  const mBisonVerdeThumbnails = mBisonVerdeContainer.querySelectorAll('.thumbnail-image');
  const dhalsimGrisThumbnails = dhalsimGrisContainer.querySelectorAll('.thumbnail-image');
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
    feiLongMoradoContainer.style.display = 'none';
    mBisonVerdeContainer.style.display = 'none';
    dhalsimGrisContainer.style.display = 'none';
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
  // ---------------------------------------------------------------------------------------------------------------------------------- evil ryu
  evilRyuButton.addEventListener('click', function () {
    showCharacter(evilRyuContainer, evilRyuThumbnails);
    setActiveTab(evilRyuButton);
  });
  // ------------------------------------------------------------------------------------------------------------------------------- violent ken
  violentKenButton.addEventListener('click', function () {
    showCharacter(violentKenContainer, violentKenThumbnails);
    setActiveTab(violentKenButton);
  });
  // ------------------------------------------------------------------------------------------------------------------- chun li rosa (player 2)
  chunLiRosaButton.addEventListener('click', function () {
    showCharacter(chunLiRosaContainer, chunLiRosaThumbnails);
    setActiveTab(chunLiRosaButton);
  });
  // ---------------------------------------------------------------------------------------------------------------- fei long morado (player 2)
  feiLongMoradoButton.addEventListener('click', function () {
    showCharacter(feiLongMoradoContainer, feiLongMoradoThumbnails);
    setActiveTab(feiLongMoradoButton);
  });
  // ----------------------------------------------------------------------------------------------------------------- m. bison verde (player 2)
  mBisonVerdeButton.addEventListener('click', function () {
    showCharacter(mBisonVerdeContainer, mBisonVerdeThumbnails);
    setActiveTab(mBisonVerdeButton);
  });
  // ----------------------------------------------------------------------------------------------------------------- dhalsim morado (player 2)
  dhalsimGrisButton.addEventListener('click', function () {
    showCharacter(dhalsimGrisContainer, dhalsimGrisThumbnails);
    setActiveTab(dhalsimGrisButton);
  });
  // Inicia con Evil Ryu seleccionado por defecto
  showCharacter(evilRyuContainer, evilRyuThumbnails);
  setActiveTab(evilRyuButton);
});
