<?php

$user = "u404968876_polo";
$password = "1!WCJp|vV";
$base_name = "u404968876_base_polo";


try {
    $conexion = new mysqli("localhost",$user, $password, $base_name);

} catch (Exception $e) {
    printf("Fallo la conexión".$e->getMessage());
}



?>