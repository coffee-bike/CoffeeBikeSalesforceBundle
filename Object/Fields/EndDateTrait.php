<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait EndDateTrait
{
    /**
     * @var string|null
     */
    protected $EndDate;

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * @param string|null $EndDate
     */
    public function setEndDate(?string $EndDate): void
    {
        $this->EndDate = $EndDate;
    }
}
