<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait FamilyTrait
{
    /**
     * @var string|null
     */
    protected $Family;

    /**
     * @return string|null
     */
    public function getFamily(): ?string
    {
        return $this->Family;
    }

    /**
     * @param string|null $Family
     */
    public function setFamily(?string $Family): void
    {
        $this->Family = $Family;
    }
}
