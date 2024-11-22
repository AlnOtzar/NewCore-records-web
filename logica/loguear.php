<?php
require 'conexion.php';

session_start();
$email = $_POST['email'];
$clave = $_POST['clave'];

//La función COUNT devuelve el número de filas de la consulta, 
// es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from usuario where 
    email= '$email' and password = '$clave'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane'] = $email;
    header("location: ../Principal.php");

} else {
    header("location: ../indexError.php");
}

?>