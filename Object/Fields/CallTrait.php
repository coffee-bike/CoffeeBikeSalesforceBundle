<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait CallTrait
{
    /**
     * @var int|null
     */
    protected $CallDurationInSeconds;

    /**
     * @var string|null
     */
    protected $CallType;

    /**
     * @var string|null
     */
    protected $CallDisposition;

    /**
     * @var string|null
     */
    protected $CallObject;

    /**
     * @return int|null
     */
    public function getCallDurationInSeconds(): ?int
    {
        return $this->CallDurationInSeconds;
    }

    /**
     * @param int|null $CallDurationInSeconds
     */
    public function setCallDurationInSeconds(?int $CallDurationInSeconds): void
    {
        $this->CallDurationInSeconds = $CallDurationInSeconds;
    }

    /**
     * @return null|string
     */
    public function getCallType(): ?string
    {
        return $this->CallType;
    }

    /**
     * @param null|string $CallType
     */
    public function setCallType(?string $CallType): void
    {
        $this->CallType = $CallType;
    }

    /**
     * @return null|string
     */
    public function getCallDisposition(): ?string
    {
        return $this->CallDisposition;
    }

    /**
     * @param null|string $CallDisposition
     */
    public function setCallDisposition(?string $CallDisposition): void
    {
        $this->CallDisposition = $CallDisposition;
    }

    /**
     * @return null|string
     */
    public function getCallObject(): ?string
    {
        return $this->CallObject;
    }

    /**
     * @param null|string $CallObject
     */
    public function setCallObject(?string $CallObject): void
    {
        $this->CallObject = $CallObject;
    }
}
