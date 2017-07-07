<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

$rutMedico = $_POST['rut'];
$oMedico = new Medico();
$oMedico->rut=$rutMedico;
if($oMedico->EliminarMedico()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>DespedirMedicos</title>
    </head>
    <body>
        
        <div id="Cabecera">
        </div>  
        <div id="Cuerpo">
                <h1>EL MEDICO HA SIDO DESPEDIDO CORRECTAMENTE</h1>
                
                <a href="../../../index.php">Volver</a>

        </div> 

        </form>
    </body>
</html>
<?php
}