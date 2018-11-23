<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait HasOpenActivityTrait
{
    /**
     * @var bool
     */
    protected $HasOpenActivity;

    /**
     * @return bool
     */
    public function isHasOpenActivity(): bool
    {
        return $this->HasOpenActivity;
    }

    /**
     * @param bool $HasOpenActivity
     */
    public function setHasOpenActivity(bool $HasOpenActivity): void
    {
        $this->HasOpenActivity = $HasOpenActivity;
    }
}
