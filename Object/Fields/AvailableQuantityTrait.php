<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AvailableQuantityTrait
{
    /**
     * @var float|null
     */
    protected $AvailableQuantity;

    /**
     * @return float|null
     */
    public function getAvailableQuantity(): ?float
    {
        return $this->AvailableQuantity;
    }

    /**
     * @param float|null $AvailableQuantity
     */
    public function setAvailableQuantity(?float $AvailableQuantity): void
    {
        $this->AvailableQuantity = $AvailableQuantity;
    }
}
