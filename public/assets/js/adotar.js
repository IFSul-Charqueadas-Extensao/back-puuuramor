const modalSaibaMais = document.querySelector("#saiba-mais");
const nome = document.querySelector("#modal-title");
const descricao = document.querySelector("#modal-description");
const btnWhatsapp = document.querySelector("#link-whatsapp");

const NUMERO_WHATSAPP = "559999999999"; // Altere com o número oficial

modalSaibaMais.addEventListener("show.bs.modal", function (e) {
  const idPet = e.relatedTarget.dataset.id;
  const modalError = document.querySelector("#modal-error");

  modalError.classList.add("d-none");
  modalError.textContent = "";

  axios.get(`${BASE_URL}/adotar/exibir/${idPet}`).then(response => {
    if (!response.data.status) {
      modalError.textContent = response.data.msg || "Erro ao carregar informações.";
      modalError.classList.remove("d-none");
      nome.textContent = "";
      descricao.textContent = "";
      btnWhatsapp.href = "#";
      return;
    }

    nome.textContent = response.data.pet.nome;
    descricao.textContent = response.data.pet.descricao;
    const mensagem = `Olá! Gostaria de adotar o pet ${response.data.pet.nome}.`;
    btnWhatsapp.href = `https://wa.me/${NUMERO_WHATSAPP}?text=${encodeURIComponent(mensagem)}`;
  }).catch(() => {
    modalError.textContent = "Erro ao buscar informações do pet.";
    modalError.classList.remove("d-none");
    nome.textContent = "";
    descricao.textContent = "";
    btnWhatsapp.href = "#";
  });
});
