<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AvailableQuantityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\EndDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ListPriceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OrderIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OrderItemNumberTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OriginalOrderItemIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PricebookEntryIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\Product2IdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\QuantityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ServiceDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TotalPriceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\UnitPriceTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class OrderItem extends AbstractObject
{
    use AvailableQuantityTrait;
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use EndDateTrait;
    use OrderIdTrait;
    use OrderItemNumberTrait;
    use OriginalOrderItemIdTrait;
    use ListPriceTrait;
    use PricebookEntryIdTrait;
    use Product2IdTrait;
    use QuantityTrait;
    use ServiceDateTrait;
    use TotalPriceTrait;
    use UnitPriceTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'OrderItem';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            []
        );
    }
}
