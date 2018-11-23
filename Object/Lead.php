<?php

namespace CoffeeBike\SalesforceBundle\Object;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Lead extends AbstractObject
{
    /**
     * @var string|null
     */
    protected $MasterRecordId;

    /**
     * @var string|null
     */
    protected $RecordTypeId;

    /**
     * @var string|null
     */
    protected $Salutation;

    /**
     * @var string|null
     */
    protected $Name;

    /**
     * @var string|null
     */
    protected $FirstName;

    /**
     * @var string|null
     */
    protected $LastName;

    /**
     * @var string|null
     */
    protected $Title;

    /**
     * @var string|null
     */
    protected $Company;

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
     * @var string|null
     */
    protected $Phone;

    /**
     * @var string|null
     */
    protected $MobilePhone;

    /**
     * @var string|null
     */
    protected $Fax;

    /**
     * @var string|null
     */
    protected $Email;

    /**
     * @var string|null
     */
    protected $Website;

    /**
     * @var string|null
     */
    protected $PhotoUrl;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Lead';
    }

    /**
     * {@inheritDoc}
     */
    public function getWriteProtectedFields(): array
    {
        // todo check write protected fields
        return array_merge(
            parent::getWriteProtectedFields(),
            []
        );
    }
}
