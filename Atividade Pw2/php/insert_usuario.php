<?php 
//incluir conexao

include 'conexao.php';

//receber dados 

$name_user = $_POST ['nome'];
$data_nasc = $_POST ['data-nascimento'];
$login = $_POST['login'];
$password = $_POST['senha'];
$setor_user = $_POST['setor'];

//funçao insert
$insert = "INSERT into tb_user values (null,'$name_user','$data_nasc','$login','$password','$setor_user')";

$query = $conexao->query($insert);

if($query == true){
    echo "<script>alert('Usuario Cadastrado com sucesso'); history.back()</script>";
}else {
    echo "<script>('Erro no cadastro'); history.back()</script>";
}

?>