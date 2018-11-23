<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsWonTrait
{
    /**
     * @var bool
     */
    protected $IsWon;

    /**
     * @return bool
     */
    public function isWon(): bool
    {
        return $this->IsWon;
    }

    /**
     * @param bool $IsWon
     */
    public function setIsWon(bool $IsWon): void
    {
        $this->IsWon = $IsWon;
    }
}
