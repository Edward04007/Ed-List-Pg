<?php
require_once("../database/env/connect.php");
$code_sql = "SELECT pk_disciplina, materia FROM tb_disciplina";
$consulta = pg_query($connect, $code_sql);
if($consulta){
    while( $row = pg_fetch_array($consulta)){
        
            $disci = array("<option value='".$row['pk_disciplina']."'>".$row['materia']."</option>");
            echo implode($disci);
    }
}
?> 