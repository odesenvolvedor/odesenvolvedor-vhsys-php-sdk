<?php

namespace Vhsys;

use Vhsys\Client;
use Vhsys\ClienteService;
use Vhsys\ProdutoService;
use Vhsys\PedidoService;


class Vhsys
{

    /**
     * @var Client
     */
    protected $client;

    public function __construct($token, $secretAccessToken)
    {
        $this->client = new Client($token, $secretAccessToken);
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function clientes(): ClienteService
    {
        return new ClienteService($this->client);
    }

    public function pedidos(): PedidoService
    {
        return new PedidoService($this->client);
    }

    public function produtos(): ProdutoService
    {
        return new ProdutoService($this->client);
    }
}