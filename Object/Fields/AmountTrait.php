<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AmountTrait
{
    /**
     * @var string|null
     */
    protected $Amount;

    /**
     * @return null|string
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }

    /**
     * @param null|string $Amount
     */
    public function setAmount(?string $Amount): void
    {
        $this->Amount = $Amount;
    }
}
