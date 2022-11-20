<?php
SESSION_START();
//CONFIGURAÇÕES DO BANCO DE DADOS
define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BANCO','Agendame');

function limpaString($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}