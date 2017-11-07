<?php
namespace banking\domain\model;

//include '../exceptions/BankingExceptions.php';

class BankAccount{
    
    private $id;
    private $number;
    private $balance;
    private $isLocked;
    private $customer;

    function BankAccount()
    {}
    
    public function lock() {
        if ($this->isLocked === false) {
            $this->isLocked = true;
        }
    }
    
    public function unLock() {
        if ($this->isLocked === true) {
            $this->isLocked = false;
        }
    }
    
    public function hasIdentity() {
        return !empty(trim($this->number));
    }
    
    public function withdrawMoney($amount){
        $this->validateAmount($amount);
        if ($this->canBeWithdrawed($amount) === false) {
            //throw new \CannotWithdrawException();
            echo "CannotWithdrawException";
        }
        $this->balance = $this->balance - $amount;
    }
    
    public function depositMoney($amount){
        $this->validateAmount($amount);
        if ($this->getIsLocked() === true) {
            //throw new \CannotDepositException();
            echo "CannotDepositException";
        }
        $this->balance = $this->balance + $amount;
    }
    
    private function validateAmount($amount) {
        if ($amount <= 0) {
            //throw new \AmountLessOrEqualToZeroException();
            echo "AmountLessOrEqualToZeroException";
        }
    }
    
    public function canBeWithdrawed($amount) {
        return !$this->isLocked && ($this->balance >= $amount);
    }
    
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

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    
        
}

?>