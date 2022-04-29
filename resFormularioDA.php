<?php
    include_once("modelo\operacionesBD.php");

    $sErr=""; $sOpe = ""; $sCve = "";

    $oFormularioD = new operacionesFormularioD();

    $sCve = $_POST["txtClave"];
   
    $sOpe = $_POST["txtOpe"];
	
    $oFormularioD->setnIdFormularioD($sCve);

    if ($sOpe != "b"){
    $oFormularioD->setfNombre($_POST['fNombre']);
    $oFormularioD->setfApePat($_POST['fApePat']);
    $oFormularioD->setfApeMat($_POST['fApeMat']);
    $oFormularioD->setfEmail($_POST['fEmail']);
    $oFormularioD->setfComentario($_POST['fComentario']);
    $oFormularioD->setfTel($_POST['fTel']);
    $oFormularioD->setfTel2($_POST['fTel2']);
    $oFormularioD->setfIdProyecto($_POST['fIdProyecto']);
    }
    
    try{
        if ($sOpe == 'a')
            $nResultado = $oFormularioD->insertar();
        else if ($sOpe == 'b'){
            $nResultado = $oFormularioD->borrar();
        }
            
        else 
            $nResultado = $oFormularioD->modificar();
        
        if ($nResultado != 1){
            $sError = "Error en bd";
        }
    }catch(Exception $e){
        //Enviar el error específico a la bitácora de php (dentro de php\logs\php_error_log
        error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
        $sErr = "Error en base de datos, comunicarse con el administrador";
    }



    

    if ($sErr == ""){
        //header("Location: formulario.php");
    }else{
       // header("Location: formulario.php");
    }
		

?>