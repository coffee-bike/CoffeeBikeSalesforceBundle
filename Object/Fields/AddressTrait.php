<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AddressTrait
{
    /**
     * @var string|null
     */
    protected $Street;

    /**
     * @var string|null
     */
    protected $PostalCode;

    /**
     * @var string|null
     */
    protected $Country;

    /**
     * @var string|null
     */
    protected $StateCode;

    /**
     * @var string|null
     */
    protected $CountryCode;

    /**
     * @var float|null
     */
    protected $Latitude;

    /**
     * @var float|null
     */
    protected $Longitude;

    /**
     * @var string|null
     */
    protected $GeocodeAccuracy;

    /**
     * @var string|null
     */
    protected $Addresss;

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }

    /**
     * @param string|null $Street
     */
    public function setStreet(?string $Street): void
    {
        $this->Street = $Street;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    /**
     * @param string|null $PostalCode
     */
    public function setPostalCode(?string $PostalCode): void
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }

    /**
     * @param string|null $Country
     */
    public function setCountry(?string $Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->StateCode;
    }

    /**
     * @param string|null $StateCode
     */
    public function setStateCode(?string $StateCode): void
    {
        $this->StateCode = $StateCode;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }

    /**
     * @param string|null $CountryCode
     */
    public function setCountryCode(?string $CountryCode): void
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->Latitude;
    }

    /**
     * @param float|null $Latitude
     */
    public function setLatitude(?float $Latitude): void
    {
        $this->Latitude = $Latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->Longitude;
    }

    /**
     * @param float|null $Longitude
     */
    public function setLongitude(?float $Longitude): void
    {
        $this->Longitude = $Longitude;
    }

    /**
     * @return string|null
     */
    public function getGeocodeAccuracy(): ?string
    {
        return $this->GeocodeAccuracy;
    }

    /**
     * @param string|null $GeocodeAccuracy
     */
    public function setGeocodeAccuracy(?string $GeocodeAccuracy): void
    {
        $this->GeocodeAccuracy = $GeocodeAccuracy;
    }

    /**
     * @return string|null
     */
    public function getAddresss(): ?string
    {
        return $this->Addresss;
    }

    /**
     * @param string|null $Addresss
     */
    public function setAddresss(?string $Addresss): void
    {
        $this->Addresss = $Addresss;
    }
}
