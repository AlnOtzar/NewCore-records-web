<?php
// LOCAL

// $host_db = "localhost:3306";
// $user_db = "root";
// $pass_db = "ImpliedFiber356@";
// $db_name = "Disquera";


// InfinityFree, la contrasena es la de SQL EN INFINITYFREE

// $host_db = "sql205.infinityfree.com";
// $user_db = "if0_37329493";
// $pass_db = "v9k69MJUbft";
// $db_name = "if0_37329493_fes_aragon";

//SERVIDOR LINUX
$servername = 'localhost:3306';
$username = 'alanotzarwav';
$password = 'ImpliedFiber356@';
$dbname = 'Disquera';



$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>