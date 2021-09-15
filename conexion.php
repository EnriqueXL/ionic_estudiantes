<?php
    $host='127.0.0.1';
    $name='estudiantes';
    $user='root';
    $pass='';
    $mysqli = mysqli_connect("localhost", "root", "", "estudiantes");

    if(!$mysqli){
        die('error en la conexion!');
    } 

?>