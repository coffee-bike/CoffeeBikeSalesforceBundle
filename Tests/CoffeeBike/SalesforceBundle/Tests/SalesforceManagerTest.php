<?php
/**
 * PROJECT: CoffeeBikeSalesforceRESTBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 15.02.17
 * Time: 16:38
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */
namespace CoffeeBike\SalesforceRESTBundle\Tests;

use Circle\RestClientBundle\Services\Curl;
use Circle\RestClientBundle\Services\CurlOptionsHandler;
use Circle\RestClientBundle\Services\RestClient;
use CoffeeBike\SalesforceRESTBundle\Services\SalesforceManager;

class SalesforceManagerTest extends \PHPUnit_Framework_TestCase
{
    private $sf;

    public function setUp()
    {
        $this->sf = new SalesforceManager(
            new RestClient(
                new Curl(
                    new CurlOptionsHandler(array())
                )
            ),
            "<INSTANCE>",
            "<USER>",
            "<PASSWORD>",
            "<TOKEN>",
            "<CLIENT_ID>",
            "<CLIENT_SECRET>"
        );
    }

    public function testGetApiLimit()
    {
       $result = $this->sf->getApiLimit();

       $this->assertObjectHasAttribute('Max', $result);
       $this->assertObjectHasAttribute('Remaining', $result);
    }

    public function testQuery()
    {
        print_r($this->sf->findAll(null));
    }
}