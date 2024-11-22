<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreUser = $_POST['nombre'];

$buscarusuario = "SELECT * FROM usuario WHERE nombre ='$nombreUser'";

$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

if ($count == 1) {
    echo "
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Modak&family=Monoton&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Modak&family=Monoton&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../estilos/paginaFondo5.css'>
    ";
    echo "<style>
    body {
        font-family: 'Monoton';
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
    .creado {
        text-align: center;
        margin-top: 50px;
    }
    .creado img {
        width: 100px;
        margin: 50px;
    }
    .creado a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #ff2273;
    }
    .creado h1 {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #40241a;
    }

    .creado img {
    
    }
    </style>";
    

    echo "<header>";
    include '../estilos/header.php';
    echo "</header>";

    echo "<div class='creado'>";
    echo "<h1>El usuario ya está registrado</h1>";
    echo "<img src='../estilos/img/persona.png' alt='Bienvenido'>";
        
    echo "<a href='../Registro.php'>Generar un nuevo registro</a>";
    echo "<a href='../Principal.php'>Ver registros</a>";
    echo "</div>";

    echo "<footer>";
    include '../estilos/footer.php';
    echo "</footer>";

} else {
    mysqli_query($conexion, "INSERT INTO usuario(
        nombre, nombre_artistico, tipoGrupo, tipoPersona,
        ciudad, telefono, email, password
    ) VALUES (
        '$_POST[nombre]',
        '$_POST[nombre_artistico]',
        '$_POST[tipoGrupo]',
        '$_POST[tipoPersona]',
        '$_POST[ciudad]',
        '$_POST[telefono]',
        '$_POST[email]',
        '$_POST[password]'
    )");

    echo "
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Modak&family=Monoton&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Modak&family=Monoton&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../estilos/paginaFondo5.css'>
    ";


    echo "<style>
    body {
        font-family: 'Monoton';
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
    .creado {
        text-align: center;
        margin-top: 50px;
    }
    .creado img {
        width: 100px;
        margin: 50px;
    }
    .creado a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #ff2273;
    }
    </style>";
    

    echo "<header>";
    include '../estilos/header.php';
    echo "</header>";

    echo "<div class='creado'>";
    echo "<h1>Gracias por confiar en nosotros</h1><br>";
    echo "<h1>Usuario $_POST[email] creado con éxito</h1><br>";
    echo "<img src='../estilos/img/bien.png' alt='Bienvenido'>";
        
    echo "<a href='../Registro.php'>Generar un nuevo registro</a>";
    echo "<a href='../Principal.php'>Ver registros</a>";
    echo "</div>";

    echo "<footer>";
    include '../estilos/footer.php';
    echo "</footer>";
}
?>
