<!DOCTYPE html>
<html lang="es">

<head>
    <title>Habitad Promotora y Constructora de Ciudades</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum scale = 1, minimun-scale=1">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/varios.js"></script>
</head>
<?php
include_once("cabecera.html");
?>

<body>

    <?php
    include_once("banner.html");
    ?>




    <section id="blog">
        <h3>RELLENE LOS CAMPOS A CONTINUACION</h3>
        <br>
        <h3>DATOS DEL SOLICITANTE</h3>
        <br>
        <div class="contenedor">


            <div class="contenido">

                <form class="" action="resFormularioD.php" method="post">

                    <div class="informacion">

                        <div class="campo">
                            <label for="nombre">Nombre(s)
                                <input type="text" name="fNombre" id="nombre">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Apellido Paterno
                                <input type="text" name="fApePat" id="apellidoP">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Apellido Materno
                                <input type="text" name="fApeMat" id="apellidoM">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Correo electronico
                                <input type="text" name="fEmail" id="email">
                            </label>
                        </div>
                        <div class="campo">
                            <label for="apellido">Numero de Telefono
                                <input type="text" name="fTel" id="tel1" maxlength="10" minlength="10">
                            </label>
                        </div>

                        <div class="campo">
                            <label for="apellido">Numero de Telefono 2
                                <input type="text" name="fTel2" id="tel1" maxlength="10" minlength="10">
                            </label>
                        </div>
                        <!-- Desde un checkbox-->

                    </div>
                    <!--.informacion-->

                    <div class="especializacion">
                        <h3>Tipo de Proyecto</h3>

                        <select name="fIdProyecto" value="-Any-">
                            <option>- Selecciona una area -</option>
                            <option value="1">DEPARTAMENTO</option>
                            <option value="2">RESIDENCIA</option>
                            <option value="3">OTRO</option>
                        </select>
                    </div>

                    <div class="textarea">
                        <div class="campo">
                            <h3>Comentario/Mensaje</h3>
                            <label for="mensaje"> Comentario/Mensaje <br />
                                <textarea name="fComentario" rows="8" cols="40" id="mensaje"></textarea>
                            </label>
                            
                            <input type="Submit">
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </section>


    <?php
    include_once("info.html");
    ?>

    </main>

    <?php
    include_once("pie.html");
    ?>

</body>

</html>