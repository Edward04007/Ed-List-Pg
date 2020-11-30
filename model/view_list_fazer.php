<?php
require_once(__DIR__."/../database/env/connect.php");
if($_SESSION['id-aluno']){
    $aluno = $_SESSION['id-aluno'];
    $code_sql = "SELECT l.id, d.materia, an.url, an.entrega from list l JOIN disciplina d ON l.fk_disciplina = d.id JOIN anexo an ON l.fk_anexo = an.id WHERE l.fk_status = '1' AND l.fk_aluno ='$aluno'";
    $consulta = mysqli_query($connect, $code_sql);
    if($consulta){
        while( $row= mysqli_fetch_array($consulta)){
            $fazer = array(
                "<form method='POST' action='../database/data/update_list.php'>".
                    "<input type='hidden' name='idList' value='".$row['id']."'>".
                        "<span>".$row['materia']."</span>".
                            "<div class='text'>".
                                "<div>".
                                    "<p>Atividade</p>".
                                    "<p>Entregar</p>".
                                "</div>".
                                "<div>".
                                    "<a target='_blank' href='".$row['url']."'>Visualizar</a>"
                                    ."<p>".$row['entrega']."</p>"
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