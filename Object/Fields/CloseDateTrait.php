<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CloseDateTrait
{
    /**
     * @var string|null
     */
    protected $CloseDate;

    /**
     * @return null|string
     */
    public function getCloseDate(): ?string
    {
        return $this->CloseDate;
    }

    /**
     * @param null|string $CloseDate
     */
    public function setCloseDate(?string $CloseDate): void
    {
        $this->CloseDate = $CloseDate;
    }
}
