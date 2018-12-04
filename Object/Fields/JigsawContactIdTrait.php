<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait JigsawContactIdTrait
{
    /**
     * @var string|null
     */
    protected $JigsawContactId;

    /**
     * @return string|null
     */
    public function getJigsawContactId(): ?string
    {
        return $this->JigsawContactId;
    }

    /**
     * @param string|null $JigsawContactId
     */
    public function setJigsawContactId(?string $JigsawContactId): void
    {
        $this->JigsawContactId = $JigsawContactId;
    }
}
