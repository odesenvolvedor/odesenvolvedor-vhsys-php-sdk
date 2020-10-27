<?php

namespace Vhsys\Entity;

class PedidoParcela extends AbstractEntity
{
    /**
     * @var string
     */
    protected $data_parcela;
    /**
     * @var float
     */
    protected $valor_parcela;
    /**
     * @var string
     */
    protected $forma_pagamento;
    /**
     * @var string
     */
    protected $observacoes_parcela;

    /**
     * Get the value of data_parcela
     *
     * @return  string
     */ 
    public function getDataParcela()
    {
        return $this->data_parcela;
    }

    /**
     * Set the value of data_parcela
     *
     * @param  string  $data_parcela
     *
     * @return  self
     */ 
    public function setDataParcela(string $data_parcela)
    {
        $this->data_parcela = $data_parcela;

        return $this;
    }

    /**
     * Get the value of valor_parcela
     *
     * @return  float
     */ 
    public function getValorParcela()
    {
        return $this->valor_parcela;
    }

    /**
     * Set the value of valor_parcela
     *
     * @param  float  $valor_parcela
     *
     * @return  self
     */ 
    public function setValorParcela(float $valor_parcela)
    {
        $this->valor_parcela = $valor_parcela;

        return $this;
    }

    /**
     * Get the value of forma_pagamento
     *
     * @return  string
     */ 
    public function getFormaPagamento()
    {
        return $this->forma_pagamento;
    }

    /**
     * Set the value of forma_pagamento
     *
     * @param  string  $forma_pagamento
     *
     * @return  self
     */ 
    public function setFormaPagamento(string $forma_pagamento)
    {
        $this->forma_pagamento = $forma_pagamento;

        return $this;
    }

    /**
     * Get the value of observacoes_parcela
     *
     * @return  string
     */ 
    public function getObservacoesParcela()
    {
        return $this->observacoes_parcela;
    }

    /**
     * Set the value of observacoes_parcela
     *
     * @param  string  $observacoes_parcela
     *
     * @return  self
     */ 
    public function setObservacoesParcela(string $observacoes_parcela)
    {
        $this->observacoes_parcela = $observacoes_parcela;

        return $this;
    }
}