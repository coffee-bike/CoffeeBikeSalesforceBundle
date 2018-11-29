<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AccountIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\AmountTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CampaignIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CloseDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FiscalTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ForecastTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\HasOpenActivityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\HasOpportunityLineItemTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\HasOverdueTaskTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsClosedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsWonTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastActivityDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LeadSourceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NextStepTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OwnerIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\Pricebook2IdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ProbabilityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecordTypeIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StageNameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SyncedQuoteIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TypeTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
abstract class Opportunity extends AbstractObject
{
    use AccountIdTrait;
    use AmountTrait;
    use CampaignIdTrait;
    use CloseDateTrait;
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use FiscalTrait;
    use ForecastTrait;
    use HasOpenActivityTrait;
    use HasOpportunityLineItemTrait;
    use HasOverdueTaskTrait;
    use IsClosedTrait;
    use IsWonTrait;
    use LastActivityDateTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use LeadSourceTrait;
    use NameTrait;
    use NextStepTrait;
    use OwnerIdTrait;
    use Pricebook2IdTrait;
    use ProbabilityTrait;
    use RecordTypeIdTrait;
    use StageNameTrait;
    use SyncedQuoteIdTrait;
    use TypeTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Opportunity';
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
