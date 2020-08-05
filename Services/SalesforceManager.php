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
use Circle\RestClientBundle\Services\Curl;
use Circle\RestClientBundle\Services\CurlOptionsHandler;
use Circle\RestClientBundle\Services\RestClient;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SalesforceManager
{
    /**
     * @var RestClient
     */
    private $rest;
    private $credentials;
    private $session;

    /**
     * SalesforceManager constructor.
     *
     * @param            $instance
     * @param            $username
     * @param            $password
     * @param            $token
     *
     * @internal param RestClient $client
     */
    public function __construct($username, $password, $token, $client_id, $client_secret, $sandbox)
    {
        $this->rest = new RestClient(
            new Curl(
                new CurlOptionsHandler(array()
                )
            )
        );
        $this->credentials = array(
            'username' => $username,
            'password' => $password,
            'token' => $token,
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'sandbox' => $sandbox,
        );
    }

    public function updateRecord($model, $id, array $update)
    {
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
    
    public function delete($model, $id)
    {
        return $this->request(sprintf('sobjects/%s/%s', $model, $id), 'DELETE');
    }

    public function addBatch($model, array $data)
    {
        return $this->sendBatch(sprintf($model), 'POST', null, $data);
    }

    public function getApiLimit()
    {
        return $this->request('limits', 'GET')->DailyApiRequests;
    }

    public function query($query)
    {
        $uri = 'query?q=' . urlencode($query);

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
    public function request($uri, $method, array $parameters = null, array $payload = null)
    {
        if ($this->session == null) {
            $this->session = $this->authenticate();
        }

        $uri = $this->session->instance_url . '/services/data/v39.0/' . $uri;
        $header = array(CURLOPT_HTTPHEADER => ['Authorization: ' . $this->session->token_type . ' ' . $this->session->access_token]);

        switch ($method) {
            case 'GET':
                $response = $this->rest->get($uri, $header);
                break;
            case 'DELETE':
                $response = $this->rest->delete($uri, $header);
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
        // default url for live salesforce
        $url = 'https://login.salesforce.com/services/oauth2/token';
        // Check if Sandbox is set true in credentials
        if ($this->credentials['sandbox']) {
            // sandbox url for salesforce
            $url = 'https://test.salesforce.com/services/oauth2/token';
        }

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
    /**
     * Requests recursively the wanted resource
     *
     * @param $uri
     * @param $method
     * @param null $parameters
     * @param array|null $payload
     */
    public function queryAll($uri, $method, $parameters = null, array $payload = null, $initial = true, $resultOfAll = NULL) {
        // If Initial
        if ($initial) {
            // Make a query, since this is based from a query
            $resultOfAll = array();
            $result = $this->query($uri, 'GET');
        } else {
            // ELSE make a regular request
            $result = $this->request($uri, $method, $parameters, $payload);
        }
        if (isset($result->nextRecordsUrl)) {
            $urlArray = explode('/',$result->nextRecordsUrl);
            $nextRecordsQuery = "query/" . $urlArray[sizeof($urlArray) - 1];
            // GET NEXT RECORDS RECURSIVELY
            $res = $this->queryAll($nextRecordsQuery, $method, $parameters,$payload, false, $resultOfAll);
            $resultOfAll = array_merge($res, $result->records);
        } else {
            $resultOfAll = $result->records;
        }
        // Return the array
        return $resultOfAll;
    }

    /**
     * Sends a request to salesforce
     * Provided are the URI, method, parameters and the payload
     * the payload needs to have the following structure:
     *  {
     * "attributes":{
     * "type":"Case",
     * "referenceId":"ref1"
     * },
     * "OwnerId":"ID",
     * "Type":"TYPE",
     * "Origin":"ORIGIN",
     * "AccountId":"ID",
     * "Description":"DESCRIPTION",
     * "Subject":"Text"
     * },
     * {
     * "attributes":{
     * "type":"Case",
     * "referenceId":"ref2"
     * },
     * "OwnerId":"ID",
     * "Type":"TYPE",
     * "Origin":"ORIGIN",
     * "AccountId":"ID",
     * "Description":"DESCRIPTION",
     * "Subject":"Text"
     * }
     *  important is that the attributes (type AND referenceId necessary)
     *
     *
     * @param            $uri
     * @param            $method
     * @param array|null $parameters
     * @param array|null $payload
     *
     * @return mixed
     * @throws \Exception
     */
    private function sendBatch($uri, $method, array $parameters = null, array $payload = null)
    {
        if ($this->session == null) {
            $this->session = $this->authenticate();
        }
        $uri = $this->session->instance_url . '/services/data/v39.0/composite/tree/'.$uri;

        $header = array(CURLOPT_HTTPHEADER => ['Authorization: ' . $this->session->token_type . ' ' . $this->session->access_token]);

        $header[CURLOPT_HTTPHEADER][] = 'Content-Type: application/json';
        $header[CURLOPT_POST] = true;

        $encodedPayload = substr_replace(json_encode($payload), "{\"records\":", 0,0);
        $encodedPayload .= "}";

        $response = $this->rest->post($uri, $encodedPayload, $header);

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

}
