<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait TotalPriceTrait
{
    /**
     * @var float|null
     */
    protected $TotalPrice;

    /**
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->TotalPrice;
    }

    /**
     * @param float|null $TotalPrice
     */
    public function setTotalPrice(?float $TotalPrice): void
    {
        $this->TotalPrice = $TotalPrice;
    }
}
