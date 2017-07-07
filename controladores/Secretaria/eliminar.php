<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php
$idAtencion = $_POST['atencion'];
$oAtencion = new Atencion();
$oAtencion->idAtencion=$idAtencion;

if($oAtencion->EliminarAtencion()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR ATENCION</title>
    </head>
    <body>
        <div class="contenido">
       
                <h4>LA ATENCION HA SIDO ELIMINADA CORRECTAMENTE</h4>
               
                <a href="../../index.php">Volver</a>
</div>
       
    </body>
</html>
<?php
}