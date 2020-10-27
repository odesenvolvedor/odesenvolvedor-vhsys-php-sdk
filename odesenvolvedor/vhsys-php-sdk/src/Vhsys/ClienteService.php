<?php

namespace Vhsys;

class ClienteService extends BaseService
{

    public function clientes(array $params = [])
    {
        return $this->client->get('clientes', ['query' => $params]);
    }

    public function cliente($id)
    {
        return $this->client->get("clientes/{$id}");
    }

    public function cadastrar(\JsonSerializable $params)
    {
        return $this->client->post('clientes', ['json' => $params]);
    }

    public function atualizar($id, \JsonSerializable $params)
    {
        return $this->client->put("clientes/{$id}", ['json' => $params]);
    }

    public function excluir($id)
    {
        return $this->client->delete("clientes/{$id}");
    }

}