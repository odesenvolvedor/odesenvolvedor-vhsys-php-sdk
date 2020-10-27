<?php

namespace Vhsys\Entity;

class Pedido extends AbstractEntity
{
    /**
     * @var int
     */
    protected $id_cliente;
    /**
     * @var string
     */
    protected $nome_cliente;
    /**
     * @var string
     */
    protected $vendedor_pedido;
    /**
     * @var int
     */
    protected $vendedor_pedido_id;
    /**
     * @var float
     */
    protected $desconto_pedido;
    /**
     * @var float
     */
    protected $peso_total_nota;
    /**
     * @var float
     */
    protected $peso_total_nota_liq;
    /**
     * @var float
     */
    protected $frete_pedido;
    /**
     * @var float
     */
    protected $valor_baseICMS;
    /**
     * @var float
     */
    protected $valor_ICMS;
    /**
     * @var float
     */
    protected $valor_baseST;
    /**
     * @var float
     */
    protected $valor_ST;
    /**
     * @var float
     */
    protected $valor_IPI;
    /**
     * @var string
     */
    protected $transportadora_pedido;
    /**
     * @var int
     */
    protected $id_transportadora;
    /**
     * @var date
     */
    protected $data_pedido;
    /**
     * @var int
     */
    protected $prazo_entrega;
    /**
     * @var string
     */
    protected $referencia_pedido;
    /**
     * @var string
     */
    protected $obs_pedido;
    /**
     * @var string
     */
    protected $obs_interno_pedido;
    /**
     * @var string
     */
    protected $status_pedido;
    /**
     * @var array
     */
    protected $parcelas;
    /**
     * @var array
     */
    protected $produtos;

    /**
     * Get the value of id_cliente
     *
     * @return  int
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * Set the value of id_cliente
     *
     * @param  int  $id_cliente
     *
     * @return  self
     */
    public function setIdCliente(int $id_cliente)
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /**
     * Get the value of nome_cliente
     *
     * @return  string
     */
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * Set the value of nome_cliente
     *
     * @param  string  $nome_cliente
     *
     * @return  self
     */
    public function setNomeCliente(string $nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;

        return $this;
    }

    /**
     * Get the value of vendedor_pedido
     *
     * @return  string
     */
    public function getVendedorPedido()
    {
        return $this->vendedor_pedido;
    }

    /**
     * Set the value of vendedor_pedido
     *
     * @param  string  $vendedor_pedido
     *
     * @return  self
     */
    public function setVendedorPedido(string $vendedor_pedido)
    {
        $this->vendedor_pedido = $vendedor_pedido;

        return $this;
    }

    /**
     * Get the value of vendedor_pedido_id
     *
     * @return  int
     */
    public function getVendedorPedidoId()
    {
        return $this->vendedor_pedido_id;
    }

    /**
     * Set the value of vendedor_pedido_id
     *
     * @param  int  $vendedor_pedido_id
     *
     * @return  self
     */
    public function setVendedorPedidoId(int $vendedor_pedido_id)
    {
        $this->vendedor_pedido_id = $vendedor_pedido_id;

        return $this;
    }

    /**
     * Get the value of desconto_pedido
     *
     * @return  float
     */
    public function getDescontoPedido()
    {
        return $this->desconto_pedido;
    }

    /**
     * Set the value of desconto_pedido
     *
     * @param  float  $desconto_pedido
     *
     * @return  self
     */
    public function setDescontoPedido(float $desconto_pedido)
    {
        $this->desconto_pedido = $desconto_pedido;

        return $this;
    }

    /**
     * Get the value of peso_total_nota
     *
     * @return  float
     */
    public function getPesoTotalNota()
    {
        return $this->peso_total_nota;
    }

    /**
     * Set the value of peso_total_nota
     *
     * @param  float  $peso_total_nota
     *
     * @return  self
     */
    public function setPesoTotalNota(float $peso_total_nota)
    {
        $this->peso_total_nota = $peso_total_nota;

        return $this;
    }

    /**
     * Get the value of peso_total_nota_liq
     *
     * @return  float
     */
    public function getPesoTotalNotaLiq()
    {
        return $this->peso_total_nota_liq;
    }

    /**
     * Set the value of peso_total_nota_liq
     *
     * @param  float  $peso_total_nota_liq
     *
     * @return  self
     */
    public function setPesoTotalNotaLiq(float $peso_total_nota_liq)
    {
        $this->peso_total_nota_liq = $peso_total_nota_liq;

        return $this;
    }

    /**
     * Get the value of frete_pedido
     *
     * @return  float
     */
    public function getFretePedido()
    {
        return $this->frete_pedido;
    }

    /**
     * Set the value of frete_pedido
     *
     * @param  float  $frete_pedido
     *
     * @return  self
     */
    public function setFretePedido(float $frete_pedido)
    {
        $this->frete_pedido = $frete_pedido;

        return $this;
    }

    /**
     * Get the value of valor_baseICMS
     *
     * @return  float
     */
    public function getValorBaseICMS()
    {
        return $this->valor_baseICMS;
    }

    /**
     * Set the value of valor_baseICMS
     *
     * @param  float  $valor_baseICMS
     *
     * @return  self
     */
    public function setValorBaseICMS(float $valor_baseICMS)
    {
        $this->valor_baseICMS = $valor_baseICMS;

        return $this;
    }

    /**
     * Get the value of valor_ICMS
     *
     * @return  float
     */
    public function getValorICMS()
    {
        return $this->valor_ICMS;
    }

    /**
     * Set the value of valor_ICMS
     *
     * @param  float  $valor_ICMS
     *
     * @return  self
     */
    public function setValorICMS(float $valor_ICMS)
    {
        $this->valor_ICMS = $valor_ICMS;

        return $this;
    }

