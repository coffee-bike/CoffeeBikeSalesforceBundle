<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait PriorityTrait
{
    /**
     * @var string|null
     */
    protected $Priority;

    /**
     * @var bool
     */
    protected $IsHighPriority;

    /**
     * @return null|string
     */
    public function getPriority(): ?string
    {
        return $this->Priority;
    }

    /**
     * @param null|string $Priority
     */
    public function setPriority(?string $Priority): void
    {
        $this->Priority = $Priority;
    }

    /**
     * @return bool
     */
    public function isHighPriority(): bool
    {
        return $this->IsHighPriority;
    }

    /**
     * @param bool $IsHighPriority
     */
    public function setIsHighPriority(bool $IsHighPriority): void
    {
        $this->IsHighPriority = $IsHighPriority;
    }
}
