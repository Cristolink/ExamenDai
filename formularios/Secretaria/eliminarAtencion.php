<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['SECRETARIA'])) {
    $sqlAtencion="select idAtencion, fechaAtencion, rutPaciente, rutMedico from atencion ";
    $queryAtencion=mysqli_query($con,$sqlAtencion);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR ATENCION</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>ELIMINAR ATENCION</h1>
                
                <form action="../../controladores/Secretaria/eliminar.php" method="POST">
                        
                            <select name="atencion">
                                <?php 
                                    while($idAtencionlst = mysqli_fetch_array($queryAtencion)) { 
                                    ?> 
                                    <option value =  <?php echo $idAtencionlst['idAtencion'];?> >
                                        <?php echo $idAtencionlst['idAtencion'];?> 
                                        -
                                        <?php echo $idAtencionlst['fechaAtencion'];?> 
                                        -
                                        <?php echo $idAtencionlst['rutPaciente'];?> 
                                        -
                                        <?php echo $idAtencionlst['rutMedico'];?> 
                                

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                       <br>
                        
                        <input type="submit" value="Eliminar">
                    </form>
        <a href="../../index.php">Volver</a>
    </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['SECRETARIA'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>