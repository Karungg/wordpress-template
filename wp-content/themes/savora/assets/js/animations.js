document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("load", function () {
    let revealContainers = document.querySelectorAll(".reveal");

    revealContainers.forEach((element) => {
      if (element.offsetParent !== null) {
        element.style.visibility = 'hidden';
      }
    });
        
    revealContainers.forEach((container) => {
      let image = container.querySelector("figure > img");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          toggleActions: "play none none none",
        }
      });
      tl.set(container, { autoAlpha: 1 });
      tl.from(container, 1.5, {
        xPercent: -100,
        ease: Power2.out
      });
      tl.from(image, 1.5, {
        xPercent: 100,
        scale: 1.3,
        delay: -1.5,
        ease: Power2.out
      });
    });
  })
});