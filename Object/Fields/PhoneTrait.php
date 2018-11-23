<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait PhoneTrait
{
    /**
     * @var string|null
     */
    protected $Phone;

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    /**
     * @param null|string $Phone
     */
    public function setPhone(?string $Phone): void
    {
        $this->Phone = $Phone;
    }
}
