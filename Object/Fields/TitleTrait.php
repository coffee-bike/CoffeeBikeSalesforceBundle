<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait TitleTrait
{
    /**
     * @var string|null
     */
    protected $Title;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    /**
     * @param string|null $Title
     */
    public function setTitle(?string $Title): void
    {
        $this->Title = $Title;
    }
}
