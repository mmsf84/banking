<?php
namespace banking\infrastructure\repository\mysqli;

class ConexionMysqli
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $conexion;
    
    function ConexionMysqli(){
        $db_host = "localhost";
        $db_name = "banking";
        $db_user = "root";
        $db_pass = "";        
    }
    public function getConexion()
    {
        $this->conexion = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        return $this->conexion;
        }    
    
}

?>