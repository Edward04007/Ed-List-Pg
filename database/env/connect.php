<?php
$host = getenv('DATABASE_URL');
$user = getenv('USER');
$password = getenv('PASS');
$database = getenv('DBNAME');
$connect = pg_connect($host, $user, $password, $database);
if($connect){
    echo"conexão 100%";
}else{
    echo"erro na conexão";
}
?>