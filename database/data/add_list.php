<?php
require_once(__DIR__."/../env/connect.php");
$url = filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL);
$disciplina = filter_input(INPUT_POST,'disc', FILTER_SANITIZE_STRING);
$data = implode('/', array_reverse(explode('-', filter_input(INPUT_POST,'dataEntrega', FILTER_SANITIZE_STRING))));

$sql = "INSERT INTO anexo(url, entrega) VALUES('$url','$data')";
$consulta = mysqli_query($connect,$sql);
if($consulta){
$sql_1 = "SELECT * FROM anexo ORDER BY id DESC LIMIT 0,1";
$consulta_1 = mysqli_query($connect,$sql_1);
    if($row_1 =mysqli_fetch_assoc($consulta_1)){
        $id_anexo = $row_1['id'];
        $sql_2 = "SELECT * FROM aluno";
        $consulta_2 = mysqli_query($connect,$sql_2);
            while($row_2 = mysqli_fetch_assoc($consulta_2)){
                $id_aluno = $row_2['id'];
                $sql_3 = "INSERT INTO list(fk_aluno, fk_disciplina, fk_anexo) VALUES('$id_aluno','$disciplina','$id_anexo')";
                $consulta_3 = mysqli_query($connect,$sql_3);
                header('Location:../../view/add.php');    
        }
    }
}
?>