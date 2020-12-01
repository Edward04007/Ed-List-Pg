<?php
require_once(__DIR__."/../env/connect.php");
$url = filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL);
$disciplina = filter_input(INPUT_POST,'disc', FILTER_SANITIZE_STRING);
$data = implode('/', array_reverse(explode('-', filter_input(INPUT_POST,'dataEntrega', FILTER_SANITIZE_STRING))));

$sql = "INSERT INTO tb_anexo(url, data_entrega) VALUES('$url','$data')";
$consulta = pg_query($connect,$sql);
if($consulta){
$sql_1 = "SELECT * FROM tb_anexo ORDER BY pk_anexo DESC LIMIT 1";
$consulta_1 = pg_query($connect,$sql_1);
    if($row_1 = pg_fetch_assoc($consulta_1)){
        $id_anexo = $row_1['pk_anexo'];
        $sql_2 = "SELECT pk_aluno FROM tb_aluno";
        $consulta_2 = pg_query($connect,$sql_2);
            while($row_2 = pg_fetch_assoc($consulta_2)){
                $id_aluno = $row_2['pk_aluno'];
                $sql_3 = "INSERT INTO tb_lista(fk_aluno, fk_disciplina, fk_anexo) VALUES('$id_aluno','$disciplina','$id_anexo')";
                $consulta_3 = pg_query($connect,$sql_3);
                header('Location:../../view/add.php');    
        }
    }
}
?>