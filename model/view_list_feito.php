<?php
require_once(__DIR__."/../database/env/connect.php");
if($_SESSION['id-aluno']){
    $aluno = $_SESSION['id-aluno'];
    $code_sql = "SELECT d.materia, an.url, l.entregue, an.entrega from list l JOIN disciplina d ON l.fk_disciplina = d.id JOIN anexo an ON l.fk_anexo = an.id WHERE l.fk_status = '2' AND l.fk_aluno ='$aluno'";
    $consulta = mysqli_query($connect, $code_sql);
    if($consulta){
        while( $row = mysqli_fetch_array($consulta)){
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
                                "<a target='_blank' href='".$row['url']."'>Visualizar</a>".
                                "<p>".$row['entrega']."</p>".
                                "<p>".$row['entregue']."</p>".
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