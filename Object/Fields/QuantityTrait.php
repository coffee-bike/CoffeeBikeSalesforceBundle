<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait QuantityTrait
{
    /**
     * @var float
     */
    protected $Quantity;

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     */
    public function setQuantity(float $Quantity): void
    {
        $this->Quantity = $Quantity;
    }
}
