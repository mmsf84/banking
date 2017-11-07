<?php
namespace banking\application\dto;

class CustomerDto
{
    private $firstName;
    private $lastName;
    private $bankAccountsDto;
    
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getBankAccountsDto()
    {
        return $this->bankAccountsDto;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setBankAccountsDto($bankAccountsDto)
    {
        $this->bankAccountsDto = $bankAccountsDto;
    }

}

?>