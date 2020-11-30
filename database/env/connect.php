<?php
$host = getenv('HOST');
$database = getenv('DBNAME');
$usuario = getenv('db_user');
$password = getenv('PASS');
$connect = pg_connect($host,$database, $usuario, $password);
?>