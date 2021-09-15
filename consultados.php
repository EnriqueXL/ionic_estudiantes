<?php

// add_header 'Access-Control-Allow-Origin' 'http://localhost:8200' always;
header('Access-Control-Allow-Origin: *');
// Tenga en cuenta que esto deshabilita efectivamente la protección CORS y deja a sus usuarios expuestos a ataques. Si no está completamente seguro de que necesita permitir todos los orígenes, debe bloquear esto en un origen más específico:

// header('Access-Control-Allow-Origin: https://www.example.com');

    include_once('conexion.php');

    $result = mysqli_query($mysqli, "select * from universitarios ORDER BY id DESC") or die ('Error en el select');
    $rows= array();
    
    while($r = mysqli_fetch_assoc($result)){
        $rows[]=$r;
    }
    $respuesta = json_encode($rows);
    echo $respuesta;
?>    

