<?php
session_start();
require_once(__DIR__."/../env/connect.php");
$user =filter_input(INPUT_POST,'user', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);
$senha_sql = sha1($pass);

$sql = "SELECT senha, nome FROM tb_aluno WHERE nome = '$user' AND senha = '$senha_sql'";
$consulta = pg_query($connect, $sql);
if(pg_num_rows($consulta) > 0){
    $sql = "SELECT senha, pk_aluno, nome, foto FROM tb_aluno WHERE nome = '$user' AND senha = '$senha_sql'";
    $consulta = pg_query($connect, $sql);
        if($row = pg_fetch_array($consulta)){
            $_SESSION['id-aluno'] = $row['id'];
            $_SESSION['nome-aluno'] = $row['nome'];
            $_SESSION['foto-aluno'] = $row['foto'];
            header('Location:../../view/geral.php');
        }
    }else{
        header('Location:../../index.php');
    }
?>