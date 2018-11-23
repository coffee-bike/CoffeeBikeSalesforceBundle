<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ShippingTrait
{
    /**
     * @var string|null
     */
    protected $ShippingStreet;

    /**
     * @var string|null
     */
    protected $ShippingCity;

    /**
     * @var string|null
     */
    protected $ShippingPostalCode;

    /**
     * @var string|null
     */
    protected $ShippingState;

    /**
     * @var string|null
     */
    protected $ShippingCountry;

    /**
     * @var string|null
     */
    protected $ShippingStateCode;

    /**
     * @var string|null
     */
    protected $ShippingCountryCode;

    /**
     * @var float|null
     */
    protected $ShippingLatitude;

    /**
     * @var float|null
     */
    protected $ShippingLongitude;

    /**
     * @var string|null
     */
    protected $ShippingGeocodeAccuracy;

    /**
     * @return null|string
     */
    public function getShippingStreet(): ?string
    {
        return $this->ShippingStreet;
    }

    /**
     * @param null|string $ShippingStreet
     */
    public function setShippingStreet(?string $ShippingStreet): void
    {
        $this->ShippingStreet = $ShippingStreet;
    }

    /**
     * @return null|string
     */
    public function getShippingCity(): ?string
    {
        return $this->ShippingCity;
    }

    /**
     * @param null|string $ShippingCity
     */
    public function setShippingCity(?string $ShippingCity): void
    {
        $this->ShippingCity = $ShippingCity;
    }

    /**
     * @return null|string
     */
    public function getShippingPostalCode(): ?string
    {
        return $this->ShippingPostalCode;
    }

    /**
     * @param null|string $ShippingPostalCode
     */
    public function setShippingPostalCode(?string $ShippingPostalCode): void
    {
        $this->ShippingPostalCode = $ShippingPostalCode;
    }

    /**
     * @return null|string
     */
    public function getShippingState(): ?string
    {
        return $this->ShippingState;
    }

    /**
     * @param null|string $ShippingState
     */
    public function setShippingState(?string $ShippingState): void
    {
        $this->ShippingState = $ShippingState;
    }

    /**
     * @return null|string
     */
    public function getShippingCountry(): ?string
    {
        return $this->ShippingCountry;
    }

    /**
     * @param null|string $ShippingCountry
     */
    public function setShippingCountry(?string $ShippingCountry): void
    {
        $this->ShippingCountry = $ShippingCountry;
    }

    /**
     * @return null|string
     */
    public function getShippingStateCode(): ?string
    {
        return $this->ShippingStateCode;
    }

    /**
     * @param null|string $ShippingStateCode
     */
    public function setShippingStateCode(?string $ShippingStateCode): void
    {
        $this->ShippingStateCode = $ShippingStateCode;
    }

    /**
     * @return null|string
     */
    public function getShippingCountryCode(): ?string
    {
        return $this->ShippingCountryCode;
    }

    /**
     * @param null|string $ShippingCountryCode
     */
    public function setShippingCountryCode(?string $ShippingCountryCode): void
    {
        $this->ShippingCountryCode = $ShippingCountryCode;
    }

    /**
     * @return float|null
     */
    public function getShippingLatitude(): ?float
    {
        return $this->ShippingLatitude;
    }

    /**
     * @param float|null $ShippingLatitude
     */
    public function setShippingLatitude(?float $ShippingLatitude): void
    {
        $this->ShippingLatitude = $ShippingLatitude;
    }

    /**
     * @return float|null
     */
    public function getShippingLongitude(): ?float
    {
        return $this->ShippingLongitude;
    }

    /**
     * @param float|null $ShippingLongitude
     */
    public function setShippingLongitude(?float $ShippingLongitude): void
    {
        $this->ShippingLongitude = $ShippingLongitude;
    }

    /**
     * @return null|string
     */
    public function getShippingGeocodeAccuracy(): ?string
    {
        return $this->ShippingGeocodeAccuracy;
    }

    /**
     * @param null|string $ShippingGeocodeAccuracy
     */
    public function setShippingGeocodeAccuracy(?string $ShippingGeocodeAccuracy): void
    {
        $this->ShippingGeocodeAccuracy = $ShippingGeocodeAccuracy;
    }
}
