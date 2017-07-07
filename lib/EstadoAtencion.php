<?php
class EstadoAtencion{
    var $idEstado;
    var $estado;
    
    function __construct($idEstado=0,$estado=""){
            $this->idEstado=$idEstado;
            $this->estado=$estado;
    }    
    
    function AgregarEstado(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO estado_atencion(estado) VALUES('$this->estado');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function EliminarEstado(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM estado_atencion WHERE idEstado=$this->idEstado;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function LlamarEstado()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT idEstado, estado FROM estado_atencion WHERE idEstado=$this->idEstado;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oEstado = new EstadoConsultaa($fila["idEstado"],
                                        $fila["estado"]);
         }
         return $oEstado;
    }
    
}