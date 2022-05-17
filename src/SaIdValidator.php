<?php


namespace Vlerrie\SouthAfricanIdValidation;

class SaIdValidator
{
    private $luhnValidator;

    public function __construct()
    {
        $this->luhnValidator = new LuhnSaIDValidation();
    }

    public function validateSaId($idNumber)
    {
        $this->luhnValidator->setIDNumber($idNumber);
        $this->luhnValidator->validateId();
        return $this->luhnValidator->valid();
    }

    public function extractIdInfo($idNumber)
    {

        $this->luhnValidator->setIDNumber($idNumber);
        $this->luhnValidator->validateId();
        return $this->luhnValidator->all();
    }
}
