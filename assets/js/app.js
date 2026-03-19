import "../css/app.css";
import Alpine from "/node_modules/alpinejs/dist/module.esm.js";

// import Swiper JS
import Swiper from "swiper";
// import Swiper styles
import "swiper/css";

window.Alpine = Alpine;
Alpine.start();

document.querySelectorAll(".swiper").forEach((el) => {
  const autoplay = el.dataset.autoplay === "true";

  new Swiper(el, {
    loop: true,
    autoplay: autoplay
      ? {
          delay: 3000,
        }
      : false,
    pagination: {
      el: el.querySelector(".swiper-pagination"),
      clickable: true,
    },
    navigation: {
      nextEl: el.querySelector(".swiper-button-next"),
      prevEl: el.querySelector(".swiper-button-prev"),
    },
  });
});
