<?php

namespace Vhsys;

class PedidoService extends BaseService
{

    public function pedidos(Array $params = [])
    {
        return $this->client->get('pedidos', [ 'query' => $params]);
    }

    public function pedido($idPed)
    {
        return $this->client->get("pedidos/{$idPed}");
    }

    public function cadastrar(\JsonSerializable $params)
    {
        return $this->client->post('pedidos', [ 'json' => $params ] );
    }

    public function atualizar($idPed, \JsonSerializable $params)
    {
        return $this->client->put("pedidos/{$idPed}", [ 'json' => $params ]);
    }

    public function excluir($idPed)
    {
        return $this->client->delete("pedidos/{$idPed}");
    }

    public function cadastrarParcelas($idPed, array $params)
    {
        return $this->client->post("pedidos/{$idPed}/parcelas", [ 'json' => $params ] );
    }

    public function cadastrarProduto($idPed, array $params)
    {
        return $this->client->post("pedidos/{$idPed}/produtos", [ 'json' => $params ] );
    }

    public function alterarProduto($idPed, $produtoId, \JsonSerializable $params)
    {
        return $this->client->put("pedidos/{$idPed}/produtos/$produtoId", [ 'json' => $params ] );
    }

    public function excluirProduto($idPed, $produtoId)
    {
        return $this->client->delete("pedidos/{$idPed}/produtos/$produtoId");
    }
}