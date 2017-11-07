<?php
namespace banking\domain\model;

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $bankAccounts;

    function Customer()
    {}
    
    public function getFullName() {
        return $this->lastName.", ".$this->firstName;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setBankAccounts($bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;
    }

    
    
}

