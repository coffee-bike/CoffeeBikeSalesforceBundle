<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait MasterRecordIdTrait
{
    /**
     * @var string|null
     */
    protected $MasterRecordId;

    /**
     * @return null|string
     */
    public function getMasterRecordId(): ?string
    {
        return $this->MasterRecordId;
    }

    /**
     * @param null|string $MasterRecordId
     */
    public function setMasterRecordId(?string $MasterRecordId): void
    {
        $this->MasterRecordId = $MasterRecordId;
    }
}
