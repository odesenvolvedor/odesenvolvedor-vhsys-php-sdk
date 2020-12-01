<?php

namespace Vhsys\Entity;

class ProdutoEstoque extends AbstractEntity
{
    /**
     * @var string
     */
    protected $tipo_estoque;
    /**
     * @var float
     */
    protected $qtde_estoque;
    /**
     * @var float
     */
    protected $valor_estoque;
    /**
     * @var string
     */
    protected $obs_estoque;
    /**
    * @var string
    */
    protected $identificacao;
    
    /**
     * Get the value of tipo_estoque
     *
     * @return  string
     */ 
    public function getTipoEstoque()
    {
        return $this->tipo_estoque;
    }

    /**
     * Set the value of tipo_estoque
     *
     * @param  string  $tipo_estoque
     *
     * @return  self
     */ 
    public function setTipoEstoque(string $tipo_estoque)
    {
        $this->tipo_estoque = $tipo_estoque;

        return $this;
    }

    /**
     * Get the value of qtde_estoque
     *
     * @return  float
     */ 
    public function getQtdeEstoque()
    {
        return $this->qtde_estoque;
    }

    /**
     * Set the value of qtde_estoque
     *
     * @param  float  $qtde_estoque
     *
     * @return  self
     */ 
    public function setQtdeEstoque(float $qtde_estoque)
    {
        $this->qtde_estoque = $qtde_estoque;

        return $this;
    }

    /**
     * Get the value of valor_estoque
     *
     * @return  float
     */ 
    public function getValorEstoque()
    {
        return $this->valor_estoque;
    }

    /**
     * Set the value of valor_estoque
     *
     * @param  float  $valor_estoque
     *
     * @return  self
     */ 
    public function setValorEstoque(float $valor_estoque)
    {
        $this->valor_estoque = $valor_estoque;

        return $this;
    }

    /**
     * Get the value of obs_estoque
     *
     * @return  string
     */ 
    public function getObsEstoque()
    {
        return $this->obs_estoque;
    }

    /**
     * Set the value of obs_estoque
     *
     * @param  string  $obs_estoque
     *
     * @return  self
     */ 
    public function setObsEstoque(string $obs_estoque)
    {
        $this->obs_estoque = $obs_estoque;

        return $this;
    }

    /**
     * Get the value of identificacao
     *
     * @return  string
     */ 
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * Set the value of identificacao
     *
     * @param  string  $identificacao
     *
     * @return  self
     */ 
    public function setIdentificacao(string $identificacao)
    {
        $exp = \explode('_', $identificacao);

        if ($exp[0] != 'Ped') {
            $identificacao = 'Ped_' . $identificacao;
        }

        $this->identificacao = $identificacao;

        return $this;
    }
}