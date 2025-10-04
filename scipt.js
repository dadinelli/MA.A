/*const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button =>{
    button.addEventListener("click", ()=>{
        const offset = button.dataset.carouselButton === "next" ? 1 : -1
        const slides = button
        .closest("[data-carousel]")
        .querySelector("[data-slides]")

        const activeSlide = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(activeSlide) + offset
        if (newIndex < 0) newIndex = slides.children.length - 1
        if (newIndex >= slides.children.length) newIndex = 0

        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active
    })
})

document.addEventListener("DOMContentLoaded", () => {
  const activeSlide = document.querySelector(".carousel .slide[data-active]");
  if (activeSlide) {
    activeSlide.scrollIntoView({
      behavior: "instant", // oppure "smooth" se vuoi animato
      inline: "start",     // lo porta all'inizio orizzontale
      block: "nearest"
    });
  }
});*/

document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll("[data-carousel-button]");
  const carousel = document.querySelector("[data-slides]");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const offset = button.dataset.carouselButton === "next" ? 1 : -1;
      const slides = [...carousel.querySelectorAll(".slide")];
      const activeSlide = carousel.querySelector("[data-active]");
      let newIndex = slides.indexOf(activeSlide) + offset;

      // cicla avanti/indietro
      if (newIndex < 0) newIndex = slides.length - 1;
      if (newIndex >= slides.length) newIndex = 0;

      // aggiorna il data-active
      activeSlide.removeAttribute("data-active");
      slides[newIndex].setAttribute("data-active", "");

      // scrolla il nuovo attivo all’inizio
      slides[newIndex].scrollIntoView({
        behavior: "smooth",
        inline: "start",
        block: "nearest"
      });
    });
  });
})


document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowRight') {
        document.getElementById('next').click();
    }
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowLeft') {
        document.getElementById('prev').click();
    }
});