<?php
    include '../../constantes.php';
    include '../../librerias.php';
    if(isset($_SESSION['SECRETARIA'])) {
    $sqlPaciente="SELECT rut,nomPaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente;  ";
    $queryPaciente=mysqli_query($con,$sqlPaciente);
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>LISTAR PACIENTES</title>
    </head>
    <body>
        
      
        <div class="contenido">
    <center>
                <h1>Listar Pacientes</h1>
                
                        Rut Paciente
                        Nombre Paciente
                        Fecha Nacimiento
                        Sexo
                        Direccion
                        Telefono
                            <br>
                         <?php 
                            while($rutlst = mysqli_fetch_array($queryPaciente)) { 
                                
                         echo $rutlst['rut']; 
                         echo '-';
                         echo $rutlst['nomPaciente']; 
                         echo '-';
                         echo $rutlst['fechaNacimiento']; 
                         echo '-';
                         echo $rutlst['sexo']; 
                         echo '-';
                         echo $rutlst['Direccion']; 
                         echo '-';
                         echo $rutlst['Telefono']; 
 
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

<?php if(!isset($_SESSION['SECRETARIA'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>
