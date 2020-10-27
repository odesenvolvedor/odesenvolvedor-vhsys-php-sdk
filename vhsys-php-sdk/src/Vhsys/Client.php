<?php

namespace Vhsys;

class Client
{
    private $client;

    public function __construct($token, $secretAccessToken)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.vhsys.com/v2/',
            'headers' => [
                'Access-Token' => $token,
                'Secret-Access-Token' => $secretAccessToken,
            ],
        ]);
    }

    public function __call($method, $args)
    {
        if (\count($args) < 1) {
            throw new \InvalidArgumentException(
                'Magic request methods require a URI and optional options array'
            );
        }

        $uri = $args[0];

        $options = $args[1] ?? [];

        return $this->request($method, $uri, $options);
    }

    public function request($method, $uri, $options)
    {
        $method = \strtoupper($method);

        $response = $this->client->request($method, $uri, $options);

        $jsonResponse = \json_decode($response->getBody(), true);

        if (empty($jsonResponse)) {
            return [];
        }

        return $jsonResponse;
    }
}