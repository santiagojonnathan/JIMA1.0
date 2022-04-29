<!DOCTYPE html>
<html lang="es">

<head>
    <title>Jonnathan Santiago</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum scale = 1, minimun-scale=1">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>
        <div class="contenedor">

            <h1 >JIMA</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="login.php">Iniciar Sesi&oacute;n</a>
                <a href="formularioDAdmon.php">Respuestas Formulario Datos</a>
                
            </nav>
        </div>
    </header>


    <?php
    include_once("banner.html")
    ?>

        <section id="blog">
        <form action="validar.php" method="post" action="">
                <h1 style="color: white; align: center">INGRESE SUS DATOS</h1><br><br>
                <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
                <p>Contrase&ntilde;a <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
                <input type="submit" value="ingresar">
            </form> 
        </section>

    </main>
    <?php
    include_once("pie.html")
    ?>
</body>

</html>