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
     * @var string|null
     */
    protected $JigsawCompanyId;

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

    /**
     * @return null|string
     */
    public function getJigsawCompanyId(): ?string
    {
        return $this->JigsawCompanyId;
    }

    /**
     * @param null|string $JigsawCompanyId
     */
    public function setJigsawCompanyId(?string $JigsawCompanyId): void
    {
        $this->JigsawCompanyId = $JigsawCompanyId;
    }
}
