<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsUnreadByOwnerTrait
{
    /**
     * @var bool
     */
    protected $IsUnreadByOwner;

    /**
     * @return bool
     */
    public function isUnreadByOwner(): bool
    {
        return $this->IsUnreadByOwner;
    }

    /**
     * @param bool $IsUnreadByOwner
     */
    public function setIsUnreadByOwner(bool $IsUnreadByOwner): void
    {
        $this->IsUnreadByOwner = $IsUnreadByOwner;
    }
}
