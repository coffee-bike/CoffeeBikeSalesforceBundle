<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OrderIdTrait
{
    /**
     * @var string
     */
    protected $OrderId;

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->OrderId;
    }

    /**
     * @param string $OrderId
     */
    public function setOrderId(string $OrderId): void
    {
        $this->OrderId = $OrderId;
    }
}
