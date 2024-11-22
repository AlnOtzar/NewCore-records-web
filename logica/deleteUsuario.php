<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');

$registroEliminado = $_POST['email'];

// Verificar si el usuario existe
$consultaVerificar = "SELECT * FROM usuario WHERE email = '$registroEliminado'";
$resultado = $conexion->query($consultaVerificar);

if (mysqli_num_rows($resultado) > 0) {
    // si el ususario existe, hacer la consulta para eliminar
    echo "<h3>Ususario eliminado</h3><br>";
    $consultaEliminar = "DELETE FROM usuario WHERE email = '$registroEliminado'";
    $conexion->query($consultaEliminar);
    mysqli_close($conexion);
    header('Location: ../EliminarUsuario.php');

} else {
    // Si no se encuentra, imprimir que no se encontró
    echo "<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #fdf9db;

        }
        header, footer {
            background-color: #40241a;
            color: #fff;
            text-align: center;
            padding: 15px 0;
        }
        .error-message {
            text-align: center;
            margin-top: 50px;
        }
        .error-message img {
            width: 100px;
            margin: 50px;
        }
        .error-message a, si {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #ff2273;
            font-size: 50px;
        }

    </style>";
    echo "<header>";
    include '../estilos/header.php';
    echo "</header>";
    
    echo "<div class='error-message'>";
    echo "<h1 class = 'si'>Usuario no encontrado</h1><br>";
    echo "<a href='../EliminarUsuario.php'>Inténtalo de nuevo.</a>";
    echo "<img src='../estilos/img/caraTriste.png' alt='cara triste'>";
    echo "</div>";
    
    echo "<footer>";
    include '../estilos/footer.php';
    echo "</footer>";
}



?>