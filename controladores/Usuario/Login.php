<?php
    include '../../constantes.php';
    include '../../librerias.php';
?>
<?php
$usuario = new Usuario();
$usuario->nomUsuario=$_POST['user'];
$usuario->clave=$_POST['pass'];

if( $usuario->VerificarClave()){

    $DatosUsuario = new Usuario();
    $DatosUsuario = $usuario->LlamarUsuario();
    

    if($DatosUsuario->idTipoUsuario==1)
    {
        $_SESSION['DIRECTOR']=$DatosUsuario;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
    }
 
    if($DatosUsuario->idTipoUsuario==2)
    {
        $_SESSION['ADMINISTRADOR']=$DatosUsuario;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
    }

    if($DatosUsuario->idTipoUsuario==3)
    {
        $_SESSION['SECRETARIA']=$DatosUsuario;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
    }
  
    if($DatosUsuario->idTipoUsuario==4)
    {
        $_SESSION['PACIENTE']=$DatosUsuario;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
    }
    
}
else
{
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/Examenfinal/index.php');
}