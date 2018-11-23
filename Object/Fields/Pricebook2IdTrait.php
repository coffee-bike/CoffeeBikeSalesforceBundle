<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait Pricebook2IdTrait
{
    /**
     * @var string|null
     */
    protected $Pricebook2Id;

    /**
     * @return null|string
     */
    public function getPricebook2Id(): ?string
    {
        return $this->Pricebook2Id;
    }

    /**
     * @param null|string $Pricebook2Id
     */
    public function setPricebook2Id(?string $Pricebook2Id): void
    {
        $this->Pricebook2Id = $Pricebook2Id;
    }
}
