<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ProductCodeTrait
{
    /**
     * @var string|null
     */
    protected $ProductCode;

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->ProductCode;
    }

    /**
     * @param string|null $ProductCode
     */
    public function setProductCode(?string $ProductCode): void
    {
        $this->ProductCode = $ProductCode;
    }
}
