<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ListPriceTrait
{
    /**
     * @var float|null
     */
    protected $ListPrice;

    /**
     * @return float|null
     */
    public function getListPrice(): ?float
    {
        return $this->ListPrice;
    }

    /**
     * @param float|null $ListPrice
     */
    public function setListPrice(?float $ListPrice): void
    {
        $this->ListPrice = $ListPrice;
    }
}
