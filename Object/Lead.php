<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AddressTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\AnnualRevenueTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CompanyTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ConvertedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EmailBouncedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EmailTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FaxTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FirstNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\HasOptedOutOfEmailTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IndustryTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsUnreadByOwnerTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\JigsawContactIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\JigsawTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastActivityDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LeadSourceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\MasterRecordIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\MobilePhoneTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NumberOfEmployeesTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OwnerIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhoneTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhotoUrlTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RatingTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecordTypeIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SalutationTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StatusTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TitleTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WebsiteTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Lead extends AbstractObject
{
    use AddressTrait;
    use AnnualRevenueTrait;
    use CityTrait;
    use CompanyTrait;
    use ConvertedTrait;
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use EmailBouncedTrait;
    use EmailTrait;
    use FaxTrait;
    use FirstNameTrait;
    use HasOptedOutOfEmailTrait;
    use IndustryTrait;
    use IsUnreadByOwnerTrait;
    use JigsawTrait;
    use JigsawContactIdTrait;
    use LastActivityDateTrait;
    use LastNameTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use LeadSourceTrait;
    use MasterRecordIdTrait;
    use MobilePhoneTrait;
    use NameTrait;
    use NumberOfEmployeesTrait;
    use OwnerIdTrait;
    use PhoneTrait;
    use PhotoUrlTrait;
    use RatingTrait;
    use RecordTypeIdTrait;
    use SalutationTrait;
    use StateTrait;
    use StatusTrait;
    use TitleTrait;
    use WebsiteTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Lead';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            [
                'Address',
                'ConvertedAccountId',
                'ConvertedDate',
                'ConvertedContactId',
                'ConvertedOpportunityId',
                'EmailBouncedDate',
                'EmailBouncedReason',
                'JigsawContactId',
                'LastReferencedDate',
                'LastViewedDate',
                'MasterRecordId',
                'Name',
                'PhotoUrl',
            ]
        );
    }
}
