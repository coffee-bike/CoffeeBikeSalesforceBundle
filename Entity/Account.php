<?php
/**
 * Created by PhpStorm.
 * User: jondam
 * Date: 20.11.18
 * Time: 01:20
 */

namespace CoffeeBike\SalesforceRESTBundle\Entity;

class Account
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}