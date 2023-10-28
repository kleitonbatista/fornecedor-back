# FORNECEDOR

## Projeto básico de uma api de fornecedores

## Necessário ter instalado o PHP e Composer 

Após realizar o pull do projeto, executar o comandos:
* ```composer install ```
    Esse irá baixar as dependencias necessárias do projeto

* Alterar o arquivo .env
    Esse arquivo contém as variáveis de ambiente do projeto, alterar os dados de conexão do banco 
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=fornecedor
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

* ```php artisan migrate```
    Esse comando irá criar o banco de dados e criar as tabelas presentes nas migrations

* ``` php artisan serve ```
    Esse irá iniciar o projeto, após isso o ambiente estará disponível no endereço ```localhost:8000```    