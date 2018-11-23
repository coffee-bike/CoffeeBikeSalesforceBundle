<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AddressTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CompanyTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EmailTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FaxTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FirstNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\MasterRecordIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\MobilePhoneTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhoneTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PhotoUrlTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecordTypeIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SalutationTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TitleTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WebsiteTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Lead extends AbstractObject
{
    use AddressTrait;
    use CompanyTrait;
    use EmailTrait;
    use FaxTrait;
    use FirstNameTrait;
    use LastNameTrait;
    use MasterRecordIdTrait;
    use MobilePhoneTrait;
    use NameTrait;
    use PhoneTrait;
    use PhotoUrlTrait;
    use RecordTypeIdTrait;
    use SalutationTrait;
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
        // todo check write protected fields
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            []
        );
    }
}
