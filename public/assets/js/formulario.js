const btnWhatsapp = document.querySelector("#link-whatsapp");

// Dados Pessoais
const nome = document.querySelector("#nome");
const dataNascimento = document.querySelector("#data-nascimento");
const cpf = document.querySelector("#cpf");
const rg = document.querySelector("#rg");
const profissao = document.querySelector("#profissao");
const enderecoCompleto = document.querySelector("#endereco");
const bairro = document.querySelector("#bairro");
const cidadeEstado = document.querySelector("#cidade-estado");
const cep = document.querySelector("#cep");
const email = document.querySelector("#email");
const instagramFacebook = document.querySelector("#instagram-facebook");
const comoConheceuProjeto = document.querySelector("#como-conheceu");

// Ambiente do Lar
const moraEmCasa = document.querySelector("#mora_em_casa");
const moraEmApartamento = document.querySelector("#mora_em_apartamento");
const moraEmOutro = document.querySelector("#mora_em_outro");
const imovelProprio = document.querySelector("#imovel_proprio");
const imovelAlugado = document.querySelector("#imovel_alugado");
const imovelCedido = document.querySelector("#imovel_cedido");
const proprietarioAutorizaAnimaisSim = document.querySelector("#sim");
const proprietarioAutorizaAnimaisNao = document.querySelector("#nao");
const proprietarioAutorizaAnimaisNaoSeAplica = document.querySelector("#nao_se_aplica");
const casaSeguraParaGatosSim = document.querySelector("#sim_gatos");
const casaSeguraParaGatosNao = document.querySelector("#nao_gatos");
const pretendoTelar = document.querySelector("#pretendo_telar");
const haCriancasSim = document.querySelector("#sim_criancas");
const idadeCriancas = document.querySelector("#idades_criancas");
const haCriancasNao = document.querySelector("#nao_criancas");
const haOutrosAnimaisSim = document.querySelector("#sim_outros");
const outrosAnimais = document.querySelector("#especificar_outros_animais")
const haOutrosAnimaisNao = document.querySelector("#nao_outros");

  const nomePet = localStorage.getItem('pet');

  const NUMERO_WHATSAPP = "5551981536015"; 
document.getElementById("link-whatsapp").addEventListener("click", function () {
    let mensagem;
    let concatena;
    mensagem = `Olá! Gostaria de adotar o pet ${nomePet}. `;
    concatena = `Meu nome é ${nome.value}, `
    mensagem = mensagem + concatena;
    concatena = `nasci dia ${dataNascimento.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `Meu CPF é ${cpf.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `meu RG é ${rg.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `trabalho de ${profissao.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `sou de ${cidadeEstado.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `do bairro de ${bairro.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `da rua de ${bairro.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `meu CEP é ${cep.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `meu email é ${email.value}, ` 
    mensagem = mensagem + concatena;
    concatena = `${comoConheceuProjeto.value} `
    mensagem = mensagem + concatena;
    if(instagramFacebook.value === ""){
        concatena = `não tenho instagram ou facebook, ` 
        mensagem = mensagem + concatena;
    }else{
        concatena = `minha conta no insta/facebook é ${instagramFacebook.value}. ` 
        mensagem = mensagem + concatena;
    }

    if(moraEmCasa.checked){
        concatena = `Eu moro em uma casa. `;
        mensagem = mensagem + concatena;
    }else if(moraEmApartamento.checked){
        concatena = `Eu moro em um apartamento. `;
        mensagem = mensagem + concatena;
    }else if (moraEmOutro.checked){
        concatena = `Eu moro em um(a) ${moraEmOutro.value}. ` ;
        mensagem = mensagem + concatena;
    }
    if(imovelProprio.checked){
        concatena = "meu imovel é próprio. ";
        mensagem = mensagem + concatena;
    }else if (imovelAlugado.checked){
        concatena = "meu imovel é alugado. ";
        mensagem = mensagem + concatena;
    }else if (imovelCedido.checked){
        concatena = "meu imovel é cedido. ";
        mensagem = mensagem + concatena;
    }
    if(proprietarioAutorizaAnimaisSim.checked){
        concatena = "O proprietario autoriza animais. ";
        mensagem = mensagem + concatena;
    }else if(proprietarioAutorizaAnimaisNao.checked){
        concatena = "O proprietario não autoriza animais. ";
        mensagem = mensagem + concatena;
    }else if(proprietarioAutorizaAnimaisNaoSeAplica.checked){
        concatena = "";
        mensagem = mensagem + concatena;
    }
    if(casaSeguraParaGatosSim.check){
        concatena = `A propriedade é segura/telada para animais. ` ;
        mensagem = mensagem + concatena;
    }else if(pretendoTelar.check){
        concatena = `A propriedade ainda não é segura/telada para animais, mas pretendo telar. ` ;
        mensagem = mensagem + concatena;
    }else{
        concatena = `A propriedade não é segura/telada para animais. ` ;
        mensagem = mensagem + concatena;
    }
    if(haCriancasSim.check){
        concatena = `Eu tenho criança(s), de idade(s) ${idadeCriancas}. ` ;
        mensagem = mensagem + concatena;
    }else{
        concatena = `Não tenho crianças. `;
        mensagem = mensagem + concatena;
    }
    if(haOutrosAnimaisSim.check){
        concatena = `Sim, tenho: ${outrosAnimais}. `;
        mensagem = mensagem + concatena;
    }else{
        concatena = `Não tenho outros animais. `;
        mensagem = mensagem + concatena;
    }
    const link = `https://wa.me/${NUMERO_WHATSAPP}?text=${encodeURIComponent(mensagem)}`;
    window.open(link, "_blank");
});