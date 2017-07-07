<?php
    include '../../Constantes.php';
    include '../../librerias.php';
    if(isset($_SESSION['ADMINISTRADOR'])) {
    $sqlEspecialidad="select idEspecialidad, nomEspecialidad from especialidad";
    $miqueryEspecialidad=mysqli_query($con,$sqlEspecialidad);    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
        <title>CONTRATAR MEDICO</title>
    </head>
    <body>
        
        
      
        <div class="contenido">
                <h1>CONTRATAR MEDICO</h1>
               
                <form action="../../controladores/Administrador/Medico/registrar.php" method="POST">
                        Nombre Medico
                            <input type="text" name="nomMedico">
                            <br>
                        Rut
                            <input type="number" name="rutMedico">
                            <br>
                        ID Especialidad
                            <select name="idEspecialidad">
                                <?php 
                                    while($idEspecialidadlst = mysqli_fetch_array($miqueryEspecialidad)) { 
                                    ?> 
                                    <option value =  <?php echo $idEspecialidadlst['idEspecialidad'];?> >
                                    <?php echo $idEspecialidadlst['nomEspecialidad']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        <br>
                        Fecha Contratacion
                            <input type="date" name="fechaContratacion">
                            <br>
                        Valor Consulta
                            <input type="number" name="valorConsulta">
                            <br>                        
                        <input type="submit" value="Contratar">
                    </form>
                
            
       
        </form>
          <a href="../../index.php">Volver</a>
        </div>
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['ADMINISTRADOR'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>
