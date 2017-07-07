<?php
    include 'constantes.php';
    include 'librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>
     
         <div class="contenido"> 
           
             <center>
        
    <!-- Acá comienzan los SESSION diviendo que tipo de sesión fue iniciada, ya sea director, administrador, secretaria o paciente -->
        <?php if(isset($_SESSION['DIRECTOR'])) { ?>
                    <a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a>
                    <br>
        
            <h1>Mantenedor de Director: </h1>
              
            <a href="formularios/director/listarMedicos.php">Listar Medicos</a>
            <a href="formularios/director/listarPaciente.php">Listar Pacientes</a>
                
        
        <?php }if(isset($_SESSION['ADMINISTRADOR'])) { ?>
     
           <a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a>
           
            <h1>Administrador: </h1>
            <h2>Paciente</h2>
            <a href="formularios/administrador/listarPaciente.php">Listar Pacientes</a>
            <a href="formularios/administrador/registrarPaciente.php">Registrar Pacientes</a>         
            <a href="formularios/administrador/eliminarPaciente.php">Eliminar Pacientes</a>
            <br>
            <h2>Medico</h2>
            <br>
            <a href="formularios/administrador/listarMedicos.php">Listar Medico</a>
            <a href="formularios/administrador/registrarMedico.php">Contratar Medico</a>           
            <a href="formularios/administrador/eliminarMedico.php">Despedir Medico</a>
            <br>
            <h2>Usuario</h2>
            <br>
            <a href="formularios/administrador/listarUsuario.php">Listar Usuario</a>
            <a href="formularios/administrador/registrarUsuario.php">Registrar Usuario</a>
            <a href="formularios/administrador/EliminarUsuario.php">Eliminar Usuario</a>
      
            
        <?php }if(isset($_SESSION['SECRETARIA'])) { ?>
      
           <a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a>
            <h1>SECRETARIA: </h1>

            <h3>Paciente</h3>
            <a href="formularios/secretaria/listarPaciente.php">Listar Paciente</a>
            <br>
            <h3>Medico</h3>
            <br>
            <a href="formularios/secretaria/listarMedicos.php">Listar Medico</a>
            <br>
            <h3>Atenciones</h3>
            <br>
            <a href="formularios/secretaria/registrarAtencion.php">Agendar  Atencion</a>
            <a href="formularios/Secretaria/eliminarAtencion.php">Eliminar Atencion</a>
            
 
        
            <?php }if(isset($_SESSION['PACIENTE'])) { ?>
     
           <a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a>
            <h1>PACIENTE: </h1>
   
            <a href="formularios/paciente/listarAtencion.php">Listar Atencion</a>
        
        <?php } ?> 
        <?php if(!isset($_SESSION['PACIENTE']) && !isset($_SESSION['SECRETARIA']) && !isset($_SESSION['DIRECTOR'])
                && !isset($_SESSION['ADMINISTRADOR'])) { ?>
        
            
            
            
     <!-- Este es el login que se muestra en un principio al ingresar, siempre sera mostrado a menos que  -->       
         
        <h1>Mantenedor de usuarios: </h1>
        <form action="controladores/Usuario/Login.php" method="POST">
            User: <input type="text" name="user">
            <br>
            Password: <input type="password" name="pass">
        <input type="submit" value="Login">
        </center>
             
        </div>
          
    </body>
</html>
 <?php
            } 
        ?>