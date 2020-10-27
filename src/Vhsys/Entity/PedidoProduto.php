<?php

namespace Vhsys\Entity;

class PedidoProduto extends AbstractEntity
{
    /**
     * @var int
     */
    protected $id_produto;
    /**
     * @var string
     */
    protected $desc_produto;
    /**
     * @var int
     */
    protected $qtde_produto;
    /**
     * @var float
     */
    protected $desconto_produto;
    /**
     * @var float
     */
    protected $ipi_produto;
    /**
     * @var float
     */
    protected $icms_produto;
    /**
     * @var float
     */
    protected $valor_custo_produto;
    /**
     * @var float
     */
    protected $valor_unit_produto;
    /**
     * @var float
     */
    protected $peso_produto;
    /**
     * @var float
     */
    protected $peso_liq_produto;

    /**
     * Get the value of id_produto
     *
     * @return  int
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * Set the value of id_produto
     *
     * @param  int  $id_produto
     *
     * @return  self
     */
    public function setIdProduto(int $id_produto)
    {
        $this->id_produto = $id_produto;

        return $this;
    }

    /**
     * Get the value of desc_produto
     *
     * @return  string
     */
    public function getDescProduto()
    {
        return $this->desc_produto;
    }

    /**
     * Set the value of desc_produto
     *
     * @param  string  $desc_produto
     *
     * @return  self
     */
    public function setDescProduto(string $desc_produto)
    {
        $this->desc_produto = $desc_produto;

        return $this;
    }

    /**
     * Get the value of qtde_produto
     *
     * @return  int
     */
    public function getQtdeProduto()
    {
        return $this->qtde_produto;
    }

    /**
     * Set the value of qtde_produto
     *
     * @param  int  $qtde_produto
     *
     * @return  self
     */
    public function setQtdeProduto(int $qtde_produto)
    {
        $this->qtde_produto = $qtde_produto;

        return $this;
    }

    /**
     * Get the value of desconto_produto
     *
     * @return  float
     */
    public function getDescontoProduto()
    {
        return $this->desconto_produto;
    }

    /**
     * Set the value of desconto_produto
     *
     * @param  float  $desconto_produto
     *
     * @return  self
     */
    public function setDescontoProduto(float $desconto_produto)
    {
        $this->desconto_produto = $desconto_produto;

        return $this;
    }

    /**
     * Get the value of ipi_produto
     *
     * @return  float
     */
    public function getIpiProduto()
    {
        return $this->ipi_produto;
    }

    /**
     * Set the value of ipi_produto
     *
     * @param  float  $ipi_produto
     *
     * @return  self
     */
    public function setIpiProduto(float $ipi_produto)
    {
        $this->ipi_produto = $ipi_produto;

        return $this;
    }

    /**
     * Get the value of icms_produto
     *
     * @return  float
     */
    public function getIcmsProduto()
    {
        return $this->icms_produto;
    }

    /**
     * Set the value of icms_produto
     *
     * @param  float  $icms_produto
     *
     * @return  self
     */
    public function setIcmsProduto(float $icms_produto)
    {
        $this->icms_produto = $icms_produto;

        return $this;
    }

    /**
     * Get the value of valor_custo_produto
     *
     * @return  float
     */
    public function getValorCustoProduto()
    {
        return $this->valor_custo_produto;
    }

    /**
     * Set the value of valor_custo_produto
     *
     * @param  float  $valor_custo_produto
     *
     * @return  self
     */
    public function setValorCustoProduto(float $valor_custo_produto)
    {
        $this->valor_custo_produto = $valor_custo_produto;

        return $this;
    }

    /**
     * Get the value of valor_unit_produto
     *
     * @return  float
     */
    public function getValorUnitProduto()
    {
        return $this->valor_unit_produto;
    }

    /**
     * Set the value of valor_unit_produto
     *
     * @param  float  $valor_unit_produto
     *
     * @return  self
     */
    public function setValorUnitProduto(float $valor_unit_produto)
    {
        $this->valor_unit_produto = $valor_unit_produto;

        return $this;
    }

    /**
     * Get the value of peso_produto
     *
     * @return  float
     */
    public function getPesoProduto()
    {
        return $this->peso_produto;
    }

    /**
     * Set the value of peso_produto
     *
     * @param  float  $peso_produto
     *
     * @return  self
     */
    public function setPesoProduto(float $peso_produto)
    {
        $this->peso_produto = $peso_produto;

        return $this;
    }

    /**
     * Get the value of peso_liq_produto
     *
     * @return  float
     */
    public function getPesoLiqProduto()
    {
        return $this->peso_liq_produto;
    }

    /**
     * Set the value of peso_liq_produto
     *
     * @param  float  $peso_liq_produto
     *
     * @return  self
     */
    public function setPesoLiqProduto(float $peso_liq_produto)
    {
        $this->peso_liq_produto = $peso_liq_produto;

        return $this;
    }
}