document.addEventListener("DOMContentLoaded", async function () {
    const containerAdotaveis = document.getElementById("animal-container");
    const containerEspeciais = document.getElementById("especial-container");

    const verMaisAdotaveisBtn = document.getElementById("ver-mais");
    const verMenosAdotaveisBtn = document.getElementById("ver-menos");
    const verMaisEspeciaisBtn = document.getElementById("ver-mais-especiais");
    const verMenosEspeciaisBtn = document.getElementById("ver-menos-especiais");

    const cardsPorPagina = 12;
    let paginaAtualAdotaveis = 0;
    let paginaAtualEspeciais = 0;

    // Função para buscar os dados da API
    async function carregarAnimais() {
        try {
            const response = await fetch('https://seu-backend.com/api/animais'); // Substitua pela URL real
            const dados = await response.json();

            // Dividir animais por categoria
            const animaisAdotaveis = dados.filter(a => a.categoria !== 'especial');
            const animaisEspeciais = dados.filter(a => a.categoria === 'especial');

            // Renderiza ambas as seções
            renderPagina(containerAdotaveis, animaisAdotaveis, paginaAtualAdotaveis, verMaisAdotaveisBtn, verMenosAdotaveisBtn);
            renderPagina(containerEspeciais, animaisEspeciais, paginaAtualEspeciais, verMaisEspeciaisBtn, verMenosEspeciaisBtn);

            // Botões "Ver mais/menos"
            configurarBotoes(animaisAdotaveis, animaisEspeciais);

        } catch (erro) {
            console.error("Erro ao carregar animais:", erro);
            containerAdotaveis.innerHTML = "<p class='text-danger'>Erro ao carregar animais.</p>";
            containerEspeciais.innerHTML = "<p class='text-danger'>Erro ao carregar animais especiais.</p>";
        }
    }

    function criarCard(animal) {
        const col = document.createElement("div");
        col.className = "col-md-4 mb-4";
        col.innerHTML = `
            <div class="card">
                <img src="${animal.imagem}" class="card-img-top" alt="${animal.nome}">
                <div class="card-body">
                    <h5 class="card-title">${animal.nome}</h5>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#adoptModal"
                        data-name="${animal.nome}"
                        data-description="${animal.descricao}"
                        data-image="${animal.imagem}">
                        <div class="wrapper-button">
                            <div class="adotar"></div>
                        </div>
                    </button>
                </div>
            </div>
        `;
        return col;
    }

    function renderPagina(container, animais, paginaAtual, verMaisBtn, verMenosBtn) {
        container.innerHTML = '';

        const inicio = 0;
        const fim = (paginaAtual + 1) * cardsPorPagina;

        if (animais.length === 0) {
            const msg = document.createElement("p");
            msg.className = "text-center text-muted";
            msg.innerText = "Nenhum animal cadastrado.";
            container.appendChild(msg);
            verMaisBtn.classList.add("d-none");
            verMenosBtn.classList.add("d-none");
            return;
        }

        const animaisPagina = animais.slice(inicio, fim);

        const row = document.createElement("div");
        row.className = "row pagina-animais";

        animaisPagina.forEach(animal => {
            row.appendChild(criarCard(animal));
        });

        container.appendChild(row);

        if (animais.length > fim) {
            verMaisBtn.classList.remove("d-none");
        } else {
            verMaisBtn.classList.add("d-none");
        }

        if (paginaAtual > 0) {
            verMenosBtn.classList.remove("d-none");
        } else {
            verMenosBtn.classList.add("d-none");
        }

        adoptButtonsListener();
    }

    function configurarBotoes(animaisAdotaveis, animaisEspeciais) {
        verMaisAdotaveisBtn.addEventListener("click", () => {
            paginaAtualAdotaveis++;
            renderPagina(containerAdotaveis, animaisAdotaveis, paginaAtualAdotaveis, verMaisAdotaveisBtn, verMenosAdotaveisBtn);
        });

        verMenosAdotaveisBtn.addEventListener("click", () => {
            if (paginaAtualAdotaveis > 0) {
                paginaAtualAdotaveis--;
                renderPagina(containerAdotaveis, animaisAdotaveis, paginaAtualAdotaveis, verMaisAdotaveisBtn, verMenosAdotaveisBtn);
            }
        });

        verMaisEspeciaisBtn.addEventListener("click", () => {
            paginaAtualEspeciais++;
            renderPagina(containerEspeciais, animaisEspeciais, paginaAtualEspeciais, verMaisEspeciaisBtn, verMenosEspeciaisBtn);
        });

        verMenosEspeciaisBtn.addEventListener("click", () => {
            if (paginaAtualEspeciais > 0) {
                paginaAtualEspeciais--;
                renderPagina(containerEspeciais, animaisEspeciais, paginaAtualEspeciais, verMaisEspeciaisBtn, verMenosEspeciaisBtn);
            }
        });
    }

        function adoptButtonsListener() {
        const buttons = document.querySelectorAll('.btn[data-bs-toggle="modal"]');
        buttons.forEach(button => {
            if (!button.dataset.listenerAdded) {
            button.addEventListener('click', function () {
                const name = this.getAttribute('data-name');
                const description = this.getAttribute('data-description');
                const image = this.getAttribute('data-image');

                document.getElementById('modalAnimalName').innerText = name;
                document.getElementById('modalAnimalDescription').innerText = description;
                document.getElementById('modalAnimalImage').src = image;

                const modalBody = document.querySelector('.modal-body');
                modalBody.querySelectorAll('.btn-contato')?.forEach(btn => btn.remove());

                const whatsappBtn = document.createElement('a');
                // Mensagem personalizada no WhatsApp:
                const mensagem = encodeURIComponent(`Olá, gostaria de adotar "${name}"`);
                whatsappBtn.href = `https://wa.me/5599999999999?text=${mensagem}`;
                whatsappBtn.target = '_blank';
                whatsappBtn.className = 'btn btn-success me-2 btn-contato';
                whatsappBtn.innerText = 'Falar no WhatsApp';

                const instaBtn = document.createElement('a');
                instaBtn.href = 'https://www.instagram.com/projeto.puuuramor/';
                instaBtn.target = '_blank';
                instaBtn.className = 'btn btn-primary btn-contato';
                instaBtn.innerText = 'Ver no Instagram';

                modalBody.appendChild(whatsappBtn);
                modalBody.appendChild(instaBtn);
            });
            button.dataset.listenerAdded = "true";
            }
        });
        }

    // Carregar ao iniciar
    await carregarAnimais();
});

document.getElementById('btn-voltar').addEventListener('click', () => {
  window.location.href = 'home.php'; // Ou o caminho da sua página inicial
});
