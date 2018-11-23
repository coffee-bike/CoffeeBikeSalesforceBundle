<?php

namespace CoffeeBike\SalesforceBundle\Http;

use CoffeeBike\SalesforceBundle\Authentication\AuthenticationManager;
use CoffeeBike\SalesforceBundle\Exception\AuthenticationException;
use CoffeeBike\SalesforceBundle\Exception\ObjectNotFoundException;
use CoffeeBike\SalesforceBundle\Object\AbstractObject;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class SalesforceHttpClient
{
    /**
     * @var string
     */
    private $apiVersion;

    /**
     * @var AuthenticationManager
     */
    private $authenticationManager;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @param AuthenticationManager $authenticationManager
     * @param string                $apiVersion
     */
    public function __construct(AuthenticationManager $authenticationManager, string $apiVersion)
    {
        $this->apiVersion = $apiVersion;
        $this->authenticationManager = $authenticationManager;
        $this->httpClient = new Client();
    }

    /**
     * @param string         $uri
     * @param string         $method
     * @param AbstractObject $object
     *
     * @return object
     *
     * @throws AuthenticationException
     */
    public function request(string $uri, string $method, AbstractObject $object)
    {
        $session = $this->authenticationManager->authenticate();
        $url = $session->getInstanceUrl().'/services/data/'.$this->apiVersion.'/'.$uri;

        $options = [
            RequestOptions::HEADERS => [
                'Authorization' => $session->getTokenType().' '.$session->getAccessToken(),
            ],
        ];

        if (in_array($method, [Request::METHOD_PATCH, Request::METHOD_POST])) {
            $options[RequestOptions::HEADERS]['Content-Type'] = 'application/json';
            $options[RequestOptions::JSON] = $object->toArray($object->getWriteProtectedFields());
        }

        try {
            return json_decode($this->httpClient->request($method, $url, $options)->getBody()->getContents());
        } catch (ClientException $exception) {
            switch ($exception->getCode()) {
                case 404: throw ObjectNotFoundException::fromAbstractObject($object);
                default: throw $exception;
            }
        }
    }
}
