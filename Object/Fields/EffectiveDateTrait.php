<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait EffectiveDateTrait
{
    /**
     * @var string|null
     */
    protected $EffectiveDate;

    /**
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->EffectiveDate;
    }

    /**
     * @param string|null $EffectiveDate
     */
    public function setEffectiveDate(?string $EffectiveDate): void
    {
        $this->EffectiveDate = $EffectiveDate;
    }
}
