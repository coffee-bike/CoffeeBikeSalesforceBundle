<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait QuantityUnitOfMeasureTrait
{
    /**
     * @var string|null
     */
    protected $QuantityUnitOfMeasure;

    /**
     * @return string|null
     */
    public function getQuantityUnitOfMeasure(): ?string
    {
        return $this->QuantityUnitOfMeasure;
    }

    /**
     * @param string|null $QuantityUnitOfMeasure
     */
    public function setQuantityUnitOfMeasure(?string $QuantityUnitOfMeasure): void
    {
        $this->QuantityUnitOfMeasure = $QuantityUnitOfMeasure;
    }
}
