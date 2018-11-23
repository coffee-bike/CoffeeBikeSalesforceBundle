<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ParentIdTrait
{
    /**
     * @var string|null
     */
    protected $ParentId;

    /**
     * @return null|string
     */
    public function getParentId(): ?string
    {
        return $this->ParentId;
    }

    /**
     * @param null|string $ParentId
     */
    public function setParentId(?string $ParentId): void
    {
        $this->ParentId = $ParentId;
    }
}
