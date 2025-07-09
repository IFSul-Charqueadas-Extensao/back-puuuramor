<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">

    <script defer src="<?= base_url('assets/js/formulario.js') ?>"></script>
    <title>Formulario | Puuuramor</title>
    <script>const BASE_URL = "<?= base_url() ?>";</script>
</head>

<body>
   <div class="container mt-5">
        <h2>Formulário de Cadastro</h2>
        <form>
            <!-- Nome Completo -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <!-- Data de Nascimento -->
            <div class="mb-3">
                <label for="data-nascimento" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data-nascimento" name="data-nascimento" required>
            </div>

            <!-- CPF -->
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>

            <!-- RG -->
            <div class="mb-3">
                <label for="rg" class="form-label">RG:</label>
                <input type="text" class="form-control" id="rg" name="rg" required>
            </div>

            <!-- Profissão -->
            <div class="mb-3">
                <label for="profissao" class="form-label">Profissão:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" required>
            </div>

            <!-- Endereço Completo -->
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço Completo:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <!-- Bairro -->
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>

            <!-- Cidade/Estado -->
            <div class="mb-3">
                <label for="cidade-estado" class="form-label">Cidade/Estado:</label>
                <input type="text" class="form-control" id="cidade-estado" name="cidade-estado" required>
            </div>

            <!-- CEP -->
            <div class="mb-3">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" required>
            </div>

            <!-- E-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Instagram/Facebook (opcional) -->
            <div class="mb-3">
                <label for="social-media" class="form-label">Instagram/Facebook (opcional):</label>
                <input type="text" class="form-control" id="instagram-facebook" name="social-media">
            </div>

            <!-- Como conheceu o Projeto Puuur Amor? -->
            <div class="mb-3">
                <label for="como-conheceu" class="form-label">Como conheceu o Projeto Puuur Amor?</label>
                <textarea class="form-control" id="como-conheceu" name="como-conheceu" rows="3" required></textarea>
            </div>



            <h4>Sobre o Ambiente do Lar</h4>

            <!-- Você mora em: -->
            <div class="mb-3">
                <label class="form-label">Você mora em:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mora_em" id="mora_em_casa" value="Casa" required>
                    <label class="form-check-label" for="mora_em_casa">Casa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mora_em" id="mora_em_apartamento" value="Apartamento" required>
                    <label class="form-check-label" for="mora_em_apartamento">Apartamento</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mora_em" id="mora_em_outro" value="Outro" required>
                    <label class="form-check-label" for="mora_em_outro">Outro:</label>
                    <input type="text" class="form-control d-inline w-auto" name="mora_em_outro_descricao">
                </div>
            </div>

            <!-- O imóvel é: -->
            <div class="mb-3">
                <label class="form-label">O imóvel é:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="imovel" id="imovel_proprio" value="Proprio" required>
                    <label class="form-check-label" for="imovel_proprio">Próprio</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="imovel" id="imovel_alugado" value="Alugado" required>
                    <label class="form-check-label" for="imovel_alugado">Alugado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="imovel" id="imovel_cedido" value="Cedido" required>
                    <label class="form-check-label" for="imovel_cedido">Cedido</label>
                </div>
            </div>

            <!-- Em caso de aluguel, o proprietário autoriza animais no imóvel? -->
            <div class="mb-3">
                <label class="form-label">Em caso de aluguel, o proprietário autoriza animais no imóvel?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="proprietario_autoriza_animais" id="sim" value="Sim" required>
                    <label class="form-check-label" for="sim">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="proprietario_autoriza_animais" id="nao" value="Nao" required>
                    <label class="form-check-label" for="nao">Não</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="proprietario_autoriza_animais" id="nao_se_aplica" value="Nao_se_aplica" required>
                    <label class="form-check-label" for="nao_se_aplica">Não se aplica</label>
                </div>
            </div>

            <!-- A casa é telada ou segura para gatos? -->
            <div class="mb-3">
                <label class="form-label">A casa é telada ou segura para gatos?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="casa_segura_para_gatos" id="sim_gatos" value="Sim" required>
                    <label class="form-check-label" for="sim_gatos">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="casa_segura_para_gatos" id="nao_gatos" value="Nao" required>
                    <label class="form-check-label" for="nao_gatos">Não</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="casa_segura_para_gatos" id="pretendo_telar" value="Pretendo_telar" required>
                    <label class="form-check-label" for="pretendo_telar">Pretendo telar antes da adoção</label>
                </div>
            </div>

            <!-- Há crianças no local? -->
            <div class="mb-3">
                <label class="form-label">Há crianças no local? Se sim, informe as idades:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ha_criancas" id="sim_criancas" value="Sim" required>
                    <label class="form-check-label" for="sim_criancas">Sim</label>
                    <input type="text" class="form-control d-inline w-auto" name="idades_criancas">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ha_criancas" id="nao_criancas" value="Nao" required>
                    <label class="form-check-label" for="nao_criancas">Não</label>
                </div>
            </div>

            <!-- Há outros animais? -->
            <div class="mb-3">
                <label class="form-label">Há outros animais?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ha_outros_animais" id="sim_outros" value="Sim">
                    <label class="form-check-label" for="sim_outros">Sim</label>
                    <input type="text" class="form-control" id="especificar_outros_animais" name="especificar_outros_animais" placeholder="Espécie, sexo, idade, temperamento, castração" required style="width: 200px; max-width: 200px; margin-top: 5px;">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ha_outros_animais" id="nao_outros" value="Nao" required>
                    <label class="form-check-label" for="nao_outros">Não</label>
                </div>
            </div>
            <p><strong>Comprometo-me a:</strong></p>
            <ul>
                <li>Oferecer ambiente seguro, limpo e adequado.</li>
                <li>Alimentar, cuidar, vacinar e amar o animal.</li>
                <li>Não doar, abandonar, revender ou repassar o animal.</li>
                <li>Comunicar imediatamente ao Projeto Puuur Amor qualquer mudança importante (mudança de endereço, saúde do animal, etc.).</li>
                <li>Autorizar visitas de acompanhamento da ONG, quando solicitado.</li>
            </ul>

            <p><strong>Estou ciente de que:</strong></p>
            <ul>
                <li>A adoção está sujeita à aprovação de perfil.</li>
                <li>O processo pode ser cancelado caso qualquer informação seja falsa ou incompleta.</li>
                <li>Caso o adotante não cumpra com os compromissos assumidos, o animal poderá ser recolhido pela ONG.</li>
            </ul>


            <!-- Botão de envio -->
             
            <button type = "button" class="btn btn-primary" id="link-whatsapp" target="_blank">
                Enviar</button>
            
        </form>
    </div>
    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>
</html>