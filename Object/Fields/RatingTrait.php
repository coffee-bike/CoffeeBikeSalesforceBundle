<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait RatingTrait
{
    /**
     * @var string|null
     */
    protected $Rating;

    /**
     * @return string|null
     */
    public function getRating(): ?string
    {
        return $this->Rating;
    }

    /**
     * @param string|null $Rating
     */
    public function setRating(?string $Rating): void
    {
        $this->Rating = $Rating;
    }
}
