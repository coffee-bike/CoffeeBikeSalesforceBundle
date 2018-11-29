<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait RecordTypeIdTrait
{
    /**
     * @var string|null
     */
    protected $RecordTypeId;

    /**
     * @return string|null
     */
    public function getRecordTypeId(): ?string
    {
        return $this->RecordTypeId;
    }

    /**
     * @param string|null $RecordTypeId
     */
    public function setRecordTypeId(?string $RecordTypeId): void
    {
        $this->RecordTypeId = $RecordTypeId;
    }
}
