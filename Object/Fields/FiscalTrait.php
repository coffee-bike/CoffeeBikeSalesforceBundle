<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait FiscalTrait
{
    /**
     * @var int|null
     */
    protected $FiscalQuarter;

    /**
     * @var int|null
     */
    protected $FiscalYear;

    /**
     * @var string|null
     */
    protected $Fiscal;

    /**
     * @return int|null
     */
    public function getFiscalQuarter(): ?int
    {
        return $this->FiscalQuarter;
    }

    /**
     * @param int|null $FiscalQuarter
     */
    public function setFiscalQuarter(?int $FiscalQuarter): void
    {
        $this->FiscalQuarter = $FiscalQuarter;
    }

    /**
     * @return int|null
     */
    public function getFiscalYear(): ?int
    {
        return $this->FiscalYear;
    }

    /**
     * @param int|null $FiscalYear
     */
    public function setFiscalYear(?int $FiscalYear): void
    {
        $this->FiscalYear = $FiscalYear;
    }

    /**
     * @return null|string
     */
    public function getFiscal(): ?string
    {
        return $this->Fiscal;
    }

    /**
     * @param null|string $Fiscal
     */
    public function setFiscal(?string $Fiscal): void
    {
        $this->Fiscal = $Fiscal;
    }
}
