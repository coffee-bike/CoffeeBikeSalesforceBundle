<?php

namespace CoffeeBike\SalesforceBundle\Exception;

use CoffeeBike\SalesforceBundle\Object\AbstractObject;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class ObjectNotFoundException extends SalesforceException
{
    /**
     * @param AbstractObject $object
     *
     * @return ObjectNotFoundException
     */
    public static function fromAbstractObject(AbstractObject $object): self
    {
        return new static(
            sprintf('The requested object "%s" with the id "%s" does not exist.', $object->getObjectName(), $object->getId()),
            404
        );
    }
}
