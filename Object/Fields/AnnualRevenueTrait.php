<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AnnualRevenueTrait
{
    /**
     * @var string|null
     */
    protected $AnnualRevenue;

    /**
     * @return string|null
     */
    public function getAnnualRevenue(): ?string
    {
        return $this->AnnualRevenue;
    }

    /**
     * @param string|null $AnnualRevenue
     */
    public function setAnnualRevenue(?string $AnnualRevenue): void
    {
        $this->AnnualRevenue = $AnnualRevenue;
    }
}
