<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait WebsiteTrait
{
    /**
     * @var string|null
     */
    protected $Website;

    /**
     * @return null|string
     */
    public function getWebsite(): ?string
    {
        return $this->Website;
    }

    /**
     * @param null|string $Website
     */
    public function setWebsite(?string $Website): void
    {
        $this->Website = $Website;
    }
}
