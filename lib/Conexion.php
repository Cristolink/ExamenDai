<?php
class Conexion{
    var $objconn;
    var $dbusr= "root";
    var $dbpwd= "";
    var $dbhots= "localhost";
    var $dbname= "examen_Hospital";
    public function  Conectar()
            {

        
                $this->objconn = new mysqli( $this->dbhots, 
                                             $this->dbusr, 
                                             $this->dbpwd,
                                             $this->dbname);
           if($this->objconn ->connect_errno){
            echo "fallo al conectar a MySQL: (". $this->objconn-> connect_errno . ") " .$miconn->connect_errno;
        }   
        return true;
    }
}

$con=mysqli_connect("localhost","root","","examen_Hospital");
?>