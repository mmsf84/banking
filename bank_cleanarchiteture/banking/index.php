<?php

use banking\application\BankingApplicationService;

//include 'infrastructure/repository/mysqli/BankAccountRepositoryMysqli.php';
include 'application/BankingApplicationService.php';
include 'application/dto/BankAccountDto.php';

$appTransfer = new BankingApplicationService();

$cuentaOrigen = new BankAccountDto();
$cuentaOrigen->setNumber("123-456-001");

$cuentaDestino = new BankAccountDto();
$cuentaDestino->setNumber("123-456-002");

$appTransfer->performTransfer($cuentaOrigen, $cuentaDestino, 520);

?>