<?php
$host = getenv('HOST');
$database = getenv('DBNAME');
$port = gent('PORT');
$usuario = getenv('db_user');
$password = getenv('PASS');
$connect = pg_connect("$host, $database, $usuario, $port, $password");
if($connect){
    var_dump($connect);
}else{
    var_dump($connect);
}
?>