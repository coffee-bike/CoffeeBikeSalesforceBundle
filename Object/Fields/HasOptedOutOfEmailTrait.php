<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait HasOptedOutOfEmailTrait
{
    /**
     * @var bool
     */
    protected $HasOptedOutOfEmail;

    /**
     * @return bool
     */
    public function isHasOptedOutOfEmail(): bool
    {
        return $this->HasOptedOutOfEmail;
    }

    /**
     * @param bool $HasOptedOutOfEmail
     */
    public function setHasOptedOutOfEmail(bool $HasOptedOutOfEmail): void
    {
        $this->HasOptedOutOfEmail = $HasOptedOutOfEmail;
    }
}
