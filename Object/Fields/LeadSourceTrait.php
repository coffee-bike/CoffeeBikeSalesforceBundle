<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait LeadSourceTrait
{
    /**
     * @var string|null
     */
    protected $LeadSource;

    /**
     * @return null|string
     */
    public function getLeadSource(): ?string
    {
        return $this->LeadSource;
    }

    /**
     * @param null|string $LeadSource
     */
    public function setLeadSource(?string $LeadSource): void
    {
        $this->LeadSource = $LeadSource;
    }
}
