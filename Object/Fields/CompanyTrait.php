<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CompanyTrait
{
    /**
     * @var string|null
     */
    protected $Company;

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->Company;
    }

    /**
     * @param string|null $Company
     */
    public function setCompany(?string $Company): void
    {
        $this->Company = $Company;
    }
}
