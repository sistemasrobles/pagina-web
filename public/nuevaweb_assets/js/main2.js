import dataProyect from "./cardProyect.js";
import renderCardProyect from "./renderCard2.js";

const SwiperPadre = document.getElementById("swiper-padre");

dataProyect.forEach((card) => {
    //creacion del div slider

    if(card.oxapampa==1){


       const ElementSlider = document.createElement("div");
        ElementSlider.classList.add("swiper-slide")
        //ingresamos el html correspondiente para el renderizado dinamico
        ElementSlider.appendChild(renderCardProyect(card))
        SwiperPadre.appendChild(ElementSlider);

    }
    
});