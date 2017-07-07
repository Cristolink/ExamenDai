<?php
class Usuario{
    
    var $idUsuario;
    var $nomUsuario;
    var $clave;
    var $idTipoUsuario;
    
    function __construct($idUsuario=0,$nomUsuario=0,$clave=0,$idTipoUsuario=0){
            $this->idUsuario=$idUsuario;
            $this->nomUsuario=$nomUsuario;
            $this->clave=$clave;
            $this->idTipoUsuario=$idTipoUsuario;
    }  
    
              
    function AgregarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->clave);
        $sql = "INSERT INTO usuario(nomUsuario, clave, idTipoUsuario) VALUES ('$this->nomUsuario', '$clavemd5', '$this->idTipoUsuario');";
        $resultado=$db->query($sql);
        
        if ($resultado)
            return true;
        else
            return false;
        
    }
        
    function EliminarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $sql = "DELETE FROM usuario WHERE idUsuario='$this->idUsuario';";
        $resultado=$db->query($sql);
        
        if ($resultado)
            return true;
        else
            return false;
    }
    
    function VerificarClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->clave);
        $sql = "SELECT * FROM usuario WHERE nomUsuario='$this->nomUsuario' AND clave='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }

    function LlamarUsuario()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT idUsuario, nomUsuario, clave, idTipoUsuario FROM usuario WHERE nomUsuario='$this->nomUsuario';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oUsuario = new Usuario(      $fila["idUsuario"],
                                        $fila["nomUsuario"],
                                        $fila["clave"],
                                        $fila["idTipoUsuario"]);
         }
         return $oUsuario;
    }
    
}