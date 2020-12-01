<?php
$host = getenv('HOST');
$database = getenv('DBNAME');
$port = getenv('PORT');
$usuario = getenv('db_user');
$password = getenv('PASS');
$connect = pg_connect($host, $database, $usuario, $port, $password);
if($connect){
    var_dump($connect);
}else{
    var_dump($connect);
}
?>