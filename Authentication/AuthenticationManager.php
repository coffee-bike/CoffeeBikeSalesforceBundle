<?php

namespace CoffeeBike\SalesforceBundle\Authentication;

use CoffeeBike\SalesforceBundle\Exception\AuthenticationException;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class AuthenticationManager
{
    const SESSION_CACHE = 'coffeebike_salesforce.session';

    const AUTHENTICATION_URL = 'https://login.salesforce.com/services/oauth2/token';
    const AUTHENTICATION_URL_SANDBOX = 'https://test.salesforce.com/services/oauth2/token';

    /**
     * @var FilesystemCache
     */
    private $cache;

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var string
     */
    private $sandbox;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param Credentials $credentials
     * @param bool        $sandbox
     */
    public function __construct(Credentials $credentials, bool $sandbox)
    {
        $this->cache = new FilesystemCache();
        $this->credentials = $credentials;
        $this->httpClient = new Client();
        $this->sandbox = $sandbox;
        $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
    }

    /**
     * Returns a Session that is used for authorization
     * at the Salesforce REST API.
     *
     * @return Session
     *
     * @throws AuthenticationException
     */
    public function authenticate(): Session
    {
        $session = $this->cache->get(self::SESSION_CACHE);
        if (null === $session) {
            $session = $this->refresh();
        } else {
            /** @var Session $session */
            $session = $this->serializer->deserialize($session, Session::class, 'json');
            if (true === $session->isExpired()) {
                $session = $this->refresh();
            }
        }

        if (true === $this->sandbox) {
            $session = $this->refresh();
        }

        $this->cache->set(self::SESSION_CACHE, $this->serializer->serialize($session, 'json'));

        return $session;
    }

    /**
     * Returns a new Session.
     *
     * @return Session
     *
     * @throws AuthenticationException
     */
    private function refresh(): Session
    {
        $authenticationUrl = true === $this->sandbox ? self::AUTHENTICATION_URL_SANDBOX : self::AUTHENTICATION_URL;

        try {
            $json = json_decode($this->httpClient->post($authenticationUrl, [
                RequestOptions::FORM_PARAMS => [
                    'grant_type' => 'password',
                    'username' => $this->credentials->getUsername(),
                    'password' => $this->credentials->getPassword(),
                    'security_token' => $this->credentials->getSecurityToken(),
                    'client_id' => $this->credentials->getClientId(),
                    'client_secret' => $this->credentials->getClientSecret(),
                ],
            ])->getBody());
        } catch (\Exception $e) {
            throw AuthenticationException::fromException($e);
        }

        $session = new Session();
        $session->setAccessToken($json->access_token);
        $session->setInstanceUrl($json->instance_url);
        $session->setTokenType($json->token_type);

        return $session;
    }
}
