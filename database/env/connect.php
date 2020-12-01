<?php
$host = getenv('HOST');
$usuario = getenv('db_user');
$password = getenv('PASS');
$database = getenv('DBNAME');
$port = getenv('PORT');
$connect = pg_connect(getenv("DATABASE_URL"));
if($connect){
    var_dump($connect);
}else{
    var_dump($connect);
}
?>