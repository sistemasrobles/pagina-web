const viewPropiedades = document.getElementById("view-propiedades");
const modalHeader = document.getElementById("modal-header");
const cardProyecto = document.querySelectorAll(".card-proyect-header");
//const cardProyecto = document.querySelectorAll(".container-img-proyect");




viewPropiedades.addEventListener("mouseenter", function (e) {
  modalHeader.classList.add("active-modal-header");
  modalHeader.scrollTop = 0;
});

modalHeader.addEventListener("mouseenter", function (e) {
  modalHeader.classList.add("active-modal-header");
});

modalHeader.addEventListener("mouseleave", (e) => {
  isModal = false;
  modalHeader.classList.remove("active-modal-header");
});

cardProyecto.forEach((card) => {
  const infoTextCard = card.children[0].querySelector(".info-absolute-card");
  card.addEventListener("mouseout", () => {
    if (infoTextCard) {
      infoTextCard.classList.add("active-info-card-header");
    }
  });

  card.addEventListener("mouseleave", (e) => {
    if (infoTextCard) {
        infoTextCard.classList.remove("active-info-card-header");
        
      }
  });
});
