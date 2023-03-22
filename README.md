Este projeto consiste em uma API RESTful desenvolvida com Laravel 8 e autenticação JWT para usuários. A API possui dois endpoints: Um para buscar todos os registros de uma tabela (Tabela de usuarios) e outro para buscar a partir de um registro especifico.

## Instalação ##

1. Clone este repositório em sua máquina:
git clone https://github.com/fffilipi/apiRestFul.git

2. Acesse o diretório do projeto:
cd api

3. Instale as dependências do projeto:
composer install

4. Crie um banco de dados MySQL e configure as informações de conexão no arquivo .env.

5. Execute as migrações do Laravel:
php artisan migrate

6. Execute o seeder para criação de usuarios:
 php artisan db:seed
 
 7. Inicie o servidor de desenvolvimento:
 php artisan serve

8. Acesse os endpoints disponíveis em http://localhost:8000/

## Utilização ##

Com o auxilio do Postman ou outro app semelhante:

1. Crie uma requisição do tipo Post com endereço http://localhost:8000/api/auth/login <br>
1.1. Em Body preencha a chave email com o email contido no banco de dados MySql e a chave password com a senha contida no banco de dados e envie a requisição. <br>
A resposta deve ser semelhante: <br>

![image](https://user-images.githubusercontent.com/87101197/226781411-6862c274-9e0f-4090-8f5b-40d26d45e88d.png)

1.2. Copie o token da resposta. <br>

2. Crie uma requisição do tipo GET com endereço http://localhost:8000/api/users <br>
2.1. Acesse Authorization, selecione o type Bearer e cole o token copiado anteriormente e envie a requisição. <br>
A resposta deve ser semelhante: <br>

![image](https://user-images.githubusercontent.com/87101197/226781986-0a73dd5b-94c0-464c-af31-9934407f5c73.png)

3. Crie uma requisição do tipo GET com endereço http://localhost:8000/api/users mas acrescente o id após o endereço. Ex.: http://localhost:8000/api/users/3 <br>
3.1. Acesse Authorization, selecione o type Bearer e cole o token copiado anteriormente e envie a requisição. <br>
A resposta deve ser semelhante: Retornando apenas o usuário do id passado. <br>

![image](https://user-images.githubusercontent.com/87101197/226782273-9eddae27-38af-4158-8284-a9529180273e.png)

4. Crie uma requisição do tipo POST com endereço http://localhost:8000/api/auth/logout <br>
4.1. Acesse Authorization, selecione o type Bearer e cole o token copiado anteriormente e envie a requisição. <br>
A resposta deve ser semelhante: Retornando a mensagem 'Successfully logged out' se o token for valido. <br>

![image](https://user-images.githubusercontent.com/87101197/226782843-0c9cb2d5-6686-4819-ae1a-5da62c9f2f3d.png)
