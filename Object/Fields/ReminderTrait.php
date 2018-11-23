<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ReminderTrait
{
    /**
     * @var string|null
     */
    protected $ReminderDateTime;

    /**
     * @var string|null
     */
    protected $IsReminderSet;

    /**
     * @return null|string
     */
    public function getReminderDateTime(): ?string
    {
        return $this->ReminderDateTime;
    }

    /**
     * @param null|string $ReminderDateTime
     */
    public function setReminderDateTime(?string $ReminderDateTime): void
    {
        $this->ReminderDateTime = $ReminderDateTime;
    }

    /**
     * @return null|string
     */
    public function getisReminderSet(): ?string
    {
        return $this->IsReminderSet;
    }

    /**
     * @param null|string $IsReminderSet
     */
    public function setIsReminderSet(?string $IsReminderSet): void
    {
        $this->IsReminderSet = $IsReminderSet;
    }
}
