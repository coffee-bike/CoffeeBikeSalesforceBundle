<?php

/**
 * PROJECT: CoffeeBikeSalesforceRESTBundle
 *
 * IDE: IntelliJ IDEA
 * User: dambacher
 * Date: 15.02.17
 * Time: 16:27
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\SalesforceRESTBundle\Services;

use Circle\RestClientBundle\Exceptions\CurlException;
use Circle\RestClientBundle\Services\RestClient;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SalesforceManager
{
    const AUTHENTICATION_URL = 'https://login.salesforce.com/services/oauth2/token';
    const SANDBOX_AUTHENTICATION_URL = 'https://test.salesforce.com/services/oauth2/token';

    /**
     * @var RestClient
     */
    private $rest;
    private $credentials;

    /**
     * @var bool
     */
    private $sandbox;

    /**
     * @param RestClient $restClient
     * @param $username
     * @param $password
     * @param $token
     * @param $client_id
     * @param $client_secret
     * @param bool $sandbox
     */
    public function __construct(RestClient $restClient, $username, $password, $token, $client_id, $client_secret, $sandbox = false)
    {
        $this->rest = $restClient;
        $this->credentials = array(
            'username' => $username,
            'password' => $password,
            'token' => $token,
            'client_id' => $client_id,
            'client_secret' => $client_secret,
        );
        $this->sandbox = $sandbox;
    }

    public function updateRecord($model, $id, array $update) {
        $uri = sprintf('sobjects/%s/%s', $model, $id);

        return $this->request($uri, 'PATCH', null, $update);
    }

    public function findBy($model, array $fields, array $where = null)
    {
        $fields = implode(", ", $fields);

        if ($where) {
            $strWhere = '';
            foreach ($where as $key => $value) {
                $strWhere .= $key . "='" . $value . "'";
            }
            $query = sprintf('SELECT %s FROM %s WHERE %s', $fields, $model, $strWhere);
        } else {
            $query = sprintf('SELECT %s FROM %s', $fields, $model);
        }

        return $this->query($query);
    }

    public function find($model, $id)
    {
        return $this->request(sprintf('sobjects/%s/%s', $model, $id), 'GET');
    }

    public function add($model, $data)
    {
        return $this->request(sprintf('sobjects/%s', $model), 'POST', null, $data);
    }

    public function getApiLimit()
    {
        return $this->request('limits', 'GET')->DailyApiRequests;
    }

    public function query($query)
    {
        $uri = 'query?q='.urlencode($query);

        return $this->request($uri, 'GET');
    }

    /**
     * Send requests to Salesforce
     *
     * @param            $uri
     * @param            $method
     * @param array|null $parameters
     * @param array|null $payload
     *
     * @return mixed
     */
    public function request($uri, $method, array $parameters = null, array $payload = null) {
        $session = $this->authenticate();

        $uri = $session->instance_url.'/services/data/v39.0/'.$uri;
        $header = array(CURLOPT_HTTPHEADER => ['Authorization: '.$session->token_type.' '.$session->access_token]);

        switch ($method) {
            case 'GET':
                $response = $this->rest->get($uri, $header);
                break;
            case 'PATCH':
                $header[CURLOPT_HTTPHEADER][] = 'Content-Type: application/json';
                $response = $this->rest->patch($uri, json_encode($payload), $header);
                break;
            case "POST":
                $header[CURLOPT_HTTPHEADER][] = 'Content-Type: application/json';
                $header[CURLOPT_POST] = true;
                $response = $this->rest->post($uri, json_encode($payload), $header);
                break;
        }

        if (isset($response) && ($response->getStatusCode() == 200 || $response->getStatusCode() == 204 || $response->getStatusCode() == 201)) {
            return json_decode($response->getContent());
        } else {
            $error = json_decode($response->getContent())[0];
            throw new \Exception(
                sprintf('Error %s: %s', $error->errorCode, $error->message),
                $response->getStatusCode()
            );
        }
    }

    private function authenticate()
    {
        $url = $this->sandbox ? self::SANDBOX_AUTHENTICATION_URL : self::AUTHENTICATION_URL;

        try {
            $response = $this->rest->post(
                $url,
                sprintf(
                    'grant_type=password&client_id=%s&client_secret=%s&username=%s&password=%s%s',
                    $this->credentials['client_id'],
                    $this->credentials['client_secret'],
                    $this->credentials['username'],
                    $this->credentials['password'],
                    $this->credentials['token']
                ),
                array(CURLOPT_HEADER => true)
            );
        } catch (CurlException $e) {
            throw new AuthenticationException("Couldn't authenticate at Salesforce. Please check your credentials!");
        }

        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getContent());

            return $json;
        } else {
            throw new AuthenticationException("Couldn't authenticate at Salesforce. Please check your credentials!");
        }

    }
}