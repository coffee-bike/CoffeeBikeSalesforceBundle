<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait PersonTrait
{
    /**
     * @var string|null
     */
    protected $PersonContactId;

    /**
     * @var bool
     */
    protected $IsPersonAccount;

    /**
     * @var string|null
     */
    protected $PersonMailingStreet;

    /**
     * @var string|null
     */
    protected $PersonMailingCity;

    /**
     * @var string|null
     */
    protected $PersonMailingState;

    /**
     * @var string|null
     */
    protected $PersonMailingPostalCode;

    /**
     * @var string|null
     */
    protected $PersonMailingCountry;

    /**
     * @var string|null
     */
    protected $PersonMailingStateCode;

    /**
     * @var string|null
     */
    protected $PersonMailingCountryCode;

    /**
     * @var string|null
     */
    protected $PersonMailingLatitude;

    /**
     * @var string|null
     */
    protected $PersonMailingLongitude;

    /**
     * @var string|null
     */
    protected $PersonMailingGeocodeAccuracy;

    /**
     * @var string|null
     */
    protected $PersonMailingAddress;

    /**
     * @var string|null
     */
    protected $PersonMobilePhone;

    /**
     * @var string|null
     */
    protected $PersonOtherPhone;

    /**
     * @var string|null
     */
    protected $PersonEmail;

    /**
     * @var string|null
     */
    protected $PersonTitle;

    /**
     * @var string|null
     */
    protected $PersonDepartment;

    /**
     * @var string|null
     */
    protected $PersonLeadSource;

    /**
     * @var bool
     */
    protected $PersonHasOptedOutOfEmail;

    /**
     * @var string|null
     */
    protected $PersonLastCURequestDate;

    /**
     * @var string|null
     */
    protected $PersonLastCUUpdateDate;

    /**
     * @var string|null
     */
    protected $PersonEmailBouncedReason;

    /**
     * @var string|null
     */
    protected $PersonEmailBouncedDate;

    /**
     * @return null|string
     */
    public function getPersonContactId(): ?string
    {
        return $this->PersonContactId;
    }

    /**
     * @param null|string $PersonContactId
     */
    public function setPersonContactId(?string $PersonContactId): void
    {
        $this->PersonContactId = $PersonContactId;
    }

    /**
     * @return bool
     */
    public function isPersonAccount(): bool
    {
        return $this->IsPersonAccount;
    }

    /**
     * @param bool $IsPersonAccount
     */
    public function setIsPersonAccount(bool $IsPersonAccount): void
    {
        $this->IsPersonAccount = $IsPersonAccount;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingStreet(): ?string
    {
        return $this->PersonMailingStreet;
    }

    /**
     * @param null|string $PersonMailingStreet
     */
    public function setPersonMailingStreet(?string $PersonMailingStreet): void
    {
        $this->PersonMailingStreet = $PersonMailingStreet;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingCity(): ?string
    {
        return $this->PersonMailingCity;
    }

    /**
     * @param null|string $PersonMailingCity
     */
    public function setPersonMailingCity(?string $PersonMailingCity): void
    {
        $this->PersonMailingCity = $PersonMailingCity;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingState(): ?string
    {
        return $this->PersonMailingState;
    }

    /**
     * @param null|string $PersonMailingState
     */
    public function setPersonMailingState(?string $PersonMailingState): void
    {
        $this->PersonMailingState = $PersonMailingState;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingPostalCode(): ?string
    {
        return $this->PersonMailingPostalCode;
    }

    /**
     * @param null|string $PersonMailingPostalCode
     */
    public function setPersonMailingPostalCode(?string $PersonMailingPostalCode): void
    {
        $this->PersonMailingPostalCode = $PersonMailingPostalCode;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingCountry(): ?string
    {
        return $this->PersonMailingCountry;
    }

    /**
     * @param null|string $PersonMailingCountry
     */
    public function setPersonMailingCountry(?string $PersonMailingCountry): void
    {
        $this->PersonMailingCountry = $PersonMailingCountry;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingStateCode(): ?string
    {
        return $this->PersonMailingStateCode;
    }

    /**
     * @param null|string $PersonMailingStateCode
     */
    public function setPersonMailingStateCode(?string $PersonMailingStateCode): void
    {
        $this->PersonMailingStateCode = $PersonMailingStateCode;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingCountryCode(): ?string
    {
        return $this->PersonMailingCountryCode;
    }

    /**
     * @param null|string $PersonMailingCountryCode
     */
    public function setPersonMailingCountryCode(?string $PersonMailingCountryCode): void
    {
        $this->PersonMailingCountryCode = $PersonMailingCountryCode;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingLatitude(): ?string
    {
        return $this->PersonMailingLatitude;
    }

    /**
     * @param null|string $PersonMailingLatitude
     */
    public function setPersonMailingLatitude(?string $PersonMailingLatitude): void
    {
        $this->PersonMailingLatitude = $PersonMailingLatitude;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingLongitude(): ?string
    {
        return $this->PersonMailingLongitude;
    }

    /**
     * @param null|string $PersonMailingLongitude
     */
    public function setPersonMailingLongitude(?string $PersonMailingLongitude): void
    {
        $this->PersonMailingLongitude = $PersonMailingLongitude;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingGeocodeAccuracy(): ?string
    {
        return $this->PersonMailingGeocodeAccuracy;
    }

    /**
     * @param null|string $PersonMailingGeocodeAccuracy
     */
    public function setPersonMailingGeocodeAccuracy(?string $PersonMailingGeocodeAccuracy): void
    {
        $this->PersonMailingGeocodeAccuracy = $PersonMailingGeocodeAccuracy;
    }

    /**
     * @return null|string
     */
    public function getPersonMailingAddress(): ?string
    {
        return $this->PersonMailingAddress;
    }

    /**
     * @param null|string $PersonMailingAddress
     */
    public function setPersonMailingAddress(?string $PersonMailingAddress): void
    {
        $this->PersonMailingAddress = $PersonMailingAddress;
    }

    /**
     * @return null|string
     */
    public function getPersonMobilePhone(): ?string
    {
        return $this->PersonMobilePhone;
    }

    /**
     * @param null|string $PersonMobilePhone
     */
    public function setPersonMobilePhone(?string $PersonMobilePhone): void
    {
        $this->PersonMobilePhone = $PersonMobilePhone;
    }

    /**
     * @return null|string
     */
    public function getPersonOtherPhone(): ?string
    {
        return $this->PersonOtherPhone;
    }

    /**
     * @param null|string $PersonOtherPhone
     */
    public function setPersonOtherPhone(?string $PersonOtherPhone): void
    {
        $this->PersonOtherPhone = $PersonOtherPhone;
    }

    /**
     * @return null|string
     */
    public function getPersonEmail(): ?string
    {
        return $this->PersonEmail;
    }

    /**
     * @param null|string $PersonEmail
     */
    public function setPersonEmail(?string $PersonEmail): void
    {
        $this->PersonEmail = $PersonEmail;
    }

    /**
     * @return null|string
     */
    public function getPersonTitle(): ?string
    {
        return $this->PersonTitle;
    }

    /**
     * @param null|string $PersonTitle
     */
    public function setPersonTitle(?string $PersonTitle): void
    {
        $this->PersonTitle = $PersonTitle;
    }

    /**
     * @return null|string
     */
    public function getPersonDepartment(): ?string
    {
        return $this->PersonDepartment;
    }

    /**
     * @param null|string $PersonDepartment
     */
    public function setPersonDepartment(?string $PersonDepartment): void
    {
        $this->PersonDepartment = $PersonDepartment;
    }

    /**
     * @return null|string
     */
    public function getPersonLeadSource(): ?string
    {
        return $this->PersonLeadSource;
    }

    /**
     * @param null|string $PersonLeadSource
     */
    public function setPersonLeadSource(?string $PersonLeadSource): void
    {
        $this->PersonLeadSource = $PersonLeadSource;
    }

    /**
     * @return bool
     */
    public function isPersonHasOptedOutOfEmail(): bool
    {
        return $this->PersonHasOptedOutOfEmail;
    }

    /**
     * @param bool $PersonHasOptedOutOfEmail
     */
    public function setPersonHasOptedOutOfEmail(bool $PersonHasOptedOutOfEmail): void
    {
        $this->PersonHasOptedOutOfEmail = $PersonHasOptedOutOfEmail;
    }

    /**
     * @return null|string
     */
    public function getPersonLastCURequestDate(): ?string
    {
        return $this->PersonLastCURequestDate;
    }

    /**
     * @param null|string $PersonLastCURequestDate
     */
    public function setPersonLastCURequestDate(?string $PersonLastCURequestDate): void
    {
        $this->PersonLastCURequestDate = $PersonLastCURequestDate;
    }

    /**
     * @return null|string
     */
    public function getPersonLastCUUpdateDate(): ?string
    {
        return $this->PersonLastCUUpdateDate;
    }

    /**
     * @param null|string $PersonLastCUUpdateDate
     */
    public function setPersonLastCUUpdateDate(?string $PersonLastCUUpdateDate): void
    {
        $this->PersonLastCUUpdateDate = $PersonLastCUUpdateDate;
    }

    /**
     * @return null|string
     */
    public function getPersonEmailBouncedReason(): ?string
    {
        return $this->PersonEmailBouncedReason;
    }

    /**
     * @param null|string $PersonEmailBouncedReason
     */
    public function setPersonEmailBouncedReason(?string $PersonEmailBouncedReason): void
    {
        $this->PersonEmailBouncedReason = $PersonEmailBouncedReason;
    }

    /**
     * @return null|string
     */
    public function getPersonEmailBouncedDate(): ?string
    {
        return $this->PersonEmailBouncedDate;
    }

    /**
     * @param null|string $PersonEmailBouncedDate
     */
    public function setPersonEmailBouncedDate(?string $PersonEmailBouncedDate): void
    {
        $this->PersonEmailBouncedDate = $PersonEmailBouncedDate;
    }
}
