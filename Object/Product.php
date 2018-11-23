<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DisplayUrlTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ExternalTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\FamilyTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsActiveTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastReferencedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\LastViewedDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ProductCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\QuantityUnitOfMeasureTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RevenueTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Product extends AbstractObject
{
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use DisplayUrlTrait;
    use ExternalTrait;
    use FamilyTrait;
    use IsActiveTrait;
    use LastReferencedDateTrait;
    use LastViewedDateTrait;
    use NameTrait;
    use ProductCodeTrait;
    use QuantityUnitOfMeasureTrait;
    use RevenueTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Product2';
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
