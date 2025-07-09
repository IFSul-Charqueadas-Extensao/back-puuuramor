const modalSaibaMais = document.querySelector("#saiba-mais");
const nome = document.querySelector("#modal-title");
const descricao = document.querySelector("#modal-description");
const btnWhatsapp = document.querySelector("#link-whatsapp");

const NUMERO_WHATSAPP = "5551981536015"; // Altere com o número oficial

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
    localStorage.setItem('pet', response.data.pet.nome); // nome do pet pro formulario

    nome.textContent = response.data.pet.nome;
    descricao.textContent = response.data.pet.descricao;
  }).catch(() => {
    modalError.textContent = "Erro ao buscar informações do pet.";
    modalError.classList.remove("d-none");
    nome.textContent = "";
    descricao.textContent = "";
    btnWhatsapp.href = "#";
  });
});