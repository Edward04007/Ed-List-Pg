<?php
require_once(__DIR__."/../env/connect.php");
$id_list = filter_input(INPUT_POST,'idList', FILTER_VALIDATE_INT);
$date =  date('d/m/Y');
$sql = "UPDATE list SET fk_status = '2', entregue = '$date' WHERE id = '$id_list'";
$consulta = mysqli_query($connect,$sql);
header('Location:../../view/fazer.php');
?>