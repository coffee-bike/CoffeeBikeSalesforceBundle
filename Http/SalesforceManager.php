<?php

namespace CoffeeBike\SalesforceBundle\Http;

use CoffeeBike\SalesforceBundle\Exception\LastPageReachedException;
use CoffeeBike\SalesforceBundle\Object\AbstractObject;
use CoffeeBike\SalesforceBundle\Object\AbstractObjectMapperTrait;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class SalesforceManager
{
    use AbstractObjectMapperTrait;

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
     * @param AbstractObject $object
     */
    public function create(AbstractObject $object)
    {
        $response = $this->salesforceHttpClient->request(sprintf('sobjects/%s', $object->getObjectName()), Request::METHOD_POST, $object);
        $object->setId($response->id);
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

    /**
     * @param AbstractObject $object
     * @param array          $filters
     *
     * @return FindByResponse
     */
    public function findBy(AbstractObject $object, array $filters)
    {
        $fields = implode(',', array_keys($object->toArray(['attributes'])));

        $filterString = '';
        /** @var Filter $filter */
        foreach ($filters as $key => $filter) {
            reset($filters);
            end($filters);
            $and = $key === key($filters) ? '' : ' AND ';

            $filterString .= sprintf('%s %s %s%s', $filter->getField(), $filter->getOperator(), $filter->getValue(), $and);
        }

        $query = sprintf('SELECT %s FROM %s', $fields, $object->getObjectName());
        if (0 !== count($filters)) {
            $query .= sprintf(' WHERE %s', urlencode($filterString));
        }

        return FindByResponse::fromResponse(
            $this->salesforceHttpClient->request(sprintf('query?q=%s', $query), Request::METHOD_GET, $object),
            get_class($object)
        );
    }

    /**
     * @param FindByResponse $findByResponse
     *
     * @return FindByResponse
     *
     * @throws LastPageReachedException
     */
    public function findNextPage(FindByResponse $findByResponse): FindByResponse
    {
        if ($findByResponse->isDone()) {
            throw new LastPageReachedException();
        }

        $nextPageId = substr($findByResponse->getNextRecordsUrl(), strrpos($findByResponse->getNextRecordsUrl(), '/') + 1);
        $objectClass = $findByResponse->getObjectClass();

        return FindByResponse::fromResponse(
            $this->salesforceHttpClient->request(sprintf('query/%s', $nextPageId), Request::METHOD_GET, new $objectClass()),
            $objectClass
        );
    }
}
