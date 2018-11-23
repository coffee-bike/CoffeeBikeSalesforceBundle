<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait NumberOfEmployeesTrait
{
    /**
     * @var int|null
     */
    protected $NumberOfEmployees;

    /**
     * @return int|null
     */
    public function getNumberOfEmployees(): ?int
    {
        return $this->NumberOfEmployees;
    }

    /**
     * @param int|null $NumberOfEmployees
     */
    public function setNumberOfEmployees(?int $NumberOfEmployees): void
    {
        $this->NumberOfEmployees = $NumberOfEmployees;
    }
}
