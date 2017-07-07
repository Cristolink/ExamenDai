<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php
$rutPaciente = $_POST['rut'];
$oPaciente = new Paciente();
$oPaciente->rut=$rutPaciente;
if($oPaciente->EliminarPaciente()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR PACIENTES</title>
    </head>
    <body>
        
       
                <h4>EL PACIENTE HA SIDO ELIMINADO CORRECTAMENTE</h4>
               
                <a href="../../../index.php">Volver</a>

        </form>
    </body>
</html>
<?php
}
