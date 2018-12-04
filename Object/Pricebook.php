<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsActiveTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsArchivedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsStandardTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Pricebook extends AbstractObject
{
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use IsActiveTrait;
    use IsArchivedTrait;
    use IsStandardTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use NameTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Pricebook2';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            [
                'IsArchived',
                'IsStandard',
                'LastReferencedDate',
                'LastViewedDate',
            ]
        );
    }
}
