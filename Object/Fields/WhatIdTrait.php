<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait WhatIdTrait
{
    /**
     * @var string|null
     */
    protected $WhatId;

    /**
     * @return null|string
     */
    public function getWhatId(): ?string
    {
        return $this->WhatId;
    }

    /**
     * @param null|string $WhatId
     */
    public function setWhatId(?string $WhatId): void
    {
        $this->WhatId = $WhatId;
    }
}
