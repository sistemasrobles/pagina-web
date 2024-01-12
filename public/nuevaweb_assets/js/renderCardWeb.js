function renderCardProyect(card) {
    const ElementCard = document.createElement("div");
    ElementCard.innerHTML = `
    <a href=${card.url_web}> <div  class="text-white bg-slider-${card.id} card-proyectos p-4 d-flex flex-column justify-content-between ">
          <span style="max-width: max-content" class="px-4 fs-5 py-2 border border-white btn text-white">${card.tipo}</span>
         
          <div >
            <h2 class="name-proyect  ">${card.title}</h2>
            <p>${card.ubicacion}</p>

            <span class="d-flex gap-2 container-btn-card">
              <button class="btn color-green w-100  py-2 px-4 text-white " >${card.estado}</button>
              <button class="btn  bg bg-white text-dark border w-100" >${card.metraje}m<sup>2</sup></button>
            </span>
          </div>
        </div> </a>
      `;
      // styled new card
      ElementCard.children[0].children[0].style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(${card.image})`;
      ElementCard.children[0].children[0].style.backgroundPosition = "center center";
      ElementCard.children[0].children[0].style.backgroundSize = "cover";
      ElementCard.children[0].children[0].style.backgroundRepeat = "no repeat"
    

 


    return ElementCard;
}

export default renderCardProyect;