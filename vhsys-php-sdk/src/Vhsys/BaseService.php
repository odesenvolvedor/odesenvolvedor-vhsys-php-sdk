<?php

namespace Vhsys;

use Vhsys\Client;

abstract class BaseService
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}