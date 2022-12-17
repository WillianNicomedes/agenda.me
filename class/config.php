<?php
SESSION_START();
//CONFIGURAÇÕES DO BANCO DE DADOS
define('SERVIDO','localhost');
define('USUARI','root');
define('SENH','root');
define('BANC','agendame');

function limpaString($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}