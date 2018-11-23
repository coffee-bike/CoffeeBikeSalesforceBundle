<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ProbabilityTrait
{
    /**
     * @var float|null
     */
    protected $Probability;

    /**
     * @return float|null
     */
    public function getProbability(): ?float
    {
        return $this->Probability;
    }

    /**
     * @param float|null $Probability
     */
    public function setProbability(?float $Probability): void
    {
        $this->Probability = $Probability;
    }
}
