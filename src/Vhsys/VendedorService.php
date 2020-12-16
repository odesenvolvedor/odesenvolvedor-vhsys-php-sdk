<?php

namespace Vhsys;

class VendedorService extends BaseService
{

    public function vendedores(array $params = [])
    {
        return $this->client->get('vendedores', ['query' => $params]);
    }

    public function vendedor($id)
    {
        return $this->client->get("vendedores/{$id}");
    }

    public function cadastrar(\JsonSerializable $params)
    {
        return $this->client->post('vendedores', ['json' => $params]);
    }

    public function atualizar($id, \JsonSerializable $params)
    {
        return $this->client->put("vendedores/{$id}", ['json' => $params]);
    }

    public function excluir($id)
    {
        return $this->client->delete("vendedores/{$id}");
    }

}