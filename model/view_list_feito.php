<?php
require_once(__DIR__."/../database/env/connect.php");
if($_SESSION['id-aluno']){
    $aluno = $_SESSION['id-aluno'];
    $code_sql = "SELECT d.materia, an.url, l.data_entregue, an.data_entrega from tb_lista l JOIN tb_disciplina d ON l.fk_disciplina = d.pk_disciplina JOIN tb_anexo an ON l.fk_anexo = pk_anexo WHERE l.fk_status = '2' AND l.fk_aluno = '$aluno'";
    $consulta = pg_query($connect, $code_sql);
    if($consulta){
        while( $row = pg_fetch_array($consulta)){
            $feito = array(
                "<article>".
                    "<span>".$row['materia']."</span>".
                        "<div class='text'>".
                            "<div>".
                                "<p>Atividade</p>".
                                "<p>Entregar</p>".
                                "<p>Enviada</p>".
                            "</div>".
                            "<div>".
                                "<a target='_blank' rel='external' href='".$row['url']."'>Visualizar</a>".
                                "<p>".$row['data_entrega']."</p>".
                                "<p>".$row['data_entregue']."</p>".
                            "</div>".
                        "</div>".
                "</article>"
            );
            echo implode($feito);
        }
    }
}else{
    header('Location:../index.php');
}
?>