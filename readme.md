## LARAVEL 5.2 - AUTHENTICATION
---
## Requisitos

 * `PHP 5.6` 
 * `Composer`
 * `npm` ou `yarn`
 * `MySQL`, `PgSQL`, ou outro banco de dados 

## Instalacao do projeto

 1. Clona o repositorio:
 ~~~JS
  git clone https://github.com/natanael-oliveira/laravel-authentication.git
 ~~~
 2. Acesse a pasta do projeto e baixe os pacotes de dependencias:
 ~~~JS
  cd laravel-authentication
 ~~~
 ~~~JS
  composer install && yarn install
 ~~~
 3. Copie o arquivo `.env.example` e renomei-o para `.env`
 ~~~JS
  cp .env.example .env
 ~~~
 4. Configure o arquivo `.env` de acordo com o ambiente do seu banco de dados:
 ~~~JS
 //...

APP_URL=http://localhost

DB_CONNECTION=pgsql // mysql, etc.  
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=laravel_authentication
DB_USERNAME=root
DB_PASSWORD=root

//...
 ~~~

5. Execute o comando a seguir para gerar a chave `APP_KEY` da aplicacao:
~~~
 php artisan key:generate
~~~

6. Em seguida inicie um servidor local para executar a aplicacao:
~~~JS
 php artisan serve

 // acesse no brawser http://localhost:8080
~~~