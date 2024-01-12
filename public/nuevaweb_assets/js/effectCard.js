const cardAll = document.querySelectorAll(".card-valores")
cardAll.forEach(card =>{
    const transparentHover = card.children[0];
    const title = card.children[1]
    card.addEventListener("mouseover",()=>{
        title.classList.add("d-none")
        transparentHover.classList.remove("d-none")
    });

    card.addEventListener("mouseleave",()=>{
        transparentHover.classList.add("d-none")
        title.classList.remove("d-none")
    })
})