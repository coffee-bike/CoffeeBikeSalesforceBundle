<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait TotalAmountTrait
{
    /**
     * @var float|null
     */
    protected $TotalAmount;

    /**
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->TotalAmount;
    }

    /**
     * @param float|null $TotalAmount
     */
    public function setTotalAmount(?float $TotalAmount): void
    {
        $this->TotalAmount = $TotalAmount;
    }
}
