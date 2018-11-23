<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ActivityDateTrait
{
    /**
     * @var string|null
     */
    protected $ActivityDate;

    /**
     * @return null|string
     */
    public function getActivityDate(): ?string
    {
        return $this->ActivityDate;
    }

    /**
     * @param null|string $ActivityDate
     */
    public function setActivityDate(?string $ActivityDate): void
    {
        $this->ActivityDate = $ActivityDate;
    }
}
