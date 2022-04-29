<!DOCTYPE html>
<html lang="es">



<body>
    <?php
    include_once("cabecera.html");
    include_once("banner.html");
    include_once("modelo\operacionesBD.php");
    $sErr = ""; 
    $arrPrototipo = null;
    $oVivienda = new operacionesVivienda();
    try {
        $arrPrototipo = $oVivienda->buscarTodos();
    } catch (Exception $e) {
        error_log($e->getFile() . " " . $e->getLine() . " " . $e->getMessage(), 0);
        $sErr = "Error en base de datos, comunicarse con el administrador";
    }
    ?>

    <main>

        <section id="info">
            <h3>CASAS DISPONIBLES</h3>
            <br>

            <table border="1">
                <tr>
                    <td>Clave</td>
                    <td>No. Habitación</td>
                    <td>No. Pisos</td>
                    <td>Medidas</td>
                    <td>Precio $</td>
                    <td>Zona</td>
                    <td>Prototipo</td>

                </tr>
                <?php
                if ($arrPrototipo != null) {
                    foreach ($arrPrototipo as $oVivienda) {
                ?>
                        <tr>

                            <td><?php echo $oVivienda->getvidVivienda(); ?></td>
                            <td><?php echo $oVivienda->getvNHabi(); ?></td>
                            <td><?php echo $oVivienda->getvNPisos(); ?></td>
                            <td><?php echo $oVivienda->getvMedidas(); ?></td>
                            <td><?php echo $oVivienda->getvPrecio(); ?></td>
                            <td><?php echo $oVivienda->getvIdZona(); ?></td>
                            <td><?php echo $oVivienda->getvIdProt(); ?></td>





                        </tr>
                    <?php
                    } //foreach
                } else {
                    ?>
                    <tr>
                        <td colspan="2">No hay datos</td>
                    </tr>
                <?php
                }
                ?>
            </table>



            <br>
            <div class="galeria">

                <img src="img/casa1.jpg" width="500px">


                <p><b>Valle Alegre</b></p>
                <p>2 habitaciones</p>
                <p>1 piso</p>
                <p>Lote 6.00x14.00</p>
                <p>Casa/Habitación</p>
                <p>$250000000</p>

            </div>
            <div class="galeria">
                <div class="foto">
                    <img src="img/casa2.jpg" width="500px">
                </div>
                <div class="pie">
                    <p><b>GEO Los Pinos</b></p>
                    <p>3 habitaciones</p>
                    <p>2 pisos</p>
                    <p>Lote 45.00x15.00</p>
                    <p>Condominio</p>
                    <p>$300000000</p>
                </div>
            </div>
            <div class="galeria">
                <div class="foto">
                    <img src="img/casa3.jpg" width="500px">
                </div>
                <div class="pie">
                    <p><b>Cordoba 2000</b></p>
                    <p>3 habitaciones</p>
                    <p>2 pisos</p>
                    <p>Lote 45.00x20.00</p>
                    <p>Casa/Habitación</p>
                    <p>$280000000</p>
                </div>
            </div>
            <div class="galeria">
                <div class="foto">
                    <img src="img/casa4.jpg" width="500px">
                </div>
                <div class="pie">
                    <p><b>Villas de San Manuel</b></p>
                    <p>4 habitaciones</p>
                    <p>2 pisos</p>
                    <p>Lote 45.00x25.00</p>
                    <p>Casa/Habitación</p>
                    <p>$360000000</p>
                </div>
            </div>

        </section>
    </main>

    <?php
    include_once("info.html");
    include_once("pie.html");

    ?>


</body>

</html>