<?php
namespace banking\infrastructure\repository\mysqli;

use banking\domain\repository\GenericRepository;

class GenericRepositoryMysqli implements GenericRepository 
{
    private $conexionMySql;
    
    public function getConexionMySql()
    {
        return $this->conexionMySql;
    }

    public function setConexionMySql($conexionMySql)
    {
        $this->conexionMySql = $conexionMySql;
    }

    public function save($entity){
        
    }
    public function update($entity){
        
    }
    public function merge($entity){
        
    }
}

