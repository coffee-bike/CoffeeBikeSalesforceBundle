<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OpportunityIdTrait
{
    /**
     * @var string|null
     */
    protected $OpportunityId;

    /**
     * @return string|null
     */
    public function getOpportunityId(): ?string
    {
        return $this->OpportunityId;
    }

    /**
     * @param string|null $OpportunityId
     */
    public function setOpportunityId(?string $OpportunityId): void
    {
        $this->OpportunityId = $OpportunityId;
    }
}
