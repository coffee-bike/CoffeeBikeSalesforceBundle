<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CustomerAuthorizedByIdTrait
{
    /**
     * @var string|null
     */
    protected $CustomerAuthorizedById;

    /**
     * @return string|null
     */
    public function getCustomerAuthorizedById(): ?string
    {
        return $this->CustomerAuthorizedById;
    }

    /**
     * @param string|null $CustomerAuthorizedById
     */
    public function setCustomerAuthorizedById(?string $CustomerAuthorizedById): void
    {
        $this->CustomerAuthorizedById = $CustomerAuthorizedById;
    }
}
