<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait HasOverdueTaskTrait
{
    /**
     * @var bool
     */
    protected $HasOverdueTask;

    /**
     * @return bool
     */
    public function isHasOverdueTask(): bool
    {
        return $this->HasOverdueTask;
    }

    /**
     * @param bool $HasOverdueTask
     */
    public function setHasOverdueTask(bool $HasOverdueTask): void
    {
        $this->HasOverdueTask = $HasOverdueTask;
    }
}
