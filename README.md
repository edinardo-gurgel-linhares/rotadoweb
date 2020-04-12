<p align="center"><img src="https://camo.githubusercontent.com/27d69461ad4caeb670264814c1fb624faadc9dca/68747470733a2f2f61646d696e6c74652e696f2f41646d696e4c5445332e706e67"></p>


## Projeto de Criação de Escalas de Serviço

Este projeto tem por finalidade criar escalas de serviço:

- Integração com o AdminLTE
- Sistema de ACL
- Administração de Setores
    
## Instlalando o projeto Laravel
* digite o comando: composer require laravel/ui
* digite o comando: php artisan ui vue --auth
* digite o comando: laravel new nome_do_projeto --auth
* digite o comando: composer install

## Instalando autenticação para o laravel
O ideal é fazer a instalação do projeto já com a autenticação, 
com o comando:  laravel new nome_escolhido_projeto --auth
Obs.: caso não faça, realizar esse procedimento:
* digite o comando: composer require laravel/ui
* digite o comando: php artisan ui vue --auth
* digite o comando: npm install
* digite o comando: npm run dev
* digite o comando: php artisan key:generate

## Subindo Arquivos para o GitHub
*primeiro abra o github
*faça login com a conta conta de email cadastrada no github
*no botão lateral superior direito, escolha a opção your repositories
*no botão verde direito, clique na opção clone or download
*copie o endereço
*no terminal do VSCODE  para iniciar o git ou outro editor de texto de sua escolha, digite o comando: git init 
*digite o comando: git remote add origin https://github.com/login-do-github/rotadoweb.git
*digite o comando: git status (para ver as pastas do projeto)
*digite o comando: git add . (para adicionar o peojeto, inclusive o espaço e ponto)
*digite o comando: git commit -m "Inicio do projeto ROTADOWEB - Migrations iniciais"
*digite o comando: git push --force origin master


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
