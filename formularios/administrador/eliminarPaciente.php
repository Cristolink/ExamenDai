<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlPaciente="select rut, nomPaciente from paciente";
    $queryPaciente=mysqli_query($con,$sqlPaciente);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>ELIMINAR USUARIO</title>
    </head>
    <body>
        <div class="contenido">
               
                <h1>ELIMINAR PACIENTE</h1>
                
                   <form action="../../controladores/Administrador/Paciente/eliminar.php" method="POST">
                        
                            <select name="rut">
                                <?php 
                                    while($rutPacientelst = mysqli_fetch_array($queryPaciente)) { 
                                    ?> 
                                    <option value =  <?php echo $rutPacientelst['rut'];?> >
                                    <?php echo $rutPacientelst['nomPaciente'].' - '.$rutPacientelst['rut']; ?>

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

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}?>