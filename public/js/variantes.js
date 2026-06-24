document.addEventListener('DOMContentLoaded', function () {
  // -------------------------------------------------- Obtención de las listas de personajes --------------------------------------------------
  const ryuGrisItem = document.getElementById("ryuGris");
  const kenBlancoItem = document.getElementById("kenBlanco");
  const chunLiRojaItem = document.getElementById("chunLiRoja");
  const mBisonAzulItem = document.getElementById("mBisonAzul");
  const guileAzulItem = document.getElementById("guileAzul");
  const cammyGrisItem = document.getElementById("cammyGris");
  const blankaAzulItem = document.getElementById("blankaAzul");
  // ------------------------------------------------------ Obtención de los contenedores ------------------------------------------------------
  const ryuGrisContainer = document.querySelector(".ryuGris-container");
  const kenBlancoContainer = document.querySelector(".kenBlanco-container");
  const chunLiRojaContainer = document.querySelector(".chunLiRoja-container");
  const mBisonAzulContainer = document.querySelector(".mBisonAzul-container");
  const guileAzulContainer = document.querySelector(".guileAzul-container");
  const cammyGrisContainer = document.querySelector(".cammyGris-container");
  const blankaAzulContainer = document.querySelector(".blankaAzul-container");
  // Función para ocultar todos los contenedores
  function hideAllContainers() {
    ryuGrisContainer.style.display = "none";
    kenBlancoContainer.style.display = "none";
    chunLiRojaContainer.style.display = "none";
    mBisonAzulContainer.style.display = "none";
    guileAzulContainer.style.display = "none";
    cammyGrisContainer.style.display = "none";
    blankaAzulContainer.style.display = "none";
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
    cammyGrisItem.classList.remove('active');
    blankaAzulItem.classList.remove('active');
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
  // Cammy -------------------------------------------------------------------------------------------------------------------------------------
  cammyGrisItem.addEventListener("click", function() {
    showContainer(cammyGrisContainer);
    setActiveItem(cammyGrisItem);
  });
  // Blanka -------------------------------------------------------------------------------------------------------------------------------------
  blankaAzulItem.addEventListener("click", function() {
    showContainer(blankaAzulContainer);
    setActiveItem(blankaAzulItem);
  });
  // ---------------------------------------------------------- Por defecto, mostrar a Ryu Gris al cargar la página y establecerlo como activo --
  showContainer(ryuGrisContainer);
  setActiveItem(ryuGrisItem);
});
