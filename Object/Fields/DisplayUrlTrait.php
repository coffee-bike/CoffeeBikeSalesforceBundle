<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait DisplayUrlTrait
{
    /**
     * @var string|null
     */
    protected $DisplayUrl;

    /**
     * @return string|null
     */
    public function getDisplayUrl(): ?string
    {
        return $this->DisplayUrl;
    }

    /**
     * @param string|null $DisplayUrl
     */
    public function setDisplayUrl(?string $DisplayUrl): void
    {
        $this->DisplayUrl = $DisplayUrl;
    }
}
