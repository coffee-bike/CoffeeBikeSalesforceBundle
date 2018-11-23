<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AccountSourceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\BillingTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FirstNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IndustryTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\JigsawTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastActivityDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\MasterRecordIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NumberOfEmployeesTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OwnerIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ParentIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PersonTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhoneTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhotoUrlTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecordTypeIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SalutationTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ShippingTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SicDescTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TypeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WebsiteTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Account extends AbstractObject
{
    use AccountSourceTrait;
    use BillingTrait;
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use FirstNameTrait;
    use IndustryTrait;
    use JigsawTrait;
    use LastActivityDateTrait;
    use LastNameTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use MasterRecordIdTrait;
    use NameTrait;
    use NumberOfEmployeesTrait;
    use OwnerIdTrait;
    use ParentIdTrait;
    use PersonTrait;
    use PhoneTrait;
    use PhotoUrlTrait;
    use RecordTypeIdTrait;
    use SalutationTrait;
    use ShippingTrait;
    use SicDescTrait;
    use TypeTrait;
    use WebsiteTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Account';
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
