<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CityTrait
{
    /**
     * @var string|null
     */
    protected $City;

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * @param string|null $City
     */
    public function setCity(?string $City): void
    {
        $this->City = $City;
    }
}
