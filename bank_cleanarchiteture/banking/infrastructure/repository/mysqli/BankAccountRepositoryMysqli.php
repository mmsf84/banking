<?php
namespace banking\infrastructure\repository\mysqli;

use banking\domain\repository\BankAccountRepository;

class BankAccountRepositoryMysqli implements BankAccountRepository
{
    public function findByNumber($accountNumber){
        $db = new ConexionMysqli();
        $consulta = "SELECT * FROM bank_account WHERE number = '".$accountNumber."'";
        $resultado = mysqli_query($db->getConexion(), $consulta);
        return $resultado;
    }
    public function findByNumberLocked($accountNumber){
        
    }
    public function save($entity){
        
    }
    public function update($entity){
        
    }
    public function merge($entity){
        
    }
    
}

