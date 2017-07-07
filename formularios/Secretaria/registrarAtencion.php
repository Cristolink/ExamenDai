<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['SECRETARIA'])) {
$sqlPaciente="SELECT rut,nomPaciente from paciente;  ";
    $queryPaciente=mysqli_query($con,$sqlPaciente);    
    
$sqlMedico="SELECT rut, nomMedico, especialidad from medico;";
$queryMedico= mysqli_query($con, $sqlMedico);


        
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>REGISTRAR ATENCION</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>AGREGAR ATENCION</h1>
                
                     <form action="../../controladores/secretaria/registrar.php" method="POST">
                       RUT MEDICO
                            <select name="rutMedico">
                                <?php 
                                    while($idMedicolst = mysqli_fetch_array($queryMedico)) { 
                                    ?> 
                                    <option value =  <?php echo $idMedicolst['rut'];?> >
                                    <?php echo $idMedicolst['nomMedico']?>
                                    

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                       <br>
                        RUT Paciente
                            <select name="rutPaciente">
                                <?php 
                                    while($idPacientelst = mysqli_fetch_array($queryPaciente)) { 
                                    ?> 
                                    <option value =  <?php echo $idPacientelst['rut'];?> >
                                    <?php echo $idPacientelst['nomPaciente'].' - '.$idPacientelst['rut']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        <br>
                       Fecha Atencion
                            <input type="date" name="fechaAtencion">
                       <input type="submit" value="Agendar">
                    </form>
       
        <a href="../../index.php">Volver</a>
    </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['SECRETARIA'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>