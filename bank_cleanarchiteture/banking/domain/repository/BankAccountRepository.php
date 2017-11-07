<?php
namespace banking\domain\repository;

interface BankAccountRepository extends GenericRepository
{
    public function findByNumber($accountNumber);
    public function findByNumberLocked($accountNumber);
}

