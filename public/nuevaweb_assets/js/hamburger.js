const btnHamburger = document.getElementById("btn-hamburger")
const linkNav = document.getElementById("list-navegacion-header")
const header = document.getElementById("header")

btnHamburger.addEventListener("click",(e)=>{

  linkNav.classList.toggle("nav-mobil");
  linkNav.classList.toggle("no-view");
  
    //linkNav.classList.replace("no-view","nav-mobil");
})