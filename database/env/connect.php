<?php
$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASS'];
$database = $_ENV['DBNAME'];
$connect = pg_connect($host, $user, $password, $database);

?>