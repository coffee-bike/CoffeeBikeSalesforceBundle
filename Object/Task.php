<?php

namespace CoffeeBike\SalesforceBundle\Object;

use CoffeeBike\SalesforceBundle\Object\Fields\AccountIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ActivityDateTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CallTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\CurrencyIsoCodeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsArchivedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\IsClosedTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\OwnerIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\PriorityTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\RecurrenceTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\ReminderTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\StatusTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\SubjectTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TaskSubtypeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\TypeTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WhatCountTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WhatIdTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WhoCountTrait;
use CoffeeBike\SalesforceBundle\Object\Fields\WhoIdTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Task extends AbstractObject
{
    use AccountIdTrait;
    use ActivityDateTrait;
    use CallTrait;
    use CurrencyIsoCodeTrait;
    use DescriptionTrait;
    use IsArchivedTrait;
    use IsClosedTrait;
    use OwnerIdTrait;
    use PriorityTrait;
    use RecurrenceTrait;
    use ReminderTrait;
    use StatusTrait;
    use SubjectTrait;
    use TaskSubtypeTrait;
    use TypeTrait;
    use WhatCountTrait;
    use WhatIdTrait;
    use WhoCountTrait;
    use WhoIdTrait;

    /**
     * {@inheritdoc}
     */
    public function getObjectName(): string
    {
        return 'Task';
    }

    /**
     * {@inheritDoc}
     */
    public function getWriteProtectedFields(): array
    {
        // todo check write protected fields
        return array_merge(
            parent::getWriteProtectedFields(),
            []
        );
    }
}
