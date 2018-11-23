<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsReductionOrderTrait
{
    /**
     * @var bool
     */
    protected $IsReductionOrder;

    /**
     * @return bool
     */
    public function isReductionOrder(): bool
    {
        return $this->IsReductionOrder;
    }

    /**
     * @param bool $IsReductionOrder
     */
    public function setIsReductionOrder(bool $IsReductionOrder): void
    {
        $this->IsReductionOrder = $IsReductionOrder;
    }
}
