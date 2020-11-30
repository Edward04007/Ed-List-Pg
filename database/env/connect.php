<?php
$host = getenv('HOST');
$database = getenv('DBNAME');
$user = getenv('db_user');
$password = getenv('PASS');

$connect = pg_connect($host,$database, $user, $password);

if($connect){
    echo "Deu certo";
    var_dump($connect);
}else{
    echo "não deu";
}
?>