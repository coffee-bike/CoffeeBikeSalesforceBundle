<?php

namespace CoffeeBike\SalesforceBundle\Object;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
abstract class AbstractObject
{
    const WRITE_PROTECTED_FIELDS = [
        'attributes',
        'CreatedById',
        'CreatedDate',
        'Id',
        'IsDeleted',
        'LastActivityDate',
        'LastModifiedById',
        'LastModifiedDate',
        'SystemModstamp',
    ];

    /**
     * @var \stdClass
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $IsDeleted;

    /**
     * @var string
     */
    protected $CreatedDate;

    /**
     * @var string
     */
    protected $CreatedById;

    /**
     * @var string|null
     */
    protected $LastActivityDate;

    /**
     * @var string
     */
    protected $LastModifiedDate;

    /**
     * @var string
     */
    protected $LastModifiedById;

    /**
     * @var string
     */
    protected $SystemModstamp;

    /**
     * @var array
     */
    protected $unmappedFields;

    /**
     * @param string $id
     */
    public function __construct(?string $id = null)
    {
        $this->Id = $id;
        $this->unmappedFields = [];
    }

    /**
     * @return string
     */
    abstract public function getObjectName(): string;

    /**
     * @return array
     */
    abstract public function getWriteProtectedFields(): array;

    /**
     * @param array $writeProtectedFields
     *
     * @return array
     */
    public function toArray(array $writeProtectedFields): array
    {
        $array = [];
        foreach ($this as $property => $value) {
            if (true === in_array($property, $writeProtectedFields)) {
                continue;
            }

            if ('unmappedFields' === $property) {
                foreach ($value as $unmappedProperty => $unmappedValue) {
                    if (true === in_array($unmappedProperty, $writeProtectedFields)) {
                        continue;
                    }

                    $array[$unmappedProperty] = $unmappedValue;
                }
            } else {
                $array[$property] = $value;
            }
        }

        return $array;
    }

    /**
     * @return \stdClass
     */
    public function getAttributes(): \stdClass
    {
        return $this->attributes;
    }

    /**
     * @param \stdClass $attributes
     */
    public function setAttributes(\stdClass $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     */
    public function setId(string $Id): void
    {
        $this->Id = $Id;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->IsDeleted;
    }

    /**
     * @param bool $IsDeleted
     */
    public function setIsDeleted(bool $IsDeleted): void
    {
        $this->IsDeleted = $IsDeleted;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->CreatedDate;
    }

    /**
     * @param string $CreatedDate
     */
    public function setCreatedDate(string $CreatedDate): void
    {
        $this->CreatedDate = $CreatedDate;
    }

    /**
     * @return string
     */
    public function getCreatedById(): string
    {
        return $this->CreatedById;
    }

    /**
     * @param string $CreatedById
     */
    public function setCreatedById(string $CreatedById): void
    {
        $this->CreatedById = $CreatedById;
    }

    /**
     * @return string|null
     */
    public function getLastActivityDate(): ?string
    {
        return $this->LastActivityDate;
    }

    /**
     * @param string|null $LastActivityDate
     */
    public function setLastActivityDate(?string $LastActivityDate): void
    {
        $this->LastActivityDate = $LastActivityDate;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->LastModifiedDate;
    }

    /**
     * @param string $LastModifiedDate
     */
    public function setLastModifiedDate(string $LastModifiedDate): void
    {
        $this->LastModifiedDate = $LastModifiedDate;
    }

    /**
     * @return string
     */
    public function getLastModifiedById(): string
    {
        return $this->LastModifiedById;
    }

    /**
     * @param string $LastModifiedById
     */
    public function setLastModifiedById(string $LastModifiedById): void
    {
        $this->LastModifiedById = $LastModifiedById;
    }

    /**
     * @return string
     */
    public function getSystemModstamp(): string
    {
        return $this->SystemModstamp;
    }

    /**
     * @param string $SystemModstamp
     */
    public function setSystemModstamp(string $SystemModstamp): void
    {
        $this->SystemModstamp = $SystemModstamp;
    }

    /**
     * @return array
     */
    public function getUnmappedFields(): array
    {
        return $this->unmappedFields;
    }

    /**
     * @param array $unmappedFields
     */
    public function setUnmappedFields(array $unmappedFields): void
    {
        $this->unmappedFields = $unmappedFields;
    }

    /**
     * @param string $unmappedField
     * @param mixed  $value
     */
    public function setUnmappedField(string $unmappedField, $value): void
    {
        $this->unmappedFields[$unmappedField] = $value;
    }

    /**
     * @param string $unmappedField
     *
     * @return mixed|null
     */
    public function getUnmappedField(string $unmappedField)
    {
        return true === isset($this->unmappedFields[$unmappedField]) ? $this->unmappedFields[$unmappedField] : null;
    }
}
