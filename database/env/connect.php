<?php
$host = 'ec2-54-159-107-189.compute-1.amazonaws.com';
$database = 'd7hgi3rq02v1ij';
$usuario = 'xygnpfhyqyhnnz';
$password = 'a9b1bedbc2c69bb3df3f1dff8e4b00e02df50a934e1634ba3575fb9daca30a5c';
$connect = pg_connect($host, $database, $usuario, $password);
if($connect){
    var_dump($connect);
}else{
    var_dump($connect);
}
?>