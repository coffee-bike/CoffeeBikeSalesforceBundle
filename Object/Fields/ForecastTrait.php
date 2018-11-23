<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ForecastTrait
{
    /**
     * @var string|null
     */
    protected $ForecastCategory;

    /**
     * @var string|null
     */
    protected $ForecastCategoryName;

    /**
     * @return null|string
     */
    public function getForecastCategory(): ?string
    {
        return $this->ForecastCategory;
    }

    /**
     * @param null|string $ForecastCategory
     */
    public function setForecastCategory(?string $ForecastCategory): void
    {
        $this->ForecastCategory = $ForecastCategory;
    }

    /**
     * @return null|string
     */
    public function getForecastCategoryName(): ?string
    {
        return $this->ForecastCategoryName;
    }

    /**
     * @param null|string $ForecastCategoryName
     */
    public function setForecastCategoryName(?string $ForecastCategoryName): void
    {
        $this->ForecastCategoryName = $ForecastCategoryName;
    }
}
