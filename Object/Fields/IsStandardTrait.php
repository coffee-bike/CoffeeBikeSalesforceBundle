<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait IsStandardTrait
{
    /**
     * @var bool
     */
    protected $IsStandard;

    /**
     * @return bool
     */
    public function isStandard(): bool
    {
        return $this->IsStandard;
    }

    /**
     * @param bool $IsStandard
     */
    public function setIsStandard(bool $IsStandard): void
    {
        $this->IsStandard = $IsStandard;
    }
}
