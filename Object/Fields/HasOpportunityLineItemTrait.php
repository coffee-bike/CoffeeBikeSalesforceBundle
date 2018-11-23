<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait HasOpportunityLineItemTrait
{
    /**
     * @var bool
     */
    protected $HasOpportunityLineItem;

    /**
     * @return bool
     */
    public function isHasOpportunityLineItem(): bool
    {
        return $this->HasOpportunityLineItem;
    }

    /**
     * @param bool $HasOpportunityLineItem
     */
    public function setHasOpportunityLineItem(bool $HasOpportunityLineItem): void
    {
        $this->HasOpportunityLineItem = $HasOpportunityLineItem;
    }
}
