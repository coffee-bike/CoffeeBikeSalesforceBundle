<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait WhoIdTrait
{
    /**
     * @var string|null
     */
    protected $WhoId;

    /**
     * @return null|string
     */
    public function getWhoId(): ?string
    {
        return $this->WhoId;
    }

    /**
     * @param null|string $WhoId
     */
    public function setWhoId(?string $WhoId): void
    {
        $this->WhoId = $WhoId;
    }
}
