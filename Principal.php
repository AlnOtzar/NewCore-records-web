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
} else {
    echo "
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Modak&family=Monoton&display=swap' rel='stylesheet'>
    
    <link rel='stylesheet' href='estilos/paginaFondo2.css'>>

    <link href='https://fonts.googleapis.com/css2?family=Modak&family=Monoton&display=swap' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Modak&family=Monoton&display=swap' rel='stylesheet'>

<link rel='stylesheet' href='estilos/paginaFondo2.css'>


    <header>";
    include './estilos/header2.php';
    echo "</header>
        
    <div class='fondo'>
        <div>
            <h1>Bienvenido</h1>
            <h5>Tu correo es: $email</h5>
        </div>
        
        <div class='cont'>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre artistico</th>
                    <th>Tipo de agrupacion</th>
                    <th>Rol</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>        
                    <th>Correo Electronico</th>
                    <th>Fecha de Registro</th>
                </tr>";

    // Se usa el require para si 
    // si se necesita el archivo conexion
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Generar el query
    $consulta_sql = "SELECT * FROM usuario";

    // Mandar el query por medio de la conexion y almacenaremos el resultado en una variable
    $resultado = $conexion->query($consulta_sql);

    // Retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
    $count = mysqli_num_rows($resultado); 

    if ($count > 0) {
        // Aquí se pintan los registros de la DB
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['nombre_artistico'] . "</td>";
            echo "<td>" . $row['tipoGrupo'] . "</td>";
            echo "<td>" . $row['tipoPersona'] . "</td>";
            echo "<td>" . $row['ciudad'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['fecha_registro'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h1 style='color:red'>Sin Ningún registro</h1>";
    } 

    echo '
    <div class="rectangulo">
        <a href="EliminarUsuario.php"><button>Eliminar Usuario</button></a>
        <a href="Registro.php"><button>Registro</button></a>
    </div>
    ';
    echo "</div>"; // Aquí cerramos la div de clase 'fondo'

    echo "
    <div class='footer-container'>
        <footer>";
    include './estilos/footer.php';
    echo "</footer>
    </div>";

}
?>