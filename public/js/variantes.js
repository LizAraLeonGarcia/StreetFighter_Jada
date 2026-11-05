document.addEventListener('DOMContentLoaded', function () {
  const variantes = document.getElementById('variantes');

    if (!variantes) {
        return;
    }
  // -------------------------------------------------- Obtención de las listas de personajes --------------------------------------------------
  const chunliItem = document.getElementById("chunli");
  const vegaItem = document.getElementById("vega");
  const cammyItem = document.getElementById("cammy");
  const guileItem = document.getElementById("guile");
  const dhalsimItem = document.getElementById("dhalsim");
  const ryuItem = document.getElementById("ryu");
  const kenItem = document.getElementById("ken");
  const blankaItem = document.getElementById("blanka");
  const mbisonItem = document.getElementById("mbison");
  const zangiefItem = document.getElementById("zangief");
  const balrogItem = document.getElementById("balrog");
  // ------------------------------------------------------ Obtención de los contenedores ------------------------------------------------------
  const chunliContainer = document.querySelector(".chunli-container");
  const vegaContainer = document.querySelector(".vega-container");
  const cammyContainer = document.querySelector(".cammy-container");
  const guileContainer = document.querySelector(".guile-container");
  const dhalsimContainer = document.querySelector(".dhalsim-container");
  const ryuContainer = document.querySelector(".ryu-container");
  const kenContainer = document.querySelector(".ken-container");
  const blankaContainer = document.querySelector(".blanka-container");
  const mbisonContainer = document.querySelector(".mbison-container");
  const zangiefContainer = document.querySelector(".zangief-container");
  const balrogContainer = document.querySelector(".balrog-container");
  // Función para ocultar todos los contenedores
  function hideAllContainers() {
    chunliContainer.style.display = "none";
    vegaContainer.style.display = "none";
    cammyContainer.style.display = "none";
    guileContainer.style.display = "none";
    dhalsimContainer.style.display = "none";
    ryuContainer.style.display = "none";
    kenContainer.style.display = "none";
    blankaContainer.style.display = "none";
    mbisonContainer.style.display = "none";
    zangiefContainer.style.display = "none";
    balrogContainer.style.display = "none";
  }
  // Función para mostrar el contenedor seleccionado
  function showContainer(container) {
    hideAllContainers();
    container.style.display = "block";
  }
  // Función para gestionar el cambio de la clase activa
  function setActiveItem(item) {
    // Remueve la clase active de todos los elementos
    chunliItem.classList.remove('active');
    vegaItem.classList.remove('active');
    cammyItem.classList.remove('active');
    guileItem.classList.remove('active');
    dhalsimItem.classList.remove('active');
    ryuItem.classList.remove('active');
    kenItem.classList.remove('active');
    blankaItem.classList.remove('active');
    mbisonItem.classList.remove('active');
    zangiefItem.classList.remove('active');
    balrogItem.classList.remove('active');
    // Agrega la clase active al elemento seleccionado
    item.classList.add('active');
  }
  // Asignar los eventos a cada elemento de la lista
  // Chun Li -----------------------------------------------------------------------------------------------------------------------------------
  chunliItem.addEventListener("click", function() {
    showContainer(chunliContainer);
    setActiveItem(chunliItem);
  });
  // Vega --------------------------------------------------------------------------------------------------------------------------------------
  vegaItem.addEventListener("click", function() {
    showContainer(vegaContainer);
    setActiveItem(vegaItem);
  });
  // Cammy -------------------------------------------------------------------------------------------------------------------------------------
  cammyItem.addEventListener("click", function() {
    showContainer(cammyContainer);
    setActiveItem(cammyItem);
  });
  // Guile -------------------------------------------------------------------------------------------------------------------------------------
  guileItem.addEventListener("click", function() {
    showContainer(guileContainer);
    setActiveItem(guileItem);
  });
  // Dhalsim -----------------------------------------------------------------------------------------------------------------------------------
  dhalsimItem.addEventListener("click", function() {
    showContainer(dhalsimContainer);
    setActiveItem(dhalsimItem);
  });
  // Ryu ---------------------------------------------------------------------------------------------------------------------------------------
  ryuItem.addEventListener("click", function() {
    showContainer(ryuContainer);
    setActiveItem(ryuItem);
  });
  // Ken ---------------------------------------------------------------------------------------------------------------------------------------
  kenItem.addEventListener("click", function() {
    showContainer(kenContainer);
    setActiveItem(kenItem);
  });
  // Blanka -------------------------------------------------------------------------------------------------------------------------------------
  blankaItem.addEventListener("click", function() {
    showContainer(blankaContainer);
    setActiveItem(blankaItem);
  });
  // M. Bison ----------------------------------------------------------------------------------------------------------------------------------
  mbisonItem.addEventListener("click", function() {
    showContainer(mbisonContainer);
    setActiveItem(mbisonItem);
  });
  // Zangief -----------------------------------------------------------------------------------------------------------------------------------
  zangiefItem.addEventListener("click", function() {
    showContainer(zangiefContainer);
    setActiveItem(zangiefItem);
  });
  // Balrog ------------------------------------------------------------------------------------------------------------------------------------
  balrogItem.addEventListener("click", function() {
    showContainer(balrogContainer);
    setActiveItem(balrogItem);
  });
  // ---------------------------------------------------------- Por defecto, mostrar a Ryu Gris al cargar la página y establecerlo como activo --
  showContainer(chunliContainer);
  setActiveItem(chunliItem);
});
