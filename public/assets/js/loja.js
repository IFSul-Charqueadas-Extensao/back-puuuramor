
//veja mais
document.getElementById("load-more").addEventListener("click", function() {
    let container = document.getElementById("product-container");
    for (let i = 0; i < 6; i++) {
        let col = document.createElement("div");
        col.className = "col";
        col.innerHTML = `
            <div class="card product-card">
                <h5 class="card-title">Ração Premium</h5>
                <img src="produto${Math.floor(Math.random() * 3) + 1}.jpg" alt="Produto 1">
                <p class="price">R$ 49,90</p>
                <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                </div>
            </div>
        `;
        container.appendChild(col);
    }
});

//botao comprar
document.getElementById("meuBotao").addEventListener("click", function() {
    window.open("https://www.amazon.com.br/Golden-Special-Frango-Adultos-Premier/dp/B085P2K7KB/ref=asc_df_B085P2K7KB?mcid=44d2cf1ac0e63b93bca066693a9d288f&tag=googleshopp00-20&linkCode=df0&hvadid=709857462939&hvpos=&hvnetw=g&hvrand=3636660543190484227&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001686&hvtargid=pla-1435248116320&psc=1&language=pt_BR&gad_source=1", "_blank");
});


