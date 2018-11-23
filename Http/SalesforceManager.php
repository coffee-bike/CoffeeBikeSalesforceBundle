<?php

namespace CoffeeBike\SalesforceBundle\Http;

use CoffeeBike\SalesforceBundle\Object\AbstractObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class SalesforceManager
{
    /**
     * @var SalesforceHttpClient
     */
    private $salesforceHttpClient;

    /**
     * @param SalesforceHttpClient $salesforceHttpClient
     */
    public function __construct(SalesforceHttpClient $salesforceHttpClient)
    {
        $this->salesforceHttpClient = $salesforceHttpClient;
    }

    /**
     * Updates the given Object in Salesforce.
     *
     * @param AbstractObject $object
     */
    public function update(AbstractObject $object)
    {
        $this->salesforceHttpClient->request(sprintf('sobjects/%s/%s', $object->getObjectName(), $object->getId()), Request::METHOD_PATCH, $object);
    }

    /**
     * Populates the given AbstractObject.
     *
     * @param AbstractObject $object
     */
    public function find(AbstractObject $object): void
    {
        $this->mapToObject(
            $this->salesforceHttpClient->request(sprintf('sobjects/%s/%s', $object->getObjectName(), $object->getId()), Request::METHOD_GET, $object),
            $object
        );
    }

    public function findBy(AbstractObject $object)
    {
    }

    /**
     * Compares the API result and populates the AbstractObject.
     *
     * @param \stdClass      $data
     * @param AbstractObject $object
     */
    private function mapToObject(\stdClass $data, AbstractObject $object): void
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();

        $unmappedFields = [];
        foreach ($data as $property => $value) {
            if (true === property_exists($object, $property)) {
                $propertyAccessor->setValue($object, $property, $value);
            } else {
                $unmappedFields[$property] = $value;
            }
        }

        $propertyAccessor->setValue($object, 'unmappedFields', $unmappedFields);
    }
}
