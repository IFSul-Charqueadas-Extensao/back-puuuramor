const modalResgates = document.querySelector("#modalResgate");
const titulo = document.querySelector("#modal-title");
const descricao = document.querySelector("#modal-description");
const fotoAntes = document.querySelector("#modal-foto-antes");
const fotoDepois = document.querySelector("#modal-foto-depois");
const btnWhatsapp = document.querySelector("#link-whatsapp");

// Número de WhatsApp para contato (troque pelo real)
const NUMERO_WHATSAPP = "99999999999";

// Evento ao abrir o modal (Bootstrap 5)
modalResgates.addEventListener("show.bs.modal", function (e) {
  const idResgate = e.relatedTarget.dataset.id;

  const modalError = document.querySelector("#modal-error");
  modalError.classList.add("d-none");
  modalError.textContent = "";

  axios
    .get(`${BASE_URL}/resgates/exibir/${idResgate}`)
    .then((response) => {
      if (!response.data.status) {
        modalError.textContent =
          response.data.msg || "Erro ao carregar informações.";
        modalError.classList.remove("d-none");

        titulo.textContent = "";
        descricao.textContent = "";
        fotoAntes.src = "";
        fotoDepois.src = "";
        btnWhatsapp.href = "#";
        return;
      }

      const resgate = response.data.resgate;
      titulo.textContent = resgate.titulo;
      descricao.textContent = resgate.descricao;

      fotoAntes.src = `${BASE_URL}/uploads/resgates/${resgate.foto_antes}`;
      fotoDepois.src = `${BASE_URL}/uploads/resgates/${resgate.foto_depois}`;

      const mensagem = `Olá! Quero saber mais sobre a história de resgate: ${resgate.titulo}`;
      const url = `https://wa.me/${NUMERO_WHATSAPP}?text=${encodeURIComponent(
        mensagem
      )}`;
      btnWhatsapp.href = url;
    })
    .catch((error) => {
      console.error(error);
      modalError.textContent =
        "Erro ao buscar informações do resgate. Tente novamente mais tarde.";
      modalError.classList.remove("d-none");

      titulo.textContent = "";
      descricao.textContent = "";
      fotoAntes.src = "";
      fotoDepois.src = "";
      btnWhatsapp.href = "#";
    });
});
