<?php
class Medico{
    var $rut;
    var $nomMedico;
    var $fechaContratacion;
    var $especialidad;
    var $valorConsulta;
    
    function __construct($rut=0,$nomMedico="",$fechaContratacion="",$especialidad=0,$valorConsulta=0){
            $this->rut=$rut;
            $this->nomMedico=$nomMedico;
            $this->fechaContratacion=$fechaContratacion;
            $this->especialidad=$especialidad;
            $this->valorConsulta=$valorConsulta;
    }    
    
    function AgregarMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO medico(rut,nomMedico,fechaContratacion,especialidad,valorConsulta) VALUES  ($this->rut,"
                . " '$this->nomMedico', '$this->fechaContratacion',$this->especialidad,$this->valorConsulta);";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
      function EliminarMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM medico WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
     function LlamarMedico()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT rut,nomMedico,fechaContratacion,especialidad,valorConsulta FROM medico WHERE rut='$this->rut';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oMedico = new Medico($fila["rut"],
                                        $fila["nomMedico"],
                                        $fila["fechaContratacion"],
                                        $fila["especialidad"],
                                        $fila["valorConsulta"]);
         }
         return $oMedico;
    }

    
  
    
   
    
}
