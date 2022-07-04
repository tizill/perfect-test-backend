# Como rodar o Projeto: 
- Apos Clonar o projeto com git clone git@github.com:seuprojeto
- Acesse o projeto com: cd nomeprojeto
- Instale as dependecias e o framework com: composer install --no-scripts
- Copie o arquivo .env.example com: cp .env.example .env
- Crie uma nova chave para a aplicação com: php artisan key:generate
- Em seguida voce deve configurar o arquivo .env e odar as migrations com: php artisan migrate --seed

- Instale o npm no projeto tambem com: npm install
- Logo em seguida o: bower install
- E por ultimo caso necessite o: gulp
# Como foi desenvolvido o Projeto:
Com o prazo de 4 dias o projeto foi desenvolvido visando alguns dos principios do SOLID, como o single responsability, com o foco maior na parte do back-end, foi utilizado o arquivo blade do projeto porem com algumas edições, foi adicionado a opção de deletar produtos, e adicionar imagem tambem, foi utilizado banco de dados mySql, todas as query utiizando o ORM eloquent do laravel, no projeto tambem as partes das validações do banco de dados foi separada em um outro arquivo no diretorio Request, porem tambem não foi deixado de lado a parte do front onde algumas validações tambem foram feitas, com a utilização do jquery.  
# Você quer ser um desenvolvedor Backend na Perfectpay?
O desafio é desenvolver um sistema de vendas onde consiste um cadastro de produtos, o próprio cadastro de vendas onde será preenchido alguns dados também referente a cliente, uma dashboard onde estará
centralizado os dados de produtos, consulta de vendas e um relatório simplificado de vendas.

# Instruções
- O foco principal do nosso teste é o backend. Para facilitar você poderá utilizar os blade.php que disponibilizamos no projeto.
- Fique à vontade para usar bibliotecas/componentes externos
- Seguir princípios **CLEAN CODE**
- Utilize boas práticas de programação
- Utilize boas práticas de git
- Documentar como rodar o projeto

# Requisitos
- O sistema deverá ser desenvolvido utilizando a linguagem PHP no framework Laravel.
- Você deve criar um CRUD que permita cadastrar as seguintes informações:
    - **Produto**: Nome, Descrição e Preço.
    - **Venda**: Produto,Data da venda, Quantidade do produto, Desconto, Status da venda.
    - **Cliente**: Nome, Email, CPF.
- Salvar as informações necessárias em um banco de dados (relacional) de preferência MySql.
- Exibir todos os dados na dashboard conforme exemplo deixado na blade.php.


# Opcionais
- Testes automatizados com informação da cobertura de testes
- Upload de imagem no cadastro de produtos

# O que será avaliado
- Estrutura e organização do código e dos arquivos
- Qualidade
- Enfim, tudo será observado e levado em conta

# Como iniciar o desenvolvimento
- Fork esse repositório na sua conta do GitHub.
- Crie uma branch com o nome desafio

Qualquer dúvida sobre o teste, fique a vontade para entrar em contato conosco.
