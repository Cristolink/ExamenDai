<?php
include("../../constantes.php");
include("../../librerias.php");
?>
<?php
$idUsuarioPost = $_POST['idUsuario'];

$oUsuario = new Usuario();
$oUsuario->idUsuario=$idUsuarioPost;

if($oUsuario->EliminarUsuario()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR USUARIOS</title>
    </head>
    <body>
        
        
        <div class="contenido">
                <h1> El usuario ha sido eliminado correctamente</h1>
               
                <br>
                <a href="../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>

<?php
}

