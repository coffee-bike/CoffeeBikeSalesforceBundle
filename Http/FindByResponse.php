<?php

namespace CoffeeBike\SalesforceBundle\Http;

use CoffeeBike\SalesforceBundle\Object\AbstractObject;
use CoffeeBike\SalesforceBundle\Object\AbstractObjectMapperTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class FindByResponse
{
    use AbstractObjectMapperTrait;

    /**
     * @var int
     */
    private $totalSize;

    /**
     * @var bool
     */
    private $done;

    /**
     * @var string|null
     */
    private $nextRecordsUrl;

    /**
     * @var AbstractObject[]
     */
    private $objects;

    /**
     * @var string
     */
    private $objectClass;

    /**
     * @return int
     */
    public function getTotalSize(): int
    {
        return $this->totalSize;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->done;
    }

    /**
     * @return string|null
     */
    public function getNextRecordsUrl(): ?string
    {
        return $this->nextRecordsUrl;
    }

    /**
     * @return AbstractObject[]
     */
    public function getObjects(): array
    {
        return $this->objects;
    }

    /**
     * @return string
     */
    public function getObjectClass(): string
    {
        return $this->objectClass;
    }

    /**
     * @param \stdClass $response
     * @param string    $objectClass
     *
     * @return FindByResponse
     */
    public static function fromResponse(\stdClass $response, string $objectClass): self
    {
        $findByResponse = new self();
        $findByResponse->totalSize = $response->totalSize;
        $findByResponse->done = $response->done;
        $findByResponse->nextRecordsUrl = isset($response->nextRecordsUrl) ? $response->nextRecordsUrl : null;
        $findByResponse->objectClass = $objectClass;

        foreach ($response->records as $record) {
            $targetObject = new $objectClass();
            self::mapToObject($record, $targetObject);
            $findByResponse->objects[] = $targetObject;
        }

        return $findByResponse;
    }
}
