<?php

namespace CoffeeBike\SalesforceBundle\Exception;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class LastPageReachedException extends SalesforceException
{
    public function __construct()
    {
        parent::__construct('There are no more pages to fetch.', 500);
    }
}
