<?php

include "../model/conexion.php";

//print_r($_POST);

$nombre = $_POST['nombre'];
$nombre_empresa = $_POST['nombre_empresa'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$estado = 1; //por responder
$mensajeC = null;


if (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$nombre)) {
    echo "<script>
    document.getElementById('aler_nombre').innerHTML='Nombre inválido';
    $('#nombre').css('border-color','#FF0000');
    </script>";

}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>document.getElementById('e_email').innerHTML='Email inválido.';
        $('#email').css('border-color','#FF0000');
    </script>";
    
}else if (!preg_match('/[0-9]{9}$/', $telefono)) {
    echo "<script>document.getElementById('aler_telefono').innerHTML='Teléfono inválido.';
    $('#telefono').css('border-color','#FF0000');</script>";
    
}else if (strlen($mensaje) < 10) {
    echo "<script>document.getElementById('aler_mensaje').innerHTML='Mensaje debe contener por lo menos 10 caracteres.';
    $('#mensaje').css('border-color','#FF0000');</script>";
    
}else {

    $sentencia = "INSERT INTO dato_persona(nombre,nombre_empresa,telefono,email,mensaje,estado) 
    VALUES('".$nombre."', '".$nombre_empresa."', '".$telefono."', '".$email."', '".$mensaje."', '".$estado."')";

    $query = $conexion->query($sentencia);

    $mensajeC = '<script> swal("Exito!", "Se a enviado formulario exitosamente!", "success"),
    form_enviar.reset();</script>';
    
}
echo $mensajeC
?>