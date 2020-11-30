<?php
$host = getenv('DATABASE_URL');
$user = getenv('USER');
$password = getenv('PASS');
$database = getenv('DBNAME');
$connect = pg_connect($host, $user, $password, $database)
?>