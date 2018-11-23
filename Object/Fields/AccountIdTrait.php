<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AccountIdTrait
{
    /**
     * @var string|null
     */
    protected $AccountId;

    /**
     * @return null|string
     */
    public function getAccountId(): ?string
    {
        return $this->AccountId;
    }

    /**
     * @param null|string $AccountId
     */
    public function setAccountId(?string $AccountId): void
    {
        $this->AccountId = $AccountId;
    }
}
