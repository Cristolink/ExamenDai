<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlTipoUsuario="select idTipoUsuario, CategoriaUsuario from TipoUsuario";
    $queryTipoUsuario=mysqli_query($con,$sqlTipoUsuario);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>REGISTRAR USUARIO</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>AGREGAR USUARIO</h1>
                
                    <form action="../../controladores/Usuario/registrar.php" method="POST">
                        Nombre Usuario
                            <input type="text" name="nombreUsuario">
                            <br>
                            
                        Contraseña Usuario
                            <input type="password" name="claveUsuarios">
                            <br>
                        ID TipoDeUsuario
                        <br>
                            <select name="slTipoUsuario">
                                <?php 
                                    while($idTipoUsuariolst = mysqli_fetch_array($queryTipoUsuario)) { 
                                    ?> 
                                    <option value =  <?php echo $idTipoUsuariolst['idTipoUsuario'];?> >
                                    <?php echo $idTipoUsuariolst['CategoriaUsuario']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        <br>
                        <input type="submit" value="Agregar">
                    </form>
          
       
        <a href="../../index.php">Volver</a>
    </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>