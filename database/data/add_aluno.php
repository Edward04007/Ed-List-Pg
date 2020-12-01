<?php
require_once(__DIR__."/../env/connect.php");
$aluno_novo = filter_input(INPUT_POST,'aluno_novo', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'pass', FILTER_VALIDATE_INT);
$pass = sha1($senha);
if($_FILES['foto']){

    $tipo_arquivo = substr($_FILES['foto']['name'], -4);
    $nome = rand(10000, 90000000).$tipo_arquivo;
    $dir = "../../images/perfil/";
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
    $sql =  "INSERT INTO tb_aluno(nome, foto, senha) VALUES('$aluno_novo','$nome', '$pass')";
    $consulta = mysqli_query($connect, $sql);
    header('Location:../../view/add.php'); 
    
  }
?>