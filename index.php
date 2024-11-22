<!-- 
INICIA SESION CON:

aln@gmail.com
1234 
-->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Modak&family=Monoton&display=swap" rel="stylesheet">

<link rel="stylesheet" href="estilos/paginaFondo.css">

<body>
    <header>
    <?php
    include "./estilos/header.php";
    ?>
    </header>
    
    <div class="fondo">
        <div class="contenedor-centro">
            <h1>Iniciar sesión</h1>
            <form method="POST" action="logica/loguear.php">
                <input type="text" name="email" placeholder="Correo">
                <br>
                <input type="password" name="clave" placeholder="Contraseña">
                <br>
                <button type="submit" class = "luz" >Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <footer>  
    <?php
        include "./estilos/footer.php";
    ?>
    </footer>

</body>

