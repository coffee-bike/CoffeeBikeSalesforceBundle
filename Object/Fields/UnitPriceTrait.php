<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait UnitPriceTrait
{
    /**
     * @var float|null
     */
    protected $UnitPrice;

    /**
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->UnitPrice;
    }

    /**
     * @param float|null $UnitPrice
     */
    public function setUnitPrice(?float $UnitPrice): void
    {
        $this->UnitPrice = $UnitPrice;
    }
}
