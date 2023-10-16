## Segunda Avaliação DESENVOLVIMENTO WEB II



## Como Realizar esta avaliação ?

1. Crie um repositório no seu github com o nome "<b>FATEC_DES_WEB2_2023_Avaliacao2</b>"
2. Publicar no Teams o repositório que será avaliado pelo professor Orlando.


##  Desafio Técnico

Neste cadastro em PHP de alunos que poderão fazer uso do estacionamento da Fatec Araras. Os campos que devem estar cadastrados são: 

 - Nome Completo
 - Placa do Carro ou Moto

Assim que cadastrados, os vigilantes poderão verificar os registros de entrada e saída (funcionalidade não implementada nesta atividade)

Seu desafio técnico é dar manutenção no sistema contido na pasta portarias. Para isso, recrie o backup do banco de dados (portaria.sql) 

### 1- DashBoard - Área de login/logout (30% da nota)
- Com uso de sessões (sessions), criar uma área de login. Permitir encessar sessão (logout). Para realizar login/logout, necessário ter um único login e senha.

- Login: <b>fatec</b>
- Senha: <b>portaria</b>

- Ao acessar <b>index.php</b> via POST, se a superglobal $_POST['nome'] for 'fatec' e a superglobal $_POST['senha'] for 'portaria', 

- - Setar a superglobal $_SESSION['online'] com o valor True

- - Setar a superglobal $_SESSION['username'] com o valor "Portaria Fatec"

- - Redirecionar para a página <b>principal.php</b>

### 2- Verificar Veículos (30% da nota)
- <b>Será possível verificar somente em uma sessão ativa</b>. Ao tentar cadastrar em uma sessão desativada, redirecionar para a área de login.

- Na primeira página (registros.php), uma caixa de seleção (combobox) com todas as placas cadastradas será apresentada.

- Ao selecionar uma placa de clicar no botão Acessar, a página (<b>registros_encontrados.php</b>) deve apresentar todos os registros cadastrados na tabela registro.

- Ao acessar a página registros_encontrados.php via GET, deve-se redirecionar para a página <b>registros.php</b>.



### 3- Cadastrar novas placas (40% da nota)
- <b>Em uma sessão ativa</b>, permitir cadastrar na tabela veículos um novo registro, com o nome completo e a placa do veículo.

- Ao acessar a página cadastro_placa.php via GET, deve-se redirecionar para a página <b>cadastro.php</b>.

- Tecnologias: PHP Estruturado e SGBD MySQL.
Para acesso ao SGBD, utilize PDO.


## Critérios de avaliação

- Entregar todos os quesitos no prazo: 100% da nota.

- Entregar todos os quesitos com atraso aceitável: 80% da nota.

- Entregar todos os quesitos com atraso: 70% da nota.

- Entregar todos os quesitos fora prazo: 0% da nota.

## Prazo final

Serão considerados <b>no prazo</b> os projetos publicados até o dia 16 de outubro de 2023, meia noite.

Serão considerados <b>com atraso aceitável</b> os projetos publicados até o dia 17 de outubro de 2023, meia noite.

Serão considerados <b>com atraso</b> os projetos publicados até o dia 18 de outubro de 2023, meia noite.

Serão considerados <b>fora do prazo </b> os projetos publicados posterior a data do dia 18 de outubro de 2023.

## Considerações Finais

Você pode consultar a documentação oficial, a documentação com o Zeal, os slides e códigos do repositório da nossa sala, e até mesmo conversar com colegas de sala.  
<b>Mas</b> não é permitido copiar o código sem entender o que fez (popular cola). Ficou combinado que as atividades que forem cola serão zeradas na nota.

<br>
O professor publicará informes no grupo de Whatsapp abaixo:

https://chat.whatsapp.com/LvGIymKOzQc5BaetmsGmSR


