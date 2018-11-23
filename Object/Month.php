<?php

namespace CoffeeBike\SalesforceBundle\Object;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Month extends AbstractObject
{
    // todo add properties

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Month__c';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return array_merge(
            parent::getWriteProtectedFields(),
            [
                'account__c',
            ]
        );
    }
}
