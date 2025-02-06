document.addEventListener('DOMContentLoaded', function () {
  // Obtén las listas de personajes
  const ryuGrisItem = document.getElementById("ryugris");
  const kenBlancoItem = document.getElementById("kenblanco");
  const chunLiRojaItem = document.getElementById("chunliroja");
  const mbisonAzulItem = document.getElementById("mbisonazul");
  // Obtén los contenedores correspondientes
  const ryuGrisContainer = document.querySelector(".ryugris-container");
  const kenBlancoContainer = document.querySelector(".kenblanco-container");
  const chunLiRojaContainer = document.querySelector(".chunliroja-container");
  const mbisonazulContainer = document.querySelector(".mbisonazul-container");
  // Función para ocultar todos los contenedores
  function hideAllContainers() {
    ryuGrisContainer.style.display = "none";
    kenBlancoContainer.style.display = "none";
    chunLiRojaContainer.style.display = "none";
    mbisonazulContainer.style.display = "none";
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
    mbisonAzulItem.classList.remove('active');
    // Agrega la clase active al elemento seleccionado
    item.classList.add('active');
  }
  // Asignar los eventos a cada elemento de la lista
  // Ryu -------------------------------------------
  ryuGrisItem.addEventListener("click", function() {
    showContainer(ryuGrisContainer);
    setActiveItem(ryuGrisItem);
  });
  // Ken ---------------------------------------------
  kenBlancoItem.addEventListener("click", function() {
    showContainer(kenBlancoContainer);
    setActiveItem(kenBlancoItem);
  });
  // Chun Li ------------------------------------------
  chunLiRojaItem.addEventListener("click", function() {
    showContainer(chunLiRojaContainer);
    setActiveItem(chunLiRojaItem);
  });
  // M. Bison -----------------------------------------
  mbisonAzulItem.addEventListener("click", function() {
    showContainer(mbisonazulContainer);
    setActiveItem(mbisonAzulItem);
  });
  // Por defecto, mostrar a Ryu Gris (Player 2) al cargar la página y establecerlo como activo
  showContainer(ryuGrisContainer);
  setActiveItem(ryuGrisItem);
});
