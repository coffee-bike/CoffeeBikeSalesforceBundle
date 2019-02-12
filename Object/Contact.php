<?php

namespace CoffeeBike\SalesforceBundle\Object;


/**
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */
class Contact extends AbstractObject
{

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Contact';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        $protectedFields = array_merge(
            parent::WRITE_PROTECTED_FIELDS,
            [

            ]
        );

        return $protectedFields;
    }
}
