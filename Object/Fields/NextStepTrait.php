<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait NextStepTrait
{
    /**
     * @var string|null
     */
    protected $NextStep;

    /**
     * @return null|string
     */
    public function getNextStep(): ?string
    {
        return $this->NextStep;
    }

    /**
     * @param null|string $NextStep
     */
    public function setNextStep(?string $NextStep): void
    {
        $this->NextStep = $NextStep;
    }
}
