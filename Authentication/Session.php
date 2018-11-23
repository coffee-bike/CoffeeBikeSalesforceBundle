<?php

namespace CoffeeBike\SalesforceBundle\Authentication;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Session
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $instanceUrl;

    /**
     * @var string
     */
    private $tokenType;

    /**
     * @var string
     */
    private $created;

    public function __construct()
    {
        $this->created = date('c');
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getInstanceUrl(): string
    {
        return $this->instanceUrl;
    }

    /**
     * @param string $instanceUrl
     */
    public function setInstanceUrl(string $instanceUrl): void
    {
        $this->instanceUrl = $instanceUrl;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType(string $tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated(string $created): void
    {
        $this->created = $created;
    }

    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return (new \DateTime($this->created))->diff(new \DateTime())->h > 2;
    }
}
