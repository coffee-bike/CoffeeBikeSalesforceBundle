<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait RecordTypeIdTrait
{
    /**
     * @var string
     */
    protected $RecordTypeId;

    /**
     * @return string
     */
    public function getRecordTypeId(): string
    {
        return $this->RecordTypeId;
    }

    /**
     * @param string $RecordTypeId
     */
    public function setRecordTypeId(string $RecordTypeId): void
    {
        $this->RecordTypeId = $RecordTypeId;
    }
}
