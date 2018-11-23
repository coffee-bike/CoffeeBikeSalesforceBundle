<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait MobilePhoneTrait
{
    /**
     * @var string|null
     */
    protected $MobilePhone;

    /**
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->MobilePhone;
    }

    /**
     * @param string|null $MobilePhone
     */
    public function setMobilePhone(?string $MobilePhone): void
    {
        $this->MobilePhone = $MobilePhone;
    }
}
