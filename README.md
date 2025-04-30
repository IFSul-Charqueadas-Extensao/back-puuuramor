# Documentação para Rodar o Projeto

## Pré-requisitos
Antes de começar, certifique-se de que o computador onde o projeto será configurado possui os seguintes requisitos instalados:
- PHP (versão 7.4 ou superior)
- [Composer](https://getcomposer.org/) (para gerenciar dependências do PHP)
- Servidor Web (como Apache ou Nginx) - Wamp ou Xamp
- Banco de Dados (MySQL)
- Editor de Texto/IDE (como Visual Studio Code)

## Baixar o CodeIgniter
- Acesse o site original do [CodeIgniter](https://codeigniter.com/)
- Clique em Download para baixar a versão mais recente do CodeIgniter
- Após o download, extraia o arquivo .zip
- Copie a pasta extraída para o diretório do WAMP C:\wamp64\www\
- Acesse o diretório: Renomeie a pasta para o nome do projeto "web.local"

## Clonar o Projeto
Copie o projeto para o computador de destino. Você pode fazer isso via Git ou manualmente:
### Via Git:
    git clone <URL_DO_REPOSITORIO>
    Copie os arquivos do projeto para o diretório C:\wamp64\www\web.local
    Descompacte os arquivos dentro de "web.local" e aceite subsituir.

**Como o tema é feito com bootstrap, descompacte o arquivo tema.zip dentro da pasta "public"**


## Instalar Dependências Composer
Baixar o [Composer](https://getcomposer.org/Composer-Setup.exe)
- Instale selecionando a versão atual do php.

- Agora, rodar o Composer dentro do projeto.
- Abrir o Prompt de Comando
- Abra o cmd.

- Navegue até o diretório do seu projeto: 
> cd C:\wamp64\www\web.local
- Instalar as Dependências: 
> composer install


## Crie um banco de dados no MySQL
> Endereço: http://localhost/phpmyadmin
 - user: root -> enter
- Clicar em: Base de dados -> nome da base de dados: sistema_prod -> criar 


## Opcional:
- Configure o arquivo .env na raiz do projeto:
- Renomeie o arquivo env para .env (se ainda não estiver renomeado).
 - Edite as configurações de banco de dados
	|--------------------------------------------------------------------------------------------------|  
 	| database.default.hostname = localhost                                                            | 
	| database.default.database = sistema_prod (altere caso banco tenha sido criado com nome diferente)| 
	| database.default.username = root                                                                 | 
	| database.default.password = <sua_senha>                                                          | 
	| database.default.DBDriver = MySQLi                                                               | 

## Executar
Execute as migrações dentro do terminal do vs code (essencial):
	php spark migrate

Execute o servidor(essencial):
	php spark serve

Acesse: http://localhost:8080
