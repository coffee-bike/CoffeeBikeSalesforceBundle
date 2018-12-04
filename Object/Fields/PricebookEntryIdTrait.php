<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait PricebookEntryIdTrait
{
    /**
     * @var string
     */
    protected $PricebookEntryId;

    /**
     * @return string
     */
    public function getPricebookEntryId(): string
    {
        return $this->PricebookEntryId;
    }

    /**
     * @param string $PricebookEntryId
     */
    public function setPricebookEntryId(string $PricebookEntryId): void
    {
        $this->PricebookEntryId = $PricebookEntryId;
    }
}
