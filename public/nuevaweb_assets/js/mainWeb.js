import dataProyect from "./cardProyect.js?v=12";
import renderCardProyect from "./renderCardWeb.js";

const SwiperPadre = document.getElementById("swiper-padre");

dataProyect.forEach((card) => {
    
    const ElementSlider = document.createElement("div");
        ElementSlider.classList.add("swiper-slide")
        //ingresamos el html correspondiente para el renderizado dinamico
        ElementSlider.appendChild(renderCardProyect(card))
        SwiperPadre.appendChild(ElementSlider);
    
});