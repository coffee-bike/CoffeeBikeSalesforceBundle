<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait StatusTrait
{
    /**
     * @var string|null
     */
    protected $Status;

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * @param null|string $Status
     */
    public function setStatus(?string $Status): void
    {
        $this->Status = $Status;
    }
}
