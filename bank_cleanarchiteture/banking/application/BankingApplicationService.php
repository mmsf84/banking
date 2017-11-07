<?php
namespace banking\application;

use banking\infrastructure\repository\mysqli\BankAccountRepositoryMysqli;
use banking\domain\services\TransferDomainService;

class BankingApplicationService{
      
    //debe ser transaccion
    public function performTransfer(\BankAccountDto $originBankAccountDto, 
        \BankAccountDto $destinationBankAccountDto, $amount){
        
        $bankAccountRepository = new BankAccountRepositoryMysqli();
        $transferDomainService = new TransferDomainService();

        echo $originBankAccountDto->getNumber();
        echo $destinationBankAccountDto->getNumber();
        echo $amount;
        $originAccount = $this->bankAccountRepository.findByNumberLocked($originBankAccountDto->getNumber());
        $destinationAccount = $this->bankAccountRepository.findByNumberLocked($destinationBankAccountDto->getNumber());
        $this->transferDomainService.performTransfer($originAccount, $destinationAccount, $amount);
        $this->bankAccountRepository.save($originAccount);
        $this->bankAccountRepository.save($destinationAccount);
    }
}

?>