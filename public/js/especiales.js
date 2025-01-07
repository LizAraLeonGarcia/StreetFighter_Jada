document.addEventListener('DOMContentLoaded', function () {
  // Obtén las listas de personajes
  const evilRyuItem = document.getElementById("evilryu");
  const violentKenItem = document.getElementById("violentken");
  const chunLiPlayer2Item = document.getElementById("chunlirosa");
  // Obtén los contenedores correspondientes
  const evilRyuContainer = document.querySelector(".evilryu-container");
  const violentKenContainer = document.querySelector(".violentken-container");
  const chunLiPlayer2Container = document.querySelector(".chunlirosa-container");
  // Función para ocultar todos los contenedores
  function hideAllContainers() {
    evilRyuContainer.style.display = "none";
    violentKenContainer.style.display = "none";
    chunLiPlayer2Container.style.display = "none";
  }
  // Función para mostrar el contenedor seleccionado
  function showContainer(container) {
    hideAllContainers();
    container.style.display = "block";
  }
  // Función para gestionar el cambio de la clase activa
  function setActiveItem(item) {
    // Remueve la clase active de todos los elementos
    evilRyuItem.classList.remove('active');
    violentKenItem.classList.remove('active');
    chunLiPlayer2Item.classList.remove('active');
    // Agrega la clase active al elemento seleccionado
    item.classList.add('active');
  }
  // Asigna los eventos a cada elemento de la lista
  evilRyuItem.addEventListener("click", function() {
    showContainer(evilRyuContainer);
    setActiveItem(evilRyuItem);
  });

  violentKenItem.addEventListener("click", function() {
    showContainer(violentKenContainer);
    setActiveItem(violentKenItem);
  });

  chunLiPlayer2Item.addEventListener("click", function() {
    showContainer(chunLiPlayer2Container);
    setActiveItem(chunLiPlayer2Item);
  });
  // Por defecto, mostrar Evil Ryu al cargar la página y establecerlo como activo
  showContainer(evilRyuContainer);
  setActiveItem(evilRyuItem);
  // Inicializa Swiper
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    centeredSlides: true,
    initialSlide: 0,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
});
