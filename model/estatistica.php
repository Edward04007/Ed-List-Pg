<?php
require_once("../database/env/connect.php");
if($_SESSION['id-aluno']){
        $aluno = $_SESSION['id-aluno'];
        $total = "SELECT COUNT(fk_disciplina) FROM list WHERE fk_aluno = '$aluno'";
        $consulta =  mysqli_query($connect, $total);
        if($row = mysqli_fetch_assoc($consulta)){

             $total_1 = implode($row);
            $tota_fazer = "SELECT COUNT(fk_disciplina) FROM list WHERE fk_status = 1 AND fk_aluno = '$aluno'";
            $consulta_1 =  mysqli_query($connect, $tota_fazer);

            if($row_1 = mysqli_fetch_assoc($consulta_1)){

                $total_2 = implode ($row_1);
                $tota_feito = "SELECT COUNT(fk_disciplina) FROM list WHERE fk_status = 2 AND fk_aluno = '$aluno'";
                $consulta_2 =  mysqli_query($connect, $tota_feito);

            if($row_2 = mysqli_fetch_assoc($consulta_2)){
                $total_3 = implode($row_2);
            }
        }
    }
}else{
    header('Location:../index.php');
}
?>