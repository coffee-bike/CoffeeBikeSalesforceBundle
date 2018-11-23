<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait WhatCountTrait
{
    /**
     * @var int|null
     */
    protected $WhatCount;

    /**
     * @return int|null
     */
    public function getWhatCount(): ?int
    {
        return $this->WhatCount;
    }

    /**
     * @param int|null $WhatCount
     */
    public function setWhatCount(?int $WhatCount): void
    {
        $this->WhatCount = $WhatCount;
    }
}
