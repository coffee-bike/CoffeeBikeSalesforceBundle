<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CurrencyIsoCodeTrait
{
    /**
     * @var string|null
     */
    protected $CurrencyIsoCode;

    /**
     * @return null|string
     */
    public function getCurrencyIsoCode(): ?string
    {
        return $this->CurrencyIsoCode;
    }

    /**
     * @param null|string $CurrencyIsoCode
     */
    public function setCurrencyIsoCode(?string $CurrencyIsoCode): void
    {
        $this->CurrencyIsoCode = $CurrencyIsoCode;
    }
}
