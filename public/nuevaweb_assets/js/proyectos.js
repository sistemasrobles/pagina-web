import dataProyect from "./cardProyect.js?v=2132333";
import renderCardProyect from "./renderCardWeb.js";

const btnBuscarProyect = document.getElementById("buscar-proyecto");
const ubicacionOption = document.getElementById("proyecto");
const typeProyectOption = document.getElementById("typeProyect");
const containerProyect = document.getElementById("container-proyect-filter");

dataProyect.forEach((card) => {
  const elementCard = renderCardProyect(card);
  containerProyect.appendChild(elementCard);
});

btnBuscarProyect.addEventListener("click", (e) => {
  // ubicaciones del proyecto

  const valorUbicacionProyect = ubicacionOption.value;
  const valorTipoProyect = typeProyectOption.value;



  //filtrado dinamico
  while (containerProyect.firstChild) {
    containerProyect.removeChild(containerProyect.firstChild);
  }

  // filtrado en prueba


  dataProyect.forEach((card) => {



    if ( (card.tipo == valorUbicacionProyect || valorUbicacionProyect =='')   &&  (card.tipoProyecto == valorTipoProyect || valorTipoProyect =='') ) 
    {

      const elementCard = renderCardProyect(card);
      containerProyect.appendChild(elementCard);
    }
  });
});
