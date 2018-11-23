<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ContractIdTrait
{
    /**
     * @var string|null
     */
    protected $ContractId;

    /**
     * @return string|null
     */
    public function getContractId(): ?string
    {
        return $this->ContractId;
    }

    /**
     * @param string|null $ContractId
     */
    public function setContractId(?string $ContractId): void
    {
        $this->ContractId = $ContractId;
    }
}
