<?php
require_once(__DIR__."/../database/env/connect.php");
if($_SESSION['id-aluno']){
    $aluno = $_SESSION['id-aluno'];
    $code_sql = "SELECT l.'pk_lista', d.materia, an.url, an.data_entrega from tb_lista l JOIN tb_disciplina d ON l.fk_disciplina = d.pk_disciplina JOIN tb_anexo an ON l.fk_anexo = an.pk_anexo WHERE l.fk_status = '1' AND l.fk_aluno = '$aluno'";
    $consulta = pg_query($connect, $code_sql);
    if($consulta){
        while( $row= pg_fetch_array($consulta)){
            $fazer = array(
                "<form method='POST' action='../database/data/update_list.php'>".
                    "<input type='hidden' name='idList' value='".$row['pk_lista']."'>".
                        "<span>".$row['materia']."</span>".
                            "<div class='text'>".
                                "<div>".
                                    "<p>Atividade</p>".
                                    "<p>Entregar</p>".
                                "</div>".
                                "<div>".
                                    "<a target='_blank' href='".$row['url']."'>Visualizar</a>"
                                    ."<p>".$row['data_entrega']."</p>"
                                ."</div>".
                            "</div>".
                        "<button type='submit'>Feito</button>".
                "</form>"
            );
            echo implode($fazer);
        }
    }
}else{
    header('Location:../index.php');
}
?>