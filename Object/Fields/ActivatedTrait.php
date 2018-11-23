<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ActivatedTrait
{
    /**
     * @var string|null
     */
    protected $ActivatedDate;

    /**
     * @var string|null
     */
    protected $ActivatedById;

    /**
     * @return string|null
     */
    public function getActivatedDate(): ?string
    {
        return $this->ActivatedDate;
    }

    /**
     * @param string|null $ActivatedDate
     */
    public function setActivatedDate(?string $ActivatedDate): void
    {
        $this->ActivatedDate = $ActivatedDate;
    }

    /**
     * @return string|null
     */
    public function getActivatedById(): ?string
    {
        return $this->ActivatedById;
    }

    /**
     * @param string|null $ActivatedById
     */
    public function setActivatedById(?string $ActivatedById): void
    {
        $this->ActivatedById = $ActivatedById;
    }
}
