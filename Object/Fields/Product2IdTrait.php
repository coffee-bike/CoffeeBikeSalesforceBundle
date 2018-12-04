<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait Product2IdTrait
{
    /**
     * @var string|null
     */
    protected $Product2Id;

    /**
     * @return string|null
     */
    public function getProduct2Id(): ?string
    {
        return $this->Product2Id;
    }

    /**
     * @param string|null $Product2Id
     */
    public function setProduct2Id(?string $Product2Id): void
    {
        $this->Product2Id = $Product2Id;
    }
}
