<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait StatusCodeTrait
{
    /**
     * @var string|null
     */
    protected $StatusCode;

    /**
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }

    /**
     * @param string|null $StatusCode
     */
    public function setStatusCode(?string $StatusCode): void
    {
        $this->StatusCode = $StatusCode;
    }
}
