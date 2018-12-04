<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait StateTrait
{
    /**
     * @var string|null
     */
    protected $State;

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }

    /**
     * @param string|null $State
     */
    public function setState(?string $State): void
    {
        $this->State = $State;
    }
}
