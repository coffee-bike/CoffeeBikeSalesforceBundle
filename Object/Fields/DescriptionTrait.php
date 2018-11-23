<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait DescriptionTrait
{
    /**
     * @var string|null
     */
    protected $Description;

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    /**
     * @param null|string $Description
     */
    public function setDescription(?string $Description): void
    {
        $this->Description = $Description;
    }
}
