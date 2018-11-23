<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait BillingTrait
{
    /**
     * @var string|null
     */
    protected $BillingStreet;

    /**
     * @var string|null
     */
    protected $BillingCity;

    /**
     * @var string|null
     */
    protected $BillingPostalCode;

    /**
     * @var string|null
     */
    protected $BillingState;

    /**
     * @var string|null
     */
    protected $BillingCountry;

    /**
     * @var string|null
     */
    protected $BillingStateCode;

    /**
     * @var string|null
     */
    protected $BillingCountryCode;

    /**
     * @var float|null
     */
    protected $BillingLatitude;

    /**
     * @var float|null
     */
    protected $BillingLongitude;

    /**
     * @var string|null
     */
    protected $BillingGeocodeAccuracy;

    /**
     * @return null|string
     */
    public function getBillingStreet(): ?string
    {
        return $this->BillingStreet;
    }

    /**
     * @param null|string $BillingStreet
     */
    public function setBillingStreet(?string $BillingStreet): void
    {
        $this->BillingStreet = $BillingStreet;
    }

    /**
     * @return null|string
     */
    public function getBillingCity(): ?string
    {
        return $this->BillingCity;
    }

    /**
     * @param null|string $BillingCity
     */
    public function setBillingCity(?string $BillingCity): void
    {
        $this->BillingCity = $BillingCity;
    }

    /**
     * @return null|string
     */
    public function getBillingPostalCode(): ?string
    {
        return $this->BillingPostalCode;
    }

    /**
     * @param null|string $BillingPostalCode
     */
    public function setBillingPostalCode(?string $BillingPostalCode): void
    {
        $this->BillingPostalCode = $BillingPostalCode;
    }

    /**
     * @return null|string
     */
    public function getBillingState(): ?string
    {
        return $this->BillingState;
    }

    /**
     * @param null|string $BillingState
     */
    public function setBillingState(?string $BillingState): void
    {
        $this->BillingState = $BillingState;
    }

    /**
     * @return null|string
     */
    public function getBillingCountry(): ?string
    {
        return $this->BillingCountry;
    }

    /**
     * @param null|string $BillingCountry
     */
    public function setBillingCountry(?string $BillingCountry): void
    {
        $this->BillingCountry = $BillingCountry;
    }

    /**
     * @return null|string
     */
    public function getBillingStateCode(): ?string
    {
        return $this->BillingStateCode;
    }

    /**
     * @param null|string $BillingStateCode
     */
    public function setBillingStateCode(?string $BillingStateCode): void
    {
        $this->BillingStateCode = $BillingStateCode;
    }

    /**
     * @return null|string
     */
    public function getBillingCountryCode(): ?string
    {
        return $this->BillingCountryCode;
    }

    /**
     * @param null|string $BillingCountryCode
     */
    public function setBillingCountryCode(?string $BillingCountryCode): void
    {
        $this->BillingCountryCode = $BillingCountryCode;
    }

    /**
     * @return float|null
     */
    public function getBillingLatitude(): ?float
    {
        return $this->BillingLatitude;
    }

    /**
     * @param float|null $BillingLatitude
     */
    public function setBillingLatitude(?float $BillingLatitude): void
    {
        $this->BillingLatitude = $BillingLatitude;
    }

    /**
     * @return float|null
     */
    public function getBillingLongitude(): ?float
    {
        return $this->BillingLongitude;
    }

    /**
     * @param float|null $BillingLongitude
     */
    public function setBillingLongitude(?float $BillingLongitude): void
    {
        $this->BillingLongitude = $BillingLongitude;
    }

    /**
     * @return null|string
     */
    public function getBillingGeocodeAccuracy(): ?string
    {
        return $this->BillingGeocodeAccuracy;
    }

    /**
     * @param null|string $BillingGeocodeAccuracy
     */
    public function setBillingGeocodeAccuracy(?string $BillingGeocodeAccuracy): void
    {
        $this->BillingGeocodeAccuracy = $BillingGeocodeAccuracy;
    }
}
