<?php
    include '../../constantes.php';
    include '../../librerias.php';
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlUsuario="SELECT idUsuario, idTipoUsuario, nomUsuario FROM usuario ";
    $queryUsuario=mysqli_query($con,$sqlUsuario);
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
         <title>LISTAR USUARIOS</title>
    </head>
    <body>
        
      
        <div class="contenido">
    <center>
                <h1>Listar Usuarios</h1>
                
                        ID Usuario
                        ID Nombre Usuario
                        ID Tipo Usuario
                            <br>
                         <?php 
                            while($idUsuariolst = mysqli_fetch_array($queryUsuario)) { 
                                
                         echo $idUsuariolst['idUsuario']; 
                         echo '-';
                         echo $idUsuariolst['idTipoUsuario']; 
                         echo '-';
                         echo $idUsuariolst['nomUsuario']; 
                            
                         ?>
                            <br>
                            <?php
                        
                      }
                        ?>

               </center>    
    <a href="../../index.php">Volver</a>
             </div>  
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>
