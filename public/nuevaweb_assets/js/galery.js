const btnAll = document.querySelectorAll(".btn-galery-view");

const optionGalery = {
  fotos: document.getElementById("fotos-swiper"),
  videos: document.getElementById("video-proyect"),
};

btnAll.forEach((btn) => {
  //logica botones
  btn.addEventListener("click", () => {
    btnAll.forEach((btndesactive) =>
      btndesactive.classList.remove("active-option-galery")
    );
    btn.classList.add("active-option-galery");
    //logica mostrar tipo de galerya segun opciones
    const contenido = btn.textContent.trim().toLowerCase();
    if (contenido) {
      let valoresGalery = Object.values(optionGalery);
      valoresGalery.forEach((option) =>
        option.classList.remove("active-view-galery")
      );
      optionGalery[contenido].classList.add("active-view-galery");
      if (contenido === "videos") {
        videoYoutube.classList.add("d-none");
        imageVideo.classList.remove("d-none");
        btnPlay.classList.remove("d-none");
      }
    }
  });
});

// nueva reproducion con api integrado
let player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player("youtube-frame-proyect", {
    height: "360",
    width: "100%",
    videoId: video_unico_proyecto,
    playerVars: {
      autoplay: 0, // 0 para no reproducir automáticamente
      controls: 1,
    },
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange,
    },
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  player.stopVideo();
}

var done = false;

/**video play */
const btnPlay = document.getElementById("play-video-galery");
const videoYoutube = document.getElementById("video-youtube-galery");
const imageVideo = document.getElementById("image-video-proyect");
//evento btn
btnPlay.addEventListener("click", function (e) {
  videoYoutube.classList.remove("d-none");
  imageVideo.classList.add("d-none");
  btnPlay.classList.add("d-none");
  player.playVideo();
});

function onPlayerStateChange(event) {
}

btnAll[0].addEventListener("click", () => {
  player.stopVideo();
});