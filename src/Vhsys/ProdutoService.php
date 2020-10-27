<?php

namespace Vhsys;

use Vhsys\Entity\ProdutoEstoque;

class ProdutoService extends BaseService
{
    public function produtos(Array $params = [])
    {
        return $this->client->get('produtos', [ 'query' => $params]);
    }

    public function produto($id)
    {
        return $this->client->get("produtos/{$id}");
    }

    public function cadastrar(\JsonSerializable $params)
    {
        return $this->client->post('produtos', [ 'json' => $params ] );
    }

    public function atualizar($id, \JsonSerializable $params)
    {
        return $this->client->put("produtos/{$id}", [ 'json' => $params ]);
    }

    public function excluir($id)
    {
        return $this->client->delete("produtos/{$id}");
    }

    public function lancarEstoque($id, ProdutoEstoque $params)
    {
        return $this->client->post("produtos/{$id}/estoque", [ 'json' => $params ] );
    }

    public function listarEstoque($id)
    {
        return $this->client->get("produtos/{$id}/estoque");
    }
}