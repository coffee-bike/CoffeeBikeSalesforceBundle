<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OwnerIdTrait
{
    /**
     * @var string|null
     */
    protected $OwnerId;

    /**
     * @return null|string
     */
    public function getOwnerId(): ?string
    {
        return $this->OwnerId;
    }

    /**
     * @param null|string $OwnerId
     */
    public function setOwnerId(?string $OwnerId): void
    {
        $this->OwnerId = $OwnerId;
    }
}
