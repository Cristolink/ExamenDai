<?php
class Especialidad{
    var $idEspecialidad;
    var $nombreEspecialidad;
    
    function __construct($idEspecialidad=0,$nombreEspecialidad=""){
            $this->idEspecialidad=$idEspecialidad;
            $this->nomEspecialidad=$nombreEspecialidad;
    }    
    
    function AgregarEspecialidad(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO especialidad(nomEspecialidad) VALUES('$this->nomEspecialidad');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
   
    
    
    function EliminarEspecialidad(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM especialidad WHERE idEspecialidad=$this->idEspecialidad;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraerEspecialidad()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT idEspecialidad, nomEspecialidad FROM especialidad WHERE idEspecialidad=$this->idEspecialidad;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oEspecialidad = new Especialidad($fila["idEspecialidad"],
                                        $fila["nomEspecialidad"]);
         }
         return $oEspecialidad;
    }
    
}
