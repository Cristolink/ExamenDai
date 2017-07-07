<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

$nomMedico = $_POST['nomMedico'];
$rutMedico = $_POST['rutMedico'];
$idEspecialidad = $_POST['idEspecialidad'];
$fechaContratacion = $_POST['fechaContratacion'];
$valorConsulta = $_POST['valorConsulta'];

$oMedico = new Medico();
$oMedico->rut=$rutMedico;
$oMedico->nomMedico=$nomMedico;
$oMedico->especialidad=$idEspecialidad;
$oMedico->fechaContratacion=$fechaContratacion;
$oMedico->valorConsulta=$valorConsulta;
if($oMedico->AgregarMedico()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>CONTRATAR MEDICOS</title>
    </head>
    <body>
        
        <div class="contenido">
      
            <h1>EL MEDICO HA SIDO CONTRATADO CORRECTAMENTE</h1>
               
                <a href="../../../index.php">Volver</a>

        </div> 

        </form>
    </body>
</html>

<?php
}
else
{
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>DESPEDIR MEDICOS</title>
    </head>
    <body>
        
        <div class="contenido">
      
            <h1>EL MEDICO NO HA SIDO CONTRATADO CORRECTAMENTE</h1>
               
                <a href="../../../index.php">Volver</a>

        </div> 

        </form>
    </body>
</html>
<?php
}