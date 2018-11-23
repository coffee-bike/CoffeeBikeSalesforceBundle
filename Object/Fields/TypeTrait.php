<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait TypeTrait
{
    /**
     * @var string|null
     */
    protected $Type;

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * @param null|string $type
     */
    public function setType(?string $type): void
    {
        $this->Type = $type;
    }
}
