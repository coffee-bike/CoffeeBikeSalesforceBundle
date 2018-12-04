<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait UseStandardPriceTrait
{
    /**
     * @var bool
     */
    protected $UseStandardPrice;

    /**
     * @return bool
     */
    public function isUseStandardPrice(): bool
    {
        return $this->UseStandardPrice;
    }

    /**
     * @param bool $UseStandardPrice
     */
    public function setUseStandardPrice(bool $UseStandardPrice): void
    {
        $this->UseStandardPrice = $UseStandardPrice;
    }
}
