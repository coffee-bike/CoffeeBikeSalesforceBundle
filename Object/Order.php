<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AccountIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ActivatedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\BillingTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CompanyAuthorizedByIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ContractIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CustomerAuthorizedByIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EffectiveDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EndDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsReductionOrderTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OpportunityIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OrderNumberTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OriginalOrderIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OwnerIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\Pricebook2IdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecordTypeIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ShippingTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StatusCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StatusTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TotalAmountTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TypeTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Order extends AbstractObject
{
    use AccountIdTrait;
    use ActivatedTrait;
    use BillingTrait;
    use CompanyAuthorizedByIdTrait;
    use ContractIdTrait;
    use CurrencyIsoCodeTrait;
    use CustomerAuthorizedByIdTrait;
    use DescriptionTrait;
    use EffectiveDateTrait;
    use EndDateTrait;
    use IsReductionOrderTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use OpportunityIdTrait;
    use OrderNumberTrait;
    use OriginalOrderIdTrait;
    use OwnerIdTrait;
    use Pricebook2IdTrait;
    use RecordTypeIdTrait;
    use ShippingTrait;
    use StatusTrait;
    use StatusCodeTrait;
    use TotalAmountTrait;
    use TypeTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Order';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            [
                'ActivatedById',
                'ActivatedDate',
                'LastReferencedDate',
                'LastViewedDate',
                'OrderNumber',
                'StatusCode',
                'TotalAmount',
            ]
        );
    }
}
