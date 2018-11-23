<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AccountSourceTrait
{
    /**
     * @var string|null
     */
    protected $AccountSource;

    /**
     * @return null|string
     */
    public function getAccountSource(): ?string
    {
        return $this->AccountSource;
    }

    /**
     * @param null|string $AccountSource
     */
    public function setAccountSource(?string $AccountSource): void
    {
        $this->AccountSource = $AccountSource;
    }
}
