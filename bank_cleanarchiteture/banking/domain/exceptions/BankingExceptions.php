<?php

class CannotWithdrawException extends Exception
{

    public function __construct($code = 0, Exception $previous = null) {
        $this->message = "Cannot withdraw in the account, it is locked or amount is greater than balance";
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

class AmountLessOrEqualToZeroException extends Exception
{
    
    public function __construct($code = 0, Exception $previous = null) {
        $this->message = "The amount cannot be less than or equal to zero";
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

class CannotDepositException extends Exception
{
    
    public function __construct($code = 0, Exception $previous = null) {
        $this->message = "Cannot deposit in the account, it is locked";
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

class InvalidTransferBankAccountException extends Exception
{
    
    public function __construct($code = 0, Exception $previous = null) {
        $this->message = "Cannot perform the transfer, invalid data in bank accounts specifications";
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

class SameTransferBankAccountException extends Exception
{
    
    public function __construct($code = 0, Exception $previous = null) {
        $this->message = "Cannot transfer money to the same bank account";
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

?>