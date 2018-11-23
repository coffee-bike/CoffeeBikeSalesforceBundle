<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait LastNameTrait
{
    /**
     * @var string|null
     */
    protected $LastName;

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    /**
     * @param null|string $LastName
     */
    public function setLastName(?string $LastName): void
    {
        $this->LastName = $LastName;
    }
}
