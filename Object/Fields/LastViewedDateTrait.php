<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait LastViewedDateTrait
{
    /**
     * @var string|null
     */
    protected $LastViewedDate;

    /**
     * @return null|string
     */
    public function getLastViewedDate(): ?string
    {
        return $this->LastViewedDate;
    }

    /**
     * @param null|string $LastViewedDate
     */
    public function setLastViewedDate(?string $LastViewedDate): void
    {
        $this->LastViewedDate = $LastViewedDate;
    }
}
