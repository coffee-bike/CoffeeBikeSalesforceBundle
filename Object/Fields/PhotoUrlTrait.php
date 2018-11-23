<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait PhotoUrlTrait
{
    /**
     * @var string|null
     */
    protected $PhotoUrl;

    /**
     * @return null|string
     */
    public function getPhotoUrl(): ?string
    {
        return $this->PhotoUrl;
    }

    /**
     * @param null|string $PhotoUrl
     */
    public function setPhotoUrl(?string $PhotoUrl): void
    {
        $this->PhotoUrl = $PhotoUrl;
    }
}
