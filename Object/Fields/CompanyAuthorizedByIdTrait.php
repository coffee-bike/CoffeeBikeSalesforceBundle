<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CompanyAuthorizedByIdTrait
{
    /**
     * @var string|null
     */
    protected $CompanyAuthorizedById;

    /**
     * @return string|null
     */
    public function getCompanyAuthorizedById(): ?string
    {
        return $this->CompanyAuthorizedById;
    }

    /**
     * @param string|null $CompanyAuthorizedById
     */
    public function setCompanyAuthorizedById(?string $CompanyAuthorizedById): void
    {
        $this->CompanyAuthorizedById = $CompanyAuthorizedById;
    }
}
