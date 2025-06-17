// Header com cor dinamica
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const carouselSection = document.getElementById("carousel");

    window.addEventListener("scroll", function () {
        const carouselPosition = carouselSection.offsetTop; 
        const scrollPosition = window.scrollY; 

        if (scrollPosition >= carouselPosition - 100) { 
            navbar.style.backgroundColor = "#8c7db1"; 
        } else {
            navbar.style.backgroundColor = "transparent"; 
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('carousel');
    let startX = 0;

    carousel.addEventListener('touchstart', function (e) {
      startX = e.touches[0].clientX;
    });

    carousel.addEventListener('touchmove', function (e) {
      if (!startX) return;
      let diffX = startX - e.touches[0].clientX;

      if (Math.abs(diffX) > 50) { // Sensibilidade do swipe
        if (diffX > 0) {
          bootstrap.Carousel.getInstance(carousel).next();
        } else {
          bootstrap.Carousel.getInstance(carousel).prev();
        }
        startX = 0;
      }
    });

    carousel.addEventListener('touchend', function () {
      startX = 0;
    });
  });


