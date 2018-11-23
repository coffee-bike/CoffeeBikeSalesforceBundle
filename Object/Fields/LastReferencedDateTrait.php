<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait LastReferencedDateTrait
{
    /**
     * @var string|null
     */
    protected $LastReferencedDate;

    /**
     * @return null|string
     */
    public function getLastReferencedDate(): ?string
    {
        return $this->LastReferencedDate;
    }

    /**
     * @param null|string $LastReferencedDate
     */
    public function setLastReferencedDate(?string $LastReferencedDate): void
    {
        $this->LastReferencedDate = $LastReferencedDate;
    }
}
