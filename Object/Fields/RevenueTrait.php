<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait RevenueTrait
{
    /**
     * @var string|null
     */
    protected $RevenueScheduleType;

    /**
     * @var string|null
     */
    protected $RevenueInstallmentPeriod;

    /**
     * @var string|null
     */
    protected $NumberOfRevenueInstallments;

    /**
     * @return string|null
     */
    public function getRevenueScheduleType(): ?string
    {
        return $this->RevenueScheduleType;
    }

    /**
     * @param string|null $RevenueScheduleType
     */
    public function setRevenueScheduleType(?string $RevenueScheduleType): void
    {
        $this->RevenueScheduleType = $RevenueScheduleType;
    }

    /**
     * @return string|null
     */
    public function getRevenueInstallmentPeriod(): ?string
    {
        return $this->RevenueInstallmentPeriod;
    }

    /**
     * @param string|null $RevenueInstallmentPeriod
     */
    public function setRevenueInstallmentPeriod(?string $RevenueInstallmentPeriod): void
    {
        $this->RevenueInstallmentPeriod = $RevenueInstallmentPeriod;
    }

    /**
     * @return string|null
     */
    public function getNumberOfRevenueInstallments(): ?string
    {
        return $this->NumberOfRevenueInstallments;
    }

    /**
     * @param string|null $NumberOfRevenueInstallments
     */
    public function setNumberOfRevenueInstallments(?string $NumberOfRevenueInstallments): void
    {
        $this->NumberOfRevenueInstallments = $NumberOfRevenueInstallments;
    }
}
