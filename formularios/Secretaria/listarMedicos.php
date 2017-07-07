<?php
    include '../../Constantes.php';
    include '../../Librerias.php';
    if(isset($_SESSION['SECRETARIA'])) {
    $sqlMedico="SELECT rut, nomMedico, fechaContratacion, especialidad, valorConsulta FROM medico ";
    $queryMedico=mysqli_query($con,$sqlMedico);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>LISTAR MEDICOS</title>
    </head>
    <body>
        
        
        <div class="contenido">
                <h1>Listar Medicos</h1>
                
                    Rut Medico
                    Nombre Medico
                    Fecha Contratacion
                    Especialidad
                    Valor Consulta<BR>
                    
                        <?php 
                            while($idMedicolst = mysqli_fetch_array($queryMedico)) { 
                                echo $idMedicolst['rut'].'-';
                                echo $idMedicolst['nomMedico'].'-';
                                echo $idMedicolst['fechaContratacion'].'-';
                                echo $idMedicolst['especialidad'].'-';
                                echo $idMedicolst['valorConsulta'].'<br>'; 
                            }
                        ?>
                    <a href="../../index.php">Volver</a>
                </div>
       
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['SECRETARIA'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>
