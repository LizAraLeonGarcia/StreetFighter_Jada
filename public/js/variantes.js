document.addEventListener('DOMContentLoaded', function () {
  // Obtén las listas de personajes
  const ryuGrisItem = document.getElementById("ryugris");
  const kenBlancoItem = document.getElementById("kenblanco");
  const chunLiRojaItem = document.getElementById("chunliroja");
  const mBisonAzulItem = document.getElementById("mbisonazul");
  const guileAzulItem = document.getElementById("guileazul");
  // Obtén los contenedores correspondientes
  const ryuGrisContainer = document.querySelector(".ryugris-container");
  const kenBlancoContainer = document.querySelector(".kenblanco-container");
  const chunLiRojaContainer = document.querySelector(".chunliroja-container");
  const mBisonAzulContainer = document.querySelector(".mbisonazul-container");
  const guileAzulContainer = document.querySelector(".guileazul-container");
  // Función para ocultar todos los contenedores
  function hideAllContainers() {
    ryuGrisContainer.style.display = "none";
    kenBlancoContainer.style.display = "none";
    chunLiRojaContainer.style.display = "none";
    mBisonAzulContainer.style.display = "none";
    guileAzulContainer.style.display = "none";
  }
  // Función para mostrar el contenedor seleccionado
  function showContainer(container) {
    hideAllContainers();
    container.style.display = "block";
  }
  // Función para gestionar el cambio de la clase activa
  function setActiveItem(item) {
    // Remueve la clase active de todos los elementos
    ryuGrisItem.classList.remove('active');
    kenBlancoItem.classList.remove('active');
    chunLiRojaItem.classList.remove('active');
    mBisonAzulItem.classList.remove('active');
    guileAzulItem.classList.remove('active');
    // Agrega la clase active al elemento seleccionado
    item.classList.add('active');
  }
  // Asignar los eventos a cada elemento de la lista
  // Ryu ---------------------------------------------------------------------------------------------------------------------------------------
  ryuGrisItem.addEventListener("click", function() {
    showContainer(ryuGrisContainer);
    setActiveItem(ryuGrisItem);
  });
  // Ken ---------------------------------------------------------------------------------------------------------------------------------------
  kenBlancoItem.addEventListener("click", function() {
    showContainer(kenBlancoContainer);
    setActiveItem(kenBlancoItem);
  });
  // Chun Li -----------------------------------------------------------------------------------------------------------------------------------
  chunLiRojaItem.addEventListener("click", function() {
    showContainer(chunLiRojaContainer);
    setActiveItem(chunLiRojaItem);
  });
  // M. Bison ----------------------------------------------------------------------------------------------------------------------------------
  mBisonAzulItem.addEventListener("click", function() {
    showContainer(mBisonAzulContainer);
    setActiveItem(mBisonAzulItem);
  });
  // Guile -------------------------------------------------------------------------------------------------------------------------------------
  guileAzulItem.addEventListener("click", function() {
    showContainer(guileAzulContainer);
    setActiveItem(guileAzulItem);
  });
  // Por defecto, mostrar a Ryu Gris (Player 2) al cargar la página y establecerlo como activo
  showContainer(ryuGrisContainer);
  setActiveItem(ryuGrisItem);
});
