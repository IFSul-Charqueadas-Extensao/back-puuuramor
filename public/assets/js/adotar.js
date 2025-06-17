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