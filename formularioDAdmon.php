<!DOCTYPE html>
<html lang="es">



<body>

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
    
    include_once("banner.html");
    include_once("modelo\operacionesBD.php");
    $sErr = "";
    $arrFormularioD = null;
    $oFormularioD = new operacionesFormularioD();
    try {
        $arrFormularioD = $oFormularioD->buscarTodos();
    } catch (Exception $e) {
        error_log($e->getFile() . "" . $e->getLine() . "" . $e->getMessage(), 0);
        $sErr = "Error en base de datos, comunicarse con el administrador";
    }
    ?>

    <main>

    <section>
			<h3>Formulario Dudas</h3>
			<form name="formTablaGral" method="post" action="resFormularioDA.php">
				<input type="hidden" name="txtClave">
				<input type="hidden" name="txtOpe">
				<table border="1">
					<tr>
						<td>Clave</td>
						<td>Nombre</td>
                        <td>Email</td>
                        <td>Telefono</td>
                        <td>Comentario</td>
                        <td>Proyecto</td>
						<td>Operaci&oacute;n</td>
					</tr>
					<?php
						if ($arrFormularioD!=null){
							foreach($arrFormularioD as $oFormularioD){
					?>
					<tr>
						<td class="llave"><?php echo $oFormularioD->getfIdFormulario(); ?></td>
						<td><?php echo $oFormularioD->getfNombre(); ?></td>
                        <td><?php echo $oFormularioD->getfEmail(); ?></td>
                        <td><?php echo $oFormularioD->getfTel(); ?></td>
                        <td><?php echo $oFormularioD->getfComentario(); ?></td>
                        <td><?php echo $oFormularioD->getfIdProyecto(); ?></td>

						<td>
							
							<input type="submit" name="Submit" value="Borrar" onClick="txtClave.value=<?php echo $oFormularioD->getfIdFormulario(); ?>; txtOpe.value='b'">
						</td>
					</tr>
					<?php 
							}//foreach
						}else{
					?>     
					<tr>
						<td colspan="2">No hay datos</td>
					</tr>
					<?php
						}
					?>
				</table>
				
			</form>
		</section>
    </main>

    <?php
    include_once("info.html");
    include_once("pie.html");

    ?>


</body>

</html>