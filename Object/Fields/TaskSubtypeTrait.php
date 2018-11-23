<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait TaskSubtypeTrait
{
    /**
     * @var string|null
     */
    protected $TaskSubtype;

    /**
     * @return null|string
     */
    public function getTaskSubtype(): ?string
    {
        return $this->TaskSubtype;
    }

    /**
     * @param null|string $TaskSubtype
     */
    public function setTaskSubtype(?string $TaskSubtype): void
    {
        $this->TaskSubtype = $TaskSubtype;
    }
}
