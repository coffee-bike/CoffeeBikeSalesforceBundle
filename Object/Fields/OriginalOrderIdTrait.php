<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait OriginalOrderIdTrait
{
    /**
     * @var string|null
     */
    protected $OriginalOrderId;

    /**
     * @return string|null
     */
    public function getOriginalOrderId(): ?string
    {
        return $this->OriginalOrderId;
    }

    /**
     * @param string|null $OriginalOrderId
     */
    public function setOriginalOrderId(?string $OriginalOrderId): void
    {
        $this->OriginalOrderId = $OriginalOrderId;
    }
}
