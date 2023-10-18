># App-Laravel-Contacts
>---
>O projeto teve inicio no dia: **18/10/2023**
>
>Todo o material utilizado foi retirado dos seguintes sites:
>* [Laravel](https://laravel.com/docs/10.x)
>* [Bootstrap](https://getbootstrap.com/)
>* [pgAdmin](https://www.pgadmin.org/)
>---
>>## Descrição :page_facing_up:
>
> 1. Este é um sistema para a listagem de clientes, onde é possível adicionar, editar e excluir clientes;
> 2. Nesse sistema foi utilizado a linguagem PHP junto ao frameWork Laravel, para o banco de dados foi utilizado o Postegresql.
> 3. A ideia primaria é começar um sistema de compras, então essa é a primeira etapa, devo continuar adicionando funcionalidades para que o sistema fique o mais completo possível;
>----
>>  ### :x:Como utilizar o sistema:x: 
>
> 1. O sistema funciona basicamente como uma lista de contatos, onde o usuário consegue adicionar, ver a lista, editar e deletar.
> 2. A tela inicial é a lista geral com os nomes e telefones, caso o usuário queira adicionar um novo cliente, deverá clicar no botão azul de criar cliente que irá redirecionar para a tela de criação.
> 3. Na tela de criação o usuário poderá digitar um nome e um telefone, assim que terminar, deverá clicar no botão azul de enviar para adicionar o novo cliente, e assim que clicar, o sistema voltará para tela inicial.
> 4. Com o novo cliente cadastrado, o usuário terá as opções de editar ou deletar o cliente que aparece na tela.
> 5. Caso o usuário clique no botão editar, a pagina irá redirecionar para a tela de edição de clientes.
> 6. Na tela de edição, o usuário conseguirá inserir um novo nome e um novo telefone, e após inserir, deve prosseguir clicando no botão de enviar azul, que após o clique, retornará a tela inicial.
> 7. Caso o usuário queira excluir um cliente, basta clicar no botão vermelho na tela inicial que automaticamente o cliente será excluído.
>---
>># Requisitos :point_down:
>- Git;
>- Editor de Texto;
>- PHP;
>- Laravel;
>- Postgresql;
>----
>># Instalação :hammer:
>Primeiramente é necessário baixar o repositorio na maquina usando:
>```bash
>git init
>
>git clone https://github.com/Duvoutx/ControleCliente.git
>
>cd ControleCliente
>
>```
>Para abrir o repositorio no __Visual Studio Code__, digite:
>
>`code .`
>
>Depois vá no terminal e digite:
>```bash
>$ docker-compose build -d
>$ docker-compose up
>$ docker exec -it ControleCliente /bin/sh
>$# rails db:create
>$# rails db:migrate
>$# rake article_populate:create
>$# exit
>$
>```
>
>E está feito, e para disponibilizar o server basta digitar:
>
>```
>php artisan serve
>```
>---
>># Versão :pencil:
>1.0.0
>># Autoria  :black_nib:
>___Eduardo Ribeiro___  [LinkedIn](www.linkedin.com/in/eduardo-ribeiro-santana-9271a4214)
>