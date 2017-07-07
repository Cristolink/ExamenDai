<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlUsuario="select idUsuario, nomUsuario from usuario";
    $queryUsuario=mysqli_query($con,$sqlUsuario);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR USUARIO</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>ELIMINAR USUARIO</h1>
                
                    <form action="../../controladores/Usuario/eliminar.php" method="POST">
                        
                            <select name="idUsuario">
                                <?php 
                                    while($idUsuariolst = mysqli_fetch_array($queryUsuario)) { 
                                    ?> 
                                    <option value =  <?php echo $idUsuariolst['idUsuario'];?> >
                                    <?php echo $idUsuariolst['nomUsuario'].' - '.$idUsuariolst['idUsuario']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        
                        
                        <input type="submit" value="Eliminar">
                    </form>
        <a href="../../index.php">Volver</a>
    </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>