    /**
     * Get the value of valor_baseST
     *
     * @return  float
     */
    public function getValorBaseST()
    {
        return $this->valor_baseST;
    }

    /**
     * Set the value of valor_baseST
     *
     * @param  float  $valor_baseST
     *
     * @return  self
     */
    public function setValorBaseST(float $valor_baseST)
    {
        $this->valor_baseST = $valor_baseST;

        return $this;
    }

    /**
     * Get the value of valor_ST
     *
     * @return  float
     */
    public function getValorST()
    {
        return $this->valor_ST;
    }

    /**
     * Set the value of valor_ST
     *
     * @param  float  $valor_ST
     *
     * @return  self
     */
    public function setValorST(float $valor_ST)
    {
        $this->valor_ST = $valor_ST;

        return $this;
    }

    /**
     * Get the value of valor_IPI
     *
     * @return  float
     */
    public function getValorIPI()
    {
        return $this->valor_IPI;
    }

    /**
     * Set the value of valor_IPI
     *
     * @param  float  $valor_IPI
     *
     * @return  self
     */
    public function setValorIPI(float $valor_IPI)
    {
        $this->valor_IPI = $valor_IPI;

        return $this;
    }

    /**
     * Get the value of transportadora_pedido
     *
     * @return  string
     */
    public function getTransportadoraPedido()
    {
        return $this->transportadora_pedido;
    }

    /**
     * Set the value of transportadora_pedido
     *
     * @param  string  $transportadora_pedido
     *
     * @return  self
     */
    public function setTransportadoraPedido(string $transportadora_pedido)
    {
        $this->transportadora_pedido = $transportadora_pedido;

        return $this;
    }

    /**
     * Get the value of id_transportadora
     *
     * @return  int
     */
    public function getIdTransportadora()
    {
        return $this->id_transportadora;
    }

    /**
     * Set the value of id_transportadora
     *
     * @param  int  $id_transportadora
     *
     * @return  self
     */
    public function setIdTransportadora(int $id_transportadora)
    {
        $this->id_transportadora = $id_transportadora;

        return $this;
    }

    /**
     * Get the value of data_pedido
     *
     * @return  string
     */
    public function getDataPedido()
    {
        return $this->data_pedido;
    }

    /**
     * Set the value of data_pedido
     *
     * @param  date  $data_pedido
     *
     * @return  self
     */
    public function setDataPedido(string $data_pedido)
    {
        $this->data_pedido = $data_pedido;

        return $this;
    }

    /**
     * Get the value of prazo_entrega
     *
     * @return  int
     */
    public function getPrazoEntrega()
    {
        return $this->prazo_entrega;
    }

    /**
     * Set the value of prazo_entrega
     *
     * @param  int  $prazo_entrega
     *
     * @return  self
     */
    public function setPrazoEntrega(int $prazo_entrega)
    {
        $this->prazo_entrega = $prazo_entrega;

        return $this;
    }

    /**
     * Get the value of referencia_pedido
     *
     * @return  string
     */
    public function getReferenciaPedido()
    {
        return $this->referencia_pedido;
    }

    /**
     * Set the value of referencia_pedido
     *
     * @param  string  $referencia_pedido
     *
     * @return  self
     */
    public function setReferenciaPedido(string $referencia_pedido)
    {
        $this->referencia_pedido = $referencia_pedido;

        return $this;
    }

    /**
     * Get the value of obs_pedido
     *
     * @return  string
     */
    public function getObsPedido()
    {
        return $this->obs_pedido;
    }

    /**
     * Set the value of obs_pedido
     *
     * @param  string  $obs_pedido
     *
     * @return  self
     */
    public function setObsPedido(string $obs_pedido)
    {
        $this->obs_pedido = $obs_pedido;

        return $this;
    }

    /**
     * Get the value of obs_interno_pedido
     *
     * @return  string
     */
    public function getObsInternoPedido()
    {
        return $this->obs_interno_pedido;
    }

    /**
     * Set the value of obs_interno_pedido
     *
     * @param  string  $obs_interno_pedido
     *
     * @return  self
     */
    public function setObsInternoPedido(string $obs_interno_pedido)
    {
        $this->obs_interno_pedido = $obs_interno_pedido;

        return $this;
    }

    /**
     * Get the value of status_pedido
     *
     * @return  string
     */
    public function getStatusPedido()
    {
        return $this->status_pedido;
    }

    /**
     * Set the value of status_pedido
     *
     * @param  string  $status_pedido
     *
     * @return  self
     */
    public function setStatusPedido(string $status_pedido)
    {
        $this->status_pedido = $status_pedido;

        return $this;
    }

    /**
     * Get the value of produtos
     *
     * @return  array
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * Set the value of produtos
     *
     * @param  array of PedidoProduto  $produtos
     *
     * @return  self
     */
    public function setProdutos(array $produtos)
    {
        $this->produtos = $produtos;

        return $this;
    }

    /**
     * Add product
     *
     * @param  PedidoProduto  $produto
     *
     * @return  self
     */
    public function addProduto(PedidoProduto $produto)
    {
        $this->produtos[] = $produto;

        return $this;
    }

    /**
     * Get the value of parcelas
     *
     * @return  array
     */ 
    public function getParcelas()
    {
        return $this->parcelas;
    }

    /**
     * Set the value of parcelas
     *
     * @param  array  $parcelas
     *
     * @return  self
     */ 
    public function setParcelas(array $parcelas)
    {
        $this->parcelas = $parcelas;

        return $this;
    }

    /**
     * Add parcela
     *
     * @param  PedidoParcela  $parcela
     *
     * @return  self
     */ 
    public function addParcela(PedidoParcela $parcela)
    {
        $this->parcelas = $parcela;

        return $this;
    }
}