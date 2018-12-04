<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OriginalOrderItemIdTrait
{
    /**
     * @var string|null
     */
    protected $OriginalOrderItemId;

    /**
     * @return string|null
     */
    public function getOriginalOrderItemId(): ?string
    {
        return $this->OriginalOrderItemId;
    }

    /**
     * @param string|null $OriginalOrderItemId
     */
    public function setOriginalOrderItemId(?string $OriginalOrderItemId): void
    {
        $this->OriginalOrderItemId = $OriginalOrderItemId;
    }
}
