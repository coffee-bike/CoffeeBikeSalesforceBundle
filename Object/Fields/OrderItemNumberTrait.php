<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OrderItemNumberTrait
{
    /**
     * @var string|null
     */
    protected $OrderItemNumber;

    /**
     * @return string|null
     */
    public function getOrderItemNumber(): ?string
    {
        return $this->OrderItemNumber;
    }

    /**
     * @param string|null $OrderItemNumber
     */
    public function setOrderItemNumber(?string $OrderItemNumber): void
    {
        $this->OrderItemNumber = $OrderItemNumber;
    }
}
