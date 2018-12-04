<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait JigsawTrait
{
    /**
     * @var string|null
     */
    protected $Jigsaw;

    /**
     * @return null|string
     */
    public function getJigsaw(): ?string
    {
        return $this->Jigsaw;
    }

    /**
     * @param null|string $Jigsaw
     */
    public function setJigsaw(?string $Jigsaw): void
    {
        $this->Jigsaw = $Jigsaw;
    }
}
