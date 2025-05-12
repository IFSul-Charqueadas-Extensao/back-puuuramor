document.addEventListener("DOMContentLoaded", function () {
    // Seção de Animais Adotáveis
    const verMaisAdotaveis = document.getElementById("ver-mais");
    const verMenosAdotaveis = document.getElementById("ver-menos");
    const extraAdotaveis = document.getElementById("extra-adotaveis");

    if (verMaisAdotaveis && verMenosAdotaveis && extraAdotaveis) {
        verMaisAdotaveis.addEventListener("click", function () {
            extraAdotaveis.classList.remove("d-none");
            verMaisAdotaveis.classList.add("d-none");
            verMenosAdotaveis.classList.remove("d-none");
        });

        verMenosAdotaveis.addEventListener("click", function () {
            extraAdotaveis.classList.add("d-none");
            verMenosAdotaveis.classList.add("d-none");
            verMaisAdotaveis.classList.remove("d-none");
        });
    }

    // Seção de Animais Não Adotáveis
    const verMaisNaoAdotaveis = document.getElementById("ver-mais-nao-adotaveis");
    const verMenosNaoAdotaveis = document.getElementById("ver-menos-nao-adotaveis");
    const extraNaoAdotaveis = document.getElementById("extra-nao-adotaveis");

    if (verMaisNaoAdotaveis && verMenosNaoAdotaveis && extraNaoAdotaveis) {
        verMaisNaoAdotaveis.addEventListener("click", function () {
            extraNaoAdotaveis.classList.remove("d-none");
            verMaisNaoAdotaveis.classList.add("d-none");
            verMenosNaoAdotaveis.classList.remove("d-none");
        });

        verMenosNaoAdotaveis.addEventListener("click", function () {
            extraNaoAdotaveis.classList.add("d-none");
            verMenosNaoAdotaveis.classList.add("d-none");
            verMaisNaoAdotaveis.classList.remove("d-none");
        });
    }
});


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
    const modal = new bootstrap.Modal(document.getElementById('modalNoticia'));
    const modalTitle = document.getElementById('modalNoticiaLabel');
    const modalDescription = document.getElementById('modalDescricao');

    document.querySelectorAll('.saiba-mais').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault(); // impede o comportamento padrão
        event.stopPropagation(); // impede o evento de "vazar" para o carrossel

        const slide = this.closest('.carousel-item');

        const titulo = slide.getAttribute('data-bs-title');
        const descricao = slide.getAttribute('data-bs-description');

        modalTitle.textContent = titulo;
        modalDescription.textContent = descricao;

        modal.show();
      });
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


  document.addEventListener('DOMContentLoaded', function () {
    var adoptButtons = document.querySelectorAll('.btn[data-bs-toggle="modal"]');
    adoptButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var name = this.getAttribute('data-name');
            var description = this.getAttribute('data-description');
            var image = this.getAttribute('data-image');

            document.getElementById('modalAnimalName').innerText = name;
            document.getElementById('modalAnimalDescription').innerText = description;
            document.getElementById('modalAnimalImage').src = image;
        });
    });
});
