<?php
require_once("../database/env/connect.php");
if($_SESSION['id-aluno']){
    $sql_1 = "SELECT foto FROM tb_aluno";
    $consulta = mysqli_query($connect, $sql_1);
    if($consulta){
        while( $row = mysqli_fetch_assoc($consulta)){
            $foto = array("<div>".
                "<figure>".
                    "<img src='../images/perfil/".$row['foto']."'alt='foto de perfil'>".
                "</figure>".
                "</div>"); 
            echo implode($foto);
        }
    }
}else{
    header('Location:../index.php');
}
?>