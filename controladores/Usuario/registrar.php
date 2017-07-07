<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php


$slTipoUsuario = $_POST['slTipoUsuario'];
$nomUsuario = $_POST['nombreUsuario'];
$claveUsuario = $_POST['claveUsuarios'];
$oUsuario = new Usuario();
$oUsuario->nomUsuario=$nomUsuario;
$oUsuario->clave=$claveUsuario;
$oUsuario->idTipoUsuario=$slTipoUsuario;

if($oUsuario->AgregarUsuario()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>RegistrarUsuarios</title>
    </head>
    <body>
        
     
        <div class="contenido">
                <h4>EL USUARIO HA SIDO AGREGADO CON EXITO</h4>
                
                <a href="../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}

