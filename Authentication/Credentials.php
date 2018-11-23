<?php

namespace CoffeeBike\SalesforceBundle\Authentication;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Credentials
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $securityToken;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @param string $username
     * @param string $password
     * @param string $securityToken
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(
        string $username,
        string $password,
        string $securityToken,
        string $clientId,
        string $clientSecret
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->securityToken = $securityToken;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSecurityToken(): string
    {
        return $this->securityToken;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
}
