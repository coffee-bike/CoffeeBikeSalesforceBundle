<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OrderNumberTrait
{
    /**
     * @var string|null
     */
    protected $OrderNumber;

    /**
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->OrderNumber;
    }

    /**
     * @param string|null $OrderNumber
     */
    public function setOrderNumber(?string $OrderNumber): void
    {
        $this->OrderNumber = $OrderNumber;
    }
}
