# Desafio técnico - Proesc


## Índice

- [Sobre o desafio](#sobre-o-desafio)
  - [Desafio 1](#desafio-1)
  - [Desafio 2](#desafio-2)
  - [Desafio 3](#desafio-3)
- [Bonus](#bonus)
- [Entrega](#entrega)

## Sobre o desafio

Olá, bem vindo(a) ao desafio técnico do Proesc.com! 

O time de N3 dentro do suporte técnico tem como principal objetivo resolver chamados de maior complexidade, dando manutenção ao código do sistema principal da empresa, que é um software de gestão escolar.

Este desafio técnico é uma atividade prática, onde avaliaremos seus conhecimentos de lógica de programação, banco de dados e html, assuntos que precisará utilizar diariamente para a função de agente de suporte N3.

- Linguagens: PHP 5.6
- Framework: Laravel
- Banco de dados: Postgres

### Desafio 1
No dia a dia utilizamos de html, css e javascript para criar relatórios para nossas instituições de ensino. 

Assim, uma escola pediu auxílio para criar uma declaração de matrícula. Verifique o modelo disponibilizado pela escola e crie o código para que o relatório seja disponibilizado para a escola.

 **Requisitos**
- Utilize html e css puro
- Crie o relatório com base na imagem dispobilizada pela escola: [Modelo de declaração de matrícula](./desafio1/modelo-declaracao.png)


Adicione sua solução na pasta [Desafio 1](./desafio1/)

### Desafio 2
Você recebeu um chamado de um cliente e vai precisar realizar algumas consultas no banco. Utilize um banco de dados local disponível para realizar as consultas necessárias. 

Para conectar-se, crie uma nova base de dados PostgreSQL utilizando os comandos disponíveis [aqui](#como-executar).

**Consultas a serem feitas**<br>
1. O cliente gostaria de saber quantos produtos ele possui em cada categoria. Qual SQL você faria para realizar essa consulta?<br>
2. Além disso, também quer saber a média de preços de cada categoria. Monte o SQL para essa solicitação<br>
3. Faça um SQL para atualizar todos os produtos da categoria Cremes e Geleias para a categoria Frutas

Adicione sua solução na pasta [Desafio 2](./desafio2/)

### Desafio 3

Nesse desafio, usuários relataram alguns problemas no uso de uma simples aplicação.
Como desenvolvedor N3, você deverá realizar uma análise dos problemas relatados e disponibilizar uma correção para normalizar a aplicação.

1. É encontrado um erro na página inicial ao tentar navegar para página a "Produtos" ou "Categorias". Realize uma correção na navegação.<br>
2. Um usuário relatou dificuldades ao realizar o cadastro de uma nova categoria. Ao preencher os dados e apertar em "Salvar", mostra a mensagem de sucesso no entanto não é feito o cadastro. Realize uma correção nesse procedimento<br>
3. Na página de listagem de Produtos, usuários identificaram que não está sendo exibido o nome da Categoria relacionada. Realize uma correção para exibir o nome correto da categoria vinculada ao produto.<br>

Faça sua solução na pasta [Desafio 3](./desafio2/)


### Como executar 

Para iniciá-lo, siga os passos abaixo:

```bash
$ git clone https://github.com/Lorenalgm/desafio_tecnico_proesc/
```

```bash
# Entre na pasta do projeto
$ cd desafio3
```

```bash
# Instale as depêndencias
$ composer install
```

```bash
'Crie arquivo .env clonando o arquivo .env.example e configure com as informações do seu banco local'
```

```bash
# Crie uma nova chave para a aplicação
$ php artisan key:generate
```

```bash
# Rode as migrations
$ php artisan migrate
```

```bash
# Rode o seeder
$ php artisan db:seed
```

```bash
# Iniciar o projeto
$ php artisan serve
```


## Entrega
Para entregar sua solução, baixe este projeto e resolva os 3 desafios propostos.

Assim que finalizar, suba a sua solução para o github e nos envie o link do seu repositório.

Ps: não é necessário commitar ou enviar pull request para este repositório. Somente enviar o link do seu repositório no formulário do desafio.

Em caso de dúvida, não hesite em nos contatar através do e-mail recebido ou para lorena@proesc.com :)
