<?php
$host = $_ENV['DATABASE_URL'];
$user = $_ENV['USER'];
$password = $_ENV['PASS'];
$database = $_ENV['DBNAME'];
$connect = pg_connect($host, $user, $password, $database);

if($connect){
    echo"conexão 100%";
}else{
    echo"erro na conexão";
}
?>