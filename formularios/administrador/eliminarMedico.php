<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlMedico="SELECT rut, nomMedico, fechaContratacion, especialidad, valorConsulta FROM medico ";
    $queryMedico=mysqli_query($con,$sqlMedico);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>DESPEDIR MEDICO</title>
    </head>
    <body>
        <div class="contenido">
               
            <h1>Despedir Medico</h1>
                
                   
                <form action="../../controladores/Administrador/Medico/eliminar.php" method="POST">
                            <label>RUT MEDICO</label>
                            <select name="rut">
                                <?php 
                                    while($idMedicolst = mysqli_fetch_array($queryMedico)) { 
                                    ?> 
                                    <option value =  <?php echo $idMedicolst['rut'];?> >
                                    <?php echo $idMedicolst['nomMedico'].' - '.$idMedicolst['rut']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        
                        
                        <input type="submit" value="Despedir">
                    </form>
        <a href="../../index.php">Volver</a>
    </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>