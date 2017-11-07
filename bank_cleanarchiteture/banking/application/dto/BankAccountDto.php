<?php

use banking\application\dto\CustomerDto;

class BankAccountDto  { 
    private $id;
    private $number;
    private $balance;
    private $isLocked;
    private $customer;
    
    public function getId()
    {
        return $this->id;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getIsLocked()
    {
        return $this->isLocked;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
    }

    public function setCustomer(CustomerDto $customer)
    {
        $this->customer = $customer;
    }
    
}
?>