<?php

namespace CoffeeBike\SalesforceBundle\Object\Fields;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait ConvertedTrait
{
    /**
     * @var bool
     */
    protected $IsConverted;

    /**
     * @var string|null
     */
    protected $ConvertedDate;

    /**
     * @var string|null
     */
    protected $ConvertedAccountId;

    /**
     * @var string|null
     */
    protected $ConvertedContactId;

    /**
     * @var string|null
     */
    protected $ConvertedOpportunityId;

    /**
     * @return bool
     */
    public function isConverted(): bool
    {
        return $this->IsConverted;
    }

    /**
     * @param bool $IsConverted
     */
    public function setIsConverted(bool $IsConverted): void
    {
        $this->IsConverted = $IsConverted;
    }

    /**
     * @return string|null
     */
    public function getConvertedDate(): ?string
    {
        return $this->ConvertedDate;
    }

    /**
     * @param string|null $ConvertedDate
     */
    public function setConvertedDate(?string $ConvertedDate): void
    {
        $this->ConvertedDate = $ConvertedDate;
    }

    /**
     * @return string|null
     */
    public function getConvertedAccountId(): ?string
    {
        return $this->ConvertedAccountId;
    }

    /**
     * @param string|null $ConvertedAccountId
     */
    public function setConvertedAccountId(?string $ConvertedAccountId): void
    {
        $this->ConvertedAccountId = $ConvertedAccountId;
    }

    /**
     * @return string|null
     */
    public function getConvertedContactId(): ?string
    {
        return $this->ConvertedContactId;
    }

    /**
     * @param string|null $ConvertedContactId
     */
    public function setConvertedContactId(?string $ConvertedContactId): void
    {
        $this->ConvertedContactId = $ConvertedContactId;
    }

    /**
     * @return string|null
     */
    public function getConvertedOpportunityId(): ?string
    {
        return $this->ConvertedOpportunityId;
    }

    /**
     * @param string|null $ConvertedOpportunityId
     */
    public function setConvertedOpportunityId(?string $ConvertedOpportunityId): void
    {
        $this->ConvertedOpportunityId = $ConvertedOpportunityId;
    }
}
