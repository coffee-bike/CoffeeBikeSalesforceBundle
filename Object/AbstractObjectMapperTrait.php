<?php

namespace CoffeeBike\SalesforceBundle\Object;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AbstractObjectMapperTrait
{
    /**
     * Compares the plain object and populates the AbstractObject.
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
