<!-- 
INICIA SESION CON:

aln@gmail.com
1234 
-->
<?php
session_start();
$email = $_SESSION['usermane'];

if (!isset($email)) {
    header("location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/paginaFondo4.css">

</head>

<header>
    <?php
    include "./estilos/header2.php";
    ?>
</header>

<body class="fondo">
    <div class="contenedor-centro">
        <h1>Elimina Usuario</h1>
        <form method="POST" action="./logica/deleteUsuario.php">
            <input type="text" name="email" placeholder="Correo electronico" />
            <br />
            <button type="submit">Eliminar usuario</button>
        </form>
        <a href="Principal.php">Inicio</a>
    </div>

<footer>  
    <?php
        include "./estilos/footer.php";
    ?>
</footer>
</body>

</html>
