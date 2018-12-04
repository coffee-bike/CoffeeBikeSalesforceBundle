<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsActiveTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\NameTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\Pricebook2IdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\Product2IdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ProductCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\UnitPriceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\UseStandardPriceTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class PricebookEntry extends AbstractObject
{
    use CurrencyIsoCodeTrait;
    use IsActiveTrait;
    use NameTrait;
    use Pricebook2IdTrait;
    use Product2IdTrait;
    use ProductCodeTrait;
    use UnitPriceTrait;
    use UseStandardPriceTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'PricebookEntry';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            [
                'Name',
                'ProductCode',
            ]
        );
    }
}
