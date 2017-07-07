<?php
class Paciente{
    var $rut;
    var $idTipoUsuario;
    var $idUsuario;
    var $nomPaciente;
    var $fechaNacimiento;
    var $sexo;
    var $direccion;
    var $telefono;
    
    function __construct($rut=0,$idTipoUsuario=0,$idUsuario=0,$nomPaciente=0,$fechaNacimiento="",$sexo="",$direccion="",$telefono=""){
            $this->rut=$rut;
            $this->idTipoUsuario=$idTipoUsuario;
            $this->idUsuario=$idUsuario;
            $this->nomPaciente=$nomPaciente;
            $this->fechaNacimiento=$fechaNacimiento;
            $this->sexo=$sexo;
            $this->direccion=$direccion;
            $this->telefono=$telefono;
    }    
    
    function AgregarPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $direccionMD5 = md5($this->direccion);
        $sql="INSERT INTO paciente(rut, idTipoUsuario,idUsuario, nomPaciente, fechaNacimiento, sexo, Direccion, Telefono) VALUES ('$this->rut',"
                . " $this->idTipoUsuario,$this->idUsuario, '$this->nomPaciente','$this->fechaNacimiento','$this->sexo','$direccionMD5','$this->telefono');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
        
    
    function EliminarPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM paciente WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function LlamarUsuario()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 
        $sql = "SELECT rut,idTipoUsuario,idUsuario,nomPaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente WHERE rut='$this->rut';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oPaciente = new Paciente($fila["rut"],
                                        $fila["idTipoUsuario"],
                                        $fila["idUsuario"],
                                        $fila["nomPaciente"],
                                        $fila["fechaNacimiento"],
                                        $fila["sexo"],
                                        $fila["Direccion"],
                                        $fila["Telefono"]);
         }
         return $oPaciente;
    }
    
    
    
}