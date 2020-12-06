<?php
if($_SESSION['id-aluno']){
    $al = "<a rel='next' href='../view/fazer.php'><li class='fas fa-user'></li></a>";
        if($_SESSION['id-aluno'] == 1){
            $icon = "<a rel='next' href='./add.php'><li class='fas fa-address-book'></li></a>";
        }else{
            $icon = "";
        }
}else{
    header('Location:../index.php');
}
?>
