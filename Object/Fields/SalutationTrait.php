<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait SalutationTrait
{
    /**
     * @var string|null
     */
    protected $Salutation;

    /**
     * @return null|string
     */
    public function getSalutation(): ?string
    {
        return $this->Salutation;
    }

    /**
     * @param null|string $Salutation
     */
    public function setSalutation(?string $Salutation): void
    {
        $this->Salutation = $Salutation;
    }
}
