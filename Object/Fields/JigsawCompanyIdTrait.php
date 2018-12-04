<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait JigsawCompanyIdTrait
{
    /**
     * @var string|null
     */
    protected $JigsawCompanyId;

    /**
     * @return string|null
     */
    public function getJigsawCompanyId(): ?string
    {
        return $this->JigsawCompanyId;
    }

    /**
     * @param string|null $JigsawCompanyId
     */
    public function setJigsawCompanyId(?string $JigsawCompanyId): void
    {
        $this->JigsawCompanyId = $JigsawCompanyId;
    }
}
