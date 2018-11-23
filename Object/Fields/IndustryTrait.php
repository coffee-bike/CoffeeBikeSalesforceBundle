<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IndustryTrait
{
    /**
     * @var string|null
     */
    protected $Industry;

    /**
     * @return null|string
     */
    public function getIndustry(): ?string
    {
        return $this->Industry;
    }

    /**
     * @param null|string $Industry
     */
    public function setIndustry(?string $Industry): void
    {
        $this->Industry = $Industry;
    }
}
