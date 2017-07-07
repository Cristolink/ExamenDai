
<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlUsuario="select idUsuario, idTipoUsuario from Usuario";
    $queryUsuario=mysqli_query($con,$sqlUsuario);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>REGISTRAR USUARIO</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>AGREGAR Paciente</h1>
                
                    <form action="../../controladores/Administrador/Paciente/registrar.php" method="POST">
                        Rut
                            <input type="text" name="rutPaciente">
                            <br>
                         ID Usuario
                            <select name="slidUsuario">
                                <?php 
                                    while($idUsuariolst = mysqli_fetch_array($queryUsuario)) { 
                                    ?> 
                                    <option value =  <?php echo $idUsuariolst['idUsuario'];?> >
                                                    <?php echo $idUsuariolst['idUsuario'];?>
                                                    -
                                                   <?php echo $idUsuariolst['idTipoUsuario']; ?>
                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>  
                         <br>
                         Nombre Paciente
                         <input type="text" name="nombrePaciente">
                         <br>
                         Fecha Nacimiento
                            <input type="date" name="fechaNacimiento">
                         <br>
                         Sexo                        
                        <select name="sexo">
                                    <option value = 'Masculino'>
                                        Masculino
                                    </option> 
                                    <option value = 'Femenino'>
                                        Femenino
                                    </option> 
                                    
                            </select>                       
                        <br>
                        Direccion:
                        <input type="text" name="direccionPaciente">
                        <br>
                        Telefono:
                        <input type="text" name="telefonoPaciente">
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