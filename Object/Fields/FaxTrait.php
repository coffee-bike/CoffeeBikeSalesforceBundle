<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait FaxTrait
{
    /**
     * @var string|null
     */
    protected $Fax;

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->Fax;
    }

    /**
     * @param string|null $Fax
     */
    public function setFax(?string $Fax): void
    {
        $this->Fax = $Fax;
    }
}
