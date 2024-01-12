import dataProyect from "./turismoCard.js";
const containerSlidrGrid = document.querySelectorAll(".slider-bento");
const model = document.getElementById("container-modal-swiper");
const closeModal = document.getElementById("close-modal");
const containerModal = document.getElementById("modal-proyect-wrapper");

function renderModal(img) {
  const ElementSlide = document.createElement("div");
  ElementSlide.classList.add("swiper-slide");
  ElementSlide.innerHTML = `
  <img src=${img} alt="name">
  `;
  return ElementSlide;
}

containerSlidrGrid.forEach((bento) => {
  bento.addEventListener("click", () => {
    model.classList.replace("d-none-swiper","active-modal-swiper")
    /*model.classList.remove("d-none");
    model.classList.add("active-modal-swiper")*/
    if (containerModal.children.length !== dataProyect.length) {
      dataProyect.forEach((data) => {
        const slider = renderModal(data.image);
        containerModal.appendChild(slider);
      });
    }
  });
});

closeModal.addEventListener("click",()=>{
    model.classList.replace("active-modal-swiper","d-none-swiper")
})