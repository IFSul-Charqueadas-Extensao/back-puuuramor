const modalSaibaMais = document.querySelector("#saiba-mais");
const nome = document.querySelector("#modal-title");
const descricao = document.querySelector("#modal-description");
const btnWhatsapp = document.querySelector("#link-whatsapp");

//PREENCHER NUMERO
const NUMERO_WHATSAPP = "9999999999999";

modalSaibaMais.addEventListener("show.bs.modal", function (e) {
  const idPet = e.relatedTarget.dataset.id;

  const modalError = document.querySelector("#modal-error");
  modalError.classList.add("d-none");
  modalError.textContent = "";

  axios
    .get(`${BASE_URL}/apadrinhar/exibir/${idPet}`)
    .then((response) => {
      if (!response.data.status) {
        modalError.textContent =
          response.data.msg || "Erro ao carregar informações.";
        modalError.classList.remove("d-none");

        nome.textContent = "";
        descricao.textContent = "";
        btnWhatsapp.href = "#";
        return;
      }

      nome.textContent = response.data.pet.nome;
      descricao.textContent = response.data.pet.descricao;

      const mensagem = `Olá! Tenho interesse em apadrinhar o pet ${response.data.pet.nome}`;
      const url = `https://wa.me/${NUMERO_WHATSAPP}?text=${encodeURIComponent(
        mensagem
      )}`;
      btnWhatsapp.href = url;
    })
    .catch((error) => {
      console.error(error);
      modalError.textContent =
        "Erro ao buscar informações do pet. Tente novamente mais tarde.";
      modalError.classList.remove("d-none");

      nome.textContent = "";
      descricao.textContent = "";
      btnWhatsapp.href = "#";
    });
});
