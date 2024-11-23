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
    <link rel="stylesheet" >
    <title>Document</title>

    <link rel="stylesheet" href="./estilos/paginaFondo3.css">
</head>
<body>

<header>
    <?php
    include "./estilos/header2.php";
    ?>
</header>


<div class="fondo">
        <div class="contenedor-centro">
            <h1>Registra tu contacto</h1>

            <form action="./logica/enviarRegistro.php" method="post">
                <hr>
                <div>

                    <label for="nombre">Nombre real:</label>
                    <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu nombre real">

                    <label for="nombre_artistico">Nombre artístico:</label>
                    <input type="text" name="nombre_artistico" required maxlength="100" placeholder="Ingresa tu nombre artístico">

                    <label for="tipoGrupo">Tipo de agrupación:</label>
                    <select name="tipoGrupo">
                        <option value="" disabled selected>Selecciona tu agrupación</option>
                        <option value="Solista">Solista</option>
                        <option value="Banda">Banda</option>
                        <option value="N/A">N/A</option>
                    </select>

                    <label for="tipoPersona">¿Cuál es tu rol?</label>
                    <select name="tipoPersona" id="tipoPersona" required>
                        <option value="" disabled selected>Selecciona tu rol</option>
                        <option value="Artista">Artista</option>
                        <option value="Manager">Manager</option>
                    </select>

                    <label for="ciudad">Ciudad:</label>
                    <input type="text" name="ciudad" required maxlength="100" placeholder="Ingresa tu ciudad">

                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" required maxlength="10" placeholder="Ingresa tu teléfono">

                    <label for="email">Correo:</label>
                    <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" required maxlength="10" placeholder="Ingresa tu contraseña">

                </div>
                <button type="submit" name="submit">Enviar registro</button>
            </form>

            <div>
                <a href='./Registro.php'>Nuevo registro</a> | 
                <a href='./Principal.php'>Inicio</a>
            </div>
        </div>
    </div>

    <footer>  
    <?php
        include "./estilos/footer.php";
    ?>
    </footer>


</body>
