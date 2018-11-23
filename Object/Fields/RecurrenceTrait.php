<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait RecurrenceTrait
{
    /**
     * @var string|null
     */
    protected $RecurrenceActivityId;

    /**
     * @var bool
     */
    protected $IsRecurrence;

    /**
     * @var string|null
     */
    protected $RecurrenceStartDateOnly;

    /**
     * @var string|null
     */
    protected $RecurrenceEndDateOnly;

    /**
     * @var string|null
     */
    protected $RecurrenceTimeZoneSidKey;

    /**
     * @var string|null
     */
    protected $RecurrenceType;

    /**
     * @var string|null
     */
    protected $RecurrenceInterval;

    /**
     * @var string|null
     */
    protected $RecurrenceDayOfWeekMask;

    /**
     * @var string|null
     */
    protected $RecurrenceDayOfMonth;

    /**
     * @var string|null
     */
    protected $RecurrenceInstance;

    /**
     * @var string|null
     */
    protected $RecurrenceMonthOfYear;

    /**
     * @var string|null
     */
    protected $RecurrenceRegeneratedType;

    /**
     * @return null|string
     */
    public function getRecurrenceActivityId(): ?string
    {
        return $this->RecurrenceActivityId;
    }

    /**
     * @param null|string $RecurrenceActivityId
     */
    public function setRecurrenceActivityId(?string $RecurrenceActivityId): void
    {
        $this->RecurrenceActivityId = $RecurrenceActivityId;
    }

    /**
     * @return bool
     */
    public function isRecurrence(): bool
    {
        return $this->IsRecurrence;
    }

    /**
     * @param bool $IsRecurrence
     */
    public function setIsRecurrence(bool $IsRecurrence): void
    {
        $this->IsRecurrence = $IsRecurrence;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceStartDateOnly(): ?string
    {
        return $this->RecurrenceStartDateOnly;
    }

    /**
     * @param null|string $RecurrenceStartDateOnly
     */
    public function setRecurrenceStartDateOnly(?string $RecurrenceStartDateOnly): void
    {
        $this->RecurrenceStartDateOnly = $RecurrenceStartDateOnly;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceEndDateOnly(): ?string
    {
        return $this->RecurrenceEndDateOnly;
    }

    /**
     * @param null|string $RecurrenceEndDateOnly
     */
    public function setRecurrenceEndDateOnly(?string $RecurrenceEndDateOnly): void
    {
        $this->RecurrenceEndDateOnly = $RecurrenceEndDateOnly;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceTimeZoneSidKey(): ?string
    {
        return $this->RecurrenceTimeZoneSidKey;
    }

    /**
     * @param null|string $RecurrenceTimeZoneSidKey
     */
    public function setRecurrenceTimeZoneSidKey(?string $RecurrenceTimeZoneSidKey): void
    {
        $this->RecurrenceTimeZoneSidKey = $RecurrenceTimeZoneSidKey;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceType(): ?string
    {
        return $this->RecurrenceType;
    }

    /**
     * @param null|string $RecurrenceType
     */
    public function setRecurrenceType(?string $RecurrenceType): void
    {
        $this->RecurrenceType = $RecurrenceType;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceInterval(): ?string
    {
        return $this->RecurrenceInterval;
    }

    /**
     * @param null|string $RecurrenceInterval
     */
    public function setRecurrenceInterval(?string $RecurrenceInterval): void
    {
        $this->RecurrenceInterval = $RecurrenceInterval;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceDayOfWeekMask(): ?string
    {
        return $this->RecurrenceDayOfWeekMask;
    }

    /**
     * @param null|string $RecurrenceDayOfWeekMask
     */
    public function setRecurrenceDayOfWeekMask(?string $RecurrenceDayOfWeekMask): void
    {
        $this->RecurrenceDayOfWeekMask = $RecurrenceDayOfWeekMask;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceDayOfMonth(): ?string
    {
        return $this->RecurrenceDayOfMonth;
    }

    /**
     * @param null|string $RecurrenceDayOfMonth
     */
    public function setRecurrenceDayOfMonth(?string $RecurrenceDayOfMonth): void
    {
        $this->RecurrenceDayOfMonth = $RecurrenceDayOfMonth;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceInstance(): ?string
    {
        return $this->RecurrenceInstance;
    }

    /**
     * @param null|string $RecurrenceInstance
     */
    public function setRecurrenceInstance(?string $RecurrenceInstance): void
    {
        $this->RecurrenceInstance = $RecurrenceInstance;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceMonthOfYear(): ?string
    {
        return $this->RecurrenceMonthOfYear;
    }

    /**
     * @param null|string $RecurrenceMonthOfYear
     */
    public function setRecurrenceMonthOfYear(?string $RecurrenceMonthOfYear): void
    {
        $this->RecurrenceMonthOfYear = $RecurrenceMonthOfYear;
    }

    /**
     * @return null|string
     */
    public function getRecurrenceRegeneratedType(): ?string
    {
        return $this->RecurrenceRegeneratedType;
    }

    /**
     * @param null|string $RecurrenceRegeneratedType
     */
    public function setRecurrenceRegeneratedType(?string $RecurrenceRegeneratedType): void
    {
        $this->RecurrenceRegeneratedType = $RecurrenceRegeneratedType;
    }
}
