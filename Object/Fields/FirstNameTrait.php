<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait FirstNameTrait
{
    /**
     * @var string|null
     */
    protected $FirstName;

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    /**
     * @param null|string $FirstName
     */
    public function setFirstName(?string $FirstName): void
    {
        $this->FirstName = $FirstName;
    }
}
