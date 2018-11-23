<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait StageNameTrait
{
    /**
     * @var string|null
     */
    protected $StageName;

    /**
     * @return null|string
     */
    public function getStageName(): ?string
    {
        return $this->StageName;
    }

    /**
     * @param null|string $StageName
     */
    public function setStageName(?string $StageName): void
    {
        $this->StageName = $StageName;
    }
}
