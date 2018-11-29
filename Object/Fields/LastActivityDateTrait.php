<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait LastActivityDateTrait
{
    /**
     * @var string|null
     */
    protected $LastActivityDate;

    /**
     * @return string|null
     */
    public function getLastActivityDate(): ?string
    {
        return $this->LastActivityDate;
    }

    /**
     * @param string|null $LastActivityDate
     */
    public function setLastActivityDate(?string $LastActivityDate): void
    {
        $this->LastActivityDate = $LastActivityDate;
    }
}
