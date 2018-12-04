<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait EmailBouncedTrait
{
    /**
     * @var string|null
     */
    protected $EmailBouncedReason;

    /**
     * @var string|null
     */
    protected $EmailBouncedDate;

    /**
     * @return string|null
     */
    public function getEmailBouncedReason(): ?string
    {
        return $this->EmailBouncedReason;
    }

    /**
     * @param string|null $EmailBouncedReason
     */
    public function setEmailBouncedReason(?string $EmailBouncedReason): void
    {
        $this->EmailBouncedReason = $EmailBouncedReason;
    }

    /**
     * @return string|null
     */
    public function getEmailBouncedDate(): ?string
    {
        return $this->EmailBouncedDate;
    }

    /**
     * @param string|null $EmailBouncedDate
     */
    public function setEmailBouncedDate(?string $EmailBouncedDate): void
    {
        $this->EmailBouncedDate = $EmailBouncedDate;
    }
}
