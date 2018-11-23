<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsArchivedTrait
{
    /**
     * @var bool
     */
    protected $IsArchived;

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->IsArchived;
    }

    /**
     * @param bool $IsArchived
     */
    public function setIsArchived(bool $IsArchived): void
    {
        $this->IsArchived = $IsArchived;
    }
}
