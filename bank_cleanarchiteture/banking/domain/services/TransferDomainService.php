<?php
namespace banking\domain\services;

use banking\domain\model\BankAccount;

class TransferDomainService
{

    public function performTransfer(BankAccount $originAccount, BankAccount $destinationAccount, $amount){
        echo $originAccount->getNumber();
        echo $destinationAccount->getNumber();
        echo $amount;
        $this->validateData($originAccount, $destinationAccount, $amount);
        $originAccount->withdrawMoney($amount);
        $destinationAccount->depositMoney($amount);
    }
    
    private function validateData(BankAccount $originAccount, BankAccount $destinationAccount, $amount){
        if ($originAccount == null || $destinationAccount == null) {
            //throw new \InvalidTransferBankAccountException();
            echo "InvalidTransferBankAccountException";
        }
        if ($originAccount->getNumber() == $destinationAccount->getNumber()) {
            //throw new \SameTransferBankAccountException();
            echo "SameTransferBankAccountException";
        }
    }
    
    public function test(){
        echo "Prueba";
    }
}

