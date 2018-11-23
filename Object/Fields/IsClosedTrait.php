<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsClosedTrait
{
    /**
     * @var bool
     */
    protected $IsClosed;

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->IsClosed;
    }

    /**
     * @param bool $IsClosed
     */
    public function setIsClosed(bool $IsClosed): void
    {
        $this->IsClosed = $IsClosed;
    }
}
