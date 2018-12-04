<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ServiceDateTrait
{
    /**
     * @var string|null
     */
    protected $ServiceDate;

    /**
     * @return string|null
     */
    public function getServiceDate(): ?string
    {
        return $this->ServiceDate;
    }

    /**
     * @param string|null $ServiceDate
     */
    public function setServiceDate(?string $ServiceDate): void
    {
        $this->ServiceDate = $ServiceDate;
    }
}
