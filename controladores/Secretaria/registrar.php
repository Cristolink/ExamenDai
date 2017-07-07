<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php

$rutMedico = $_POST['rutMedico'];
$rutPaciente = $_POST['rutPaciente'];


$oAtencion = new Atencion();
$oAtencion->rut=$rutMedico;
$oAtencion->rutPaciente=$rutPaciente;

if($oAtencion->AgregarAtencion()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>AGRENDAR ATENCION</title>
    </head>
    <body>
        
        <div class="contenido">
      
            <h1>LA ATENCION HA SIDO AGENDADA CORRECTAMENTE</h1>
               
                <a href="../../index.php">Volver</a>

        </div> 

        </form>
    </body>
</html>

<?php
}