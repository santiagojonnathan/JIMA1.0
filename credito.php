<!DOCTYPE html>
<html lang="es">



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

                    <form class="" action="resFormularioC.php" method="post">

                        <div class="informacion">

                            <div class="campo">
                                <label for="nombre">Nombre(s)
                                    <input type="text" name="cNombre" id="nombre">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Apellido Paterno
                                    <input type="text" name="cApePat" id="apellidoP">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="apellido">Apellido Materno
                                    <input type="text" name="cApeMat" id="apellidoM">
                                </label>
                            </div>
                            <div class="campo">
                                <label for="CURP">CURP
                                    <input type="text" name="cCurp" id="CURP">
                                </label>
                            </div>

                            <div class="campo">
                                <label for="IMSSS">No. IMSSS
                                    <input type="text" name="cNoImss" id="IMSSS">
                                </label>
                            </div>

                            <div class="campo">
                                <label for="telefono">Número de Telefono 1
                                    <input type="text" name="cTel" id="cTel" maxlength="10" minlength="10">
                                </label>
                               <br> <label for="telefono">Número de Telefono 2
                                    <input type="text" name="cTel2" id="cTel2" maxlength="10" minlength="10">
                                </label>
                            </div>
                            
                            
                            <!-- Desde un checkbox-->
                            
                        </div>
                        <!--.informacion-->

                        <div class="especializacion">
                            <h3>Tipo de Crédito</h3>

                            <select name="cCodCre" value="-Any-">
                                <option>- Selecciona una area -</option>
                                <option value="1">FOVISSSTE</option>
                                <option value="2">COFINAVIT</option>
                                <option value="3">BANCA HIPOTECARIA</option>
                                <option value="4">OTRO</option>
                            </select>
                            <input type="submit">
                        </div>
                    
                    
                    </form>


                </div>

            </div>
        </section>
        <?php
        include_once("info.html");
        include_once("pie.html");

        ?>


    </main>

   

</body>

</html>