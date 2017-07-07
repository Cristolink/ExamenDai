<?php
class TipoUsuario{
    var $idTipoUsuario;
    var $CategoriaUsuario;
    
    function __construct($idTipoUsuario=0,$CategoriaUsuario=""){
            $this->idTipoUsuario=$idTipoUsuario;
            $this->CategoriaUsuario=$CategoriaUsuario;
    }    
    
    function AgregarTipoUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO TipoUsuario(CategoriaUsuario) VALUES('$this->CategoriaUsuario');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarTipoUsuario(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE TipoUsuario SET CategoriaUsuario='$this->CategoriaUsuario' WHERE idTipoUsuario=$this->idTipoUsuario;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarConsulta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM TipoUsuario WHERE idTipoUsuario=$this->idTipoUsuario;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function LlamarTipoUsuario()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT idTipoUsuario, CategoriaUsuario FROM TipoUsuario WHERE idTipoUsuario=$this->idTipoUsuario;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oTipoUsuario = new Perfil(        $fila["idTipoUsuario"],
                                        $fila["TipoUsuario"]);
         }
         return $oTipoUsuario;
    }
    
}