<?php
require_once(__DIR__."/../env/connect.php");
$id_list = filter_input(INPUT_POST,'idList', FILTER_VALIDATE_INT);
$date =  date('d/m/Y');
$sql = "UPDATE tb_lista SET fk_status = '2', data_entregue = '$date' WHERE pk_lista = '$id_list'";
$consulta = mysqli_query($connect,$sql);
header('Location:../../view/fazer.php');
?>