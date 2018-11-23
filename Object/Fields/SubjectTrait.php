<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait SubjectTrait
{
    /**
     * @var string|null
     */
    protected $Subject;

    /**
     * @return null|string
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }

    /**
     * @param null|string $Subject
     */
    public function setSubject(?string $Subject): void
    {
        $this->Subject = $Subject;
    }
}
