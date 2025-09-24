<?php 
//Dados da conexao
$sever = "localhost";
$user ="root";
$password = "root";
$database = "bd_estoque";

// função para conexão do banco 
$conexao = new mysqli ($sever, $user, $password, $database);

// verificar se tem erro
if (!$conexao){
    echo "Falaha na conexão";
}






?>