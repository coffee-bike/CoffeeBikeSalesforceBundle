<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait SyncedQuoteIdTrait
{
    /**
     * @var string|null
     */
    protected $SyncedQuoteId;

    /**
     * @return null|string
     */
    public function getSyncedQuoteId(): ?string
    {
        return $this->SyncedQuoteId;
    }

    /**
     * @param null|string $SyncedQuoteId
     */
    public function setSyncedQuoteId(?string $SyncedQuoteId): void
    {
        $this->SyncedQuoteId = $SyncedQuoteId;
    }
}
