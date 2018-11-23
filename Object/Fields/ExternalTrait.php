<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ExternalTrait
{
    /**
     * @var string|null
     */
    protected $ExternalDataSourceId;

    /**
     * @var string|null
     */
    protected $ExternalId;

    /**
     * @return string|null
     */
    public function getExternalDataSourceId(): ?string
    {
        return $this->ExternalDataSourceId;
    }

    /**
     * @param string|null $ExternalDataSourceId
     */
    public function setExternalDataSourceId(?string $ExternalDataSourceId): void
    {
        $this->ExternalDataSourceId = $ExternalDataSourceId;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->ExternalId;
    }

    /**
     * @param string|null $ExternalId
     */
    public function setExternalId(?string $ExternalId): void
    {
        $this->ExternalId = $ExternalId;
    }
}
