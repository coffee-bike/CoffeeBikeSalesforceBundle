<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait SicDescTrait
{
    /**
     * @var string|null
     */
    protected $SicDesc;

    /**
     * @return null|string
     */
    public function getSicDesc(): ?string
    {
        return $this->SicDesc;
    }

    /**
     * @param null|string $SicDesc
     */
    public function setSicDesc(?string $SicDesc): void
    {
        $this->SicDesc = $SicDesc;
    }
}
