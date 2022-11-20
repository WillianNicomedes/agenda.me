# crud-de-cadastro-php-fullcalendar-mysql
Cadastro de consultas com suporte a usuários e cadastro de pacientes com CRUD. (PHP, MySQL, JS, Bootstrap, FullCalendar).

<p align="center">
<img src="principal/assets/img/gallery/principal.png" width="350" height="200" hspace="20"/><img src="principal/assets/img/gallery/info.png" width="350" height="200"/><img src="principal/assets/img/gallery/consulta.png" width="350" height="200" hspace="20"/><img src="principal/assets/img/gallery/crud.png" width="350" height="200"/>
</p>

Calendário WEB onde pode-se criar consultas e conta com uma edição customizada de arrastar e soltar através do FullCalendar ligado com a implementação do CRUD ao banco MySQL.

## Funções implementadas
- Login para acesso ao sistema;
- Adição da consulta;
- Edição da consulta;
- Remoção da consulta;
- Listagem da consulta;
- Descrição  da consulta;
- Hora de início da consulta;
- Hora de Termino da consulta;
- Consulta outros usuários para atendimento, ou seja, a consulta aparecerá no calendário do usuário solicitado e o usuário (Estagiário) poderá responder se poderá aceitar ou não;
- Cadastro de paciente;
- Edição de paciente;
- Remoção de paciente;
- Listagem de paciente;
- Cadastro de tarefa;
- Edição de tarefa;
- Remoção de tarefa;
- Listagem de tarefa;
- Descrição  de tarefa;
- Hora de início da tarefa;
- Hora de Termino da tarefa;
- Responsividade;


## Instalando

Antes de qualquer coisa você precisa ter um ambiente PHP/Apache/Mysql configurado em sua maquina, pois o mesmo necessita de um servidor local para funcionar, eu uso XAMPP.

Vá na pasta do seu servidor (Usei o XAMPP 8.1.10) no meu caso a pasta 'htdocs' e execute o comando git clone no 'cmd', caso tenha o git instalado, ou se preferir baixe os arquivos e mova até a mesma.

```
git clone https://github.com/WillianNicomedes/agenda.me.git
```

Agora vá até seu banco de dados no meu caso localhost/phpmyadmin, crie dois bancos com o nome dbagendame e agendame, importe o arquivo dbagendame.sql e agendame.sql que se encontra na pasta 'mysql', que contém o Banco de dados e itens pré cadastrados como os Usuários e Tabelas, recomendo abrir o arquivo e verificar os dados. Como as senhas estão em Sha1 deixarei a baixo sem a criptografia:

```
Usuário: estagiario
Senha: 1031

Usuário: paciente
Senha: 1643
```
Pronto basta abrir o diretório onde se encontra os arquivos através do seu servidor, se for local: localhost/NomedaPasta.