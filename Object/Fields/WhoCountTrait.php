<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait WhoCountTrait
{
    /**
     * @var int|null
     */
    protected $WhoCount;

    /**
     * @return int|null
     */
    public function getWhoCount(): ?int
    {
        return $this->WhoCount;
    }

    /**
     * @param int|null $WhoCount
     */
    public function setWhoCount(?int $WhoCount): void
    {
        $this->WhoCount = $WhoCount;
    }
}
