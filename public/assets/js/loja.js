const modalSaibaMais = document.querySelector("#saiba-mais");
const nome = document.querySelector("#modal-title");
const descricao = document.querySelector("#modal-description");
const btnCompra = document.querySelector("#link-compra");

modalSaibaMais.addEventListener("show.bs.modal", function (e) {
    const idProduto = e.relatedTarget.dataset.id;

    axios.get(`${BASE_URL}/loja/exibir/${idProduto}`)
        .then((response) => {
            if (!response.data.status) {
                nome.textContent = "Erro";
                descricao.textContent = response.data.msg || "Erro ao carregar informações.";
                btnCompra.href = "#";
                return;
            }

            const produto = response.data.produto;
            nome.textContent = produto.nome;
            descricao.textContent = produto.descricao;
            btnCompra.href = produto.link_compra;
        })
        .catch(() => {
            nome.textContent = "Erro";
            descricao.textContent = "Erro ao buscar informações.";
            btnCompra.href = "#";
        });
});
