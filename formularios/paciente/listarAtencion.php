<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['PACIENTE'])) {
    
    $sqlAtencion="SELECT idAtencion,fechaAtencion,rutPaciente,rutMedico,idEstado FROM atencion;  ";
    $queryAtencion=mysqli_query($con,$sqlAtencion);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>LISTAR ATENCIO</title>
    </head>
    <body>
        
        
        <div class="contenido">
                <h1>Listar Medicos</h1>
                
                    ID Atencion
                    Fecha Atencion
                    Rut Paciente
                    Rut Medico
                    ID Estado
                    <BR>
                    
                        <?php 
                            while($rutAtencionlst = mysqli_fetch_array($queryAtencion)) { 
                                echo $rutAtencionlst['idAtencion'].'-';
                                echo $rutAtencionlst['fechaAtencion'].'-';
                                echo $rutAtencionlst['rutPaciente'].'-';
                                echo $rutAtencionlst['rutMedico'].'-';
                                echo $rutAtencionlst['idEstado'].'<br>'; 
                            }
                        ?>
                    <a href="../../index.php">Volver</a>
                </div>
       
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['PACIENTE'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>