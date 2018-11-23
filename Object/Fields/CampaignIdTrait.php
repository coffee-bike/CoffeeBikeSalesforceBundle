<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CampaignIdTrait
{
    /**
     * @var string|null
     */
    protected $CampaignId;

    /**
     * @return null|string
     */
    public function getCampaignId(): ?string
    {
        return $this->CampaignId;
    }

    /**
     * @param null|string $CampaignId
     */
    public function setCampaignId(?string $CampaignId): void
    {
        $this->CampaignId = $CampaignId;
    }
}
