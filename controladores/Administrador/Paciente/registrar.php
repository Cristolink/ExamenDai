<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php
$nombrePaciente = $_POST['nombrePaciente'];
$rutPaciente = $_POST['rutPaciente'];
$sexo = $_POST['sexo'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$direccion = $_POST['direccionPaciente'];
$telefono = $_POST['telefonoPaciente'];
$idUsuario = $_POST['slidUsuario'];

$oPaciente = new Paciente();
$oPaciente->rut=$rutPaciente;
$oPaciente->nomPaciente=$nombrePaciente;
$oPaciente->sexo=$sexo;
$oPaciente->fechaNacimiento=$fechaNacimiento;
$oPaciente->direccion=$direccion;
$oPaciente->telefono=$telefono;
$oPaciente->idTipoUsuario=4;
$oPaciente->idUsuario=$idUsuario;

if($oPaciente->AgregarPaciente()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>REGISTRAR PACIENTES</title>
    </head>
    <body>
        
        <div class="contenido">
                <h4>EL PACIENTE HA SIDO AGREGADO CORRECTAMENTEr</h4>
                Paciente Agregado!
                <a href="../../../index.php">Volver</a>
        </div>
      
        </form>
    </body>
</html>

<?php
}
