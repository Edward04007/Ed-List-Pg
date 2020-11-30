<?php
$host = getenv('HOST');
$database = getenv('DBNAME');
$usuario = getenv('db_user');
$password = getenv('PASS');
$connect = pg_connect($host,$database,$usuario,$password);
if($connect){
    var_dump($connect);
    echo pg_errormessage($connect);
}else{
    var_dump($connect);
    echo pg_errormessage($connect);
}
?>