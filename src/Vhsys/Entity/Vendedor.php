<?php

namespace Vhsys\Entity;

class Vendedor extends AbstractEntity
{
    /**
     * @var String $bairroVendedor
    */
    protected $bairroVendedor;
    /**
     * @var String $bancoAgencia
    */
    protected $bancoAgencia;
    /**
     * @var String $bancoConta
    */
    protected $bancoConta;
    /**
     * @var String $bancoSalario
    */
    protected $bancoSalario;
    /**
     * @var String $bancoVendedor
    */
    protected $bancoVendedor;
    /**
     * @var String $celularVendedor
    */
    protected $celularVendedor;
    /**
     * @var String $cepVendedor
    */
    protected $cepVendedor;
    /**
     * @var String $cidadeVendedor
    */
    protected $cidadeVendedor;
    /**
     * @var String $cnpjVendedor
    */
    protected $cnpjVendedor;
    /**
     * @var String $comissaoRegra
    */
    protected $comissaoRegra;
    /**
     * @var String $comissaoUsuario
    */
    protected $comissaoUsuario;
    /**
     * @var String $complementoVendedor
    */
    protected $complementoVendedor;
    /**
     * @var String $contatoVendedor
    */
    protected $contatoVendedor;
    /**
     * @var String $emailVendedor
    */
    protected $emailVendedor;
    /**
     * @var String $enderecoVendedor
    */
    protected $enderecoVendedor;
    /**
     * @var String $fantasiaVendedor
    */
    protected $fantasiaVendedor;
    /**
     * @var String $foneRamalVendedor
    */
    protected $foneRamalVendedor;
    /**
     * @var String $foneVendedor
    */
    protected $foneVendedor;
    /**
     * @var String $numeroVendedor
    */
    protected $numeroVendedor;
    /**
     * @var String $observacoesVendedor
    */
    protected $observacoesVendedor;
    /**
     * @var String $razaoVendedor
    */
    protected $razaoVendedor;
    /**
     * @var String $situacaoVendedor
    */
    protected $situacaoVendedor;
    /**
     * @var String $tipoPessoa
    */
    protected $tipoPessoa;
    /**
     * @var String $ufVendedor
    */
    protected $ufVendedor;
    /**
     * @var String $websiteVendedor
    */
    protected $websiteVendedor;
        

    /**
     * Get $bairroVendedor
     *
     * @return  String
     */ 
    public function getBairroVendedor()
    {
        return $this->bairroVendedor;
    }

    /**
     * Set $bairroVendedor
     *
     * @param  String  $bairroVendedor  $bairroVendedor
     *
     * @return  self
     */ 
    public function setBairroVendedor(String $bairroVendedor)
    {
        $this->bairroVendedor = $bairroVendedor;

        return $this;
    }

    /**
     * Get $bancoAgencia
     *
     * @return  String
     */ 
    public function getBancoAgencia()
    {
        return $this->bancoAgencia;
    }

    /**
     * Set $bancoAgencia
     *
     * @param  String  $bancoAgencia  $bancoAgencia
     *
     * @return  self
     */ 
    public function setBancoAgencia(String $bancoAgencia)
    {
        $this->bancoAgencia = $bancoAgencia;

        return $this;
    }

    /**
     * Get $bancoConta
     *
     * @return  String
     */ 
    public function getBancoConta()
    {
        return $this->bancoConta;
    }

    /**
     * Set $bancoConta
     *
     * @param  String  $bancoConta  $bancoConta
     *
     * @return  self
     */ 
    public function setBancoConta(String $bancoConta)
    {
        $this->bancoConta = $bancoConta;

        return $this;
    }

    /**
     * Get $bancoSalario
     *
     * @return  String
     */ 
    public function getBancoSalario()
    {
        return $this->bancoSalario;
    }

    /**
     * Set $bancoSalario
     *
     * @param  String  $bancoSalario  $bancoSalario
     *
     * @return  self
     */ 
    public function setBancoSalario(String $bancoSalario)
    {
        $this->bancoSalario = $bancoSalario;

        return $this;
    }

    /**
     * Get $bancoVendedor
     *
     * @return  String
     */ 
    public function getBancoVendedor()
    {
        return $this->bancoVendedor;
    }

    /**
     * Set $bancoVendedor
     *
     * @param  String  $bancoVendedor  $bancoVendedor
     *
     * @return  self
     */ 
    public function setBancoVendedor(String $bancoVendedor)
    {
        $this->bancoVendedor = $bancoVendedor;

        return $this;
    }

    /**
     * Get $celularVendedor
     *
     * @return  String
     */ 
    public function getCelularVendedor()
    {
        return $this->celularVendedor;
    }

    /**
     * Set $celularVendedor
     *
     * @param  String  $celularVendedor  $celularVendedor
     *
     * @return  self
     */ 
    public function setCelularVendedor(String $celularVendedor)
    {
        $this->celularVendedor = $celularVendedor;

        return $this;
    }

    /**
     * Get $cepVendedor
     *
     * @return  String
     */ 
    public function getCepVendedor()
    {
        return $this->cepVendedor;
    }

    /**
     * Set $cepVendedor
     *
     * @param  String  $cepVendedor  $cepVendedor
     *
     * @return  self
     */ 
    public function setCepVendedor(String $cepVendedor)
    {
        $this->cepVendedor = $cepVendedor;

        return $this;
    }

    /**
     * Get $cidadeVendedor
     *
     * @return  String
     */ 
    public function getCidadeVendedor()
    {
        return $this->cidadeVendedor;
    }

    /**
     * Set $cidadeVendedor
     *
     * @param  String  $cidadeVendedor  $cidadeVendedor
     *
     * @return  self
     */ 
    public function setCidadeVendedor(String $cidadeVendedor)
    {
        $this->cidadeVendedor = $cidadeVendedor;

        return $this;
    }

    /**
     * Get $cnpjVendedor
     *
     * @return  String
     */ 
    public function getCnpjVendedor()
    {
        return $this->cnpjVendedor;
    }

    /**
     * Set $cnpjVendedor
     *
     * @param  String  $cnpjVendedor  $cnpjVendedor
     *
     * @return  self
     */ 
    public function setCnpjVendedor(String $cnpjVendedor)
    {
        $this->cnpjVendedor = $cnpjVendedor;

        return $this;
    }

    /**
     * Get $comissaoRegra
     *
     * @return  String
     */ 
    public function getComissaoRegra()
    {
        return $this->comissaoRegra;
    }

    /**
     * Set $comissaoRegra
     *
     * @param  String  $comissaoRegra  $comissaoRegra
     *
     * @return  self
     */ 
    public function setComissaoRegra(String $comissaoRegra)
    {
        $this->comissaoRegra = $comissaoRegra;

        return $this;
    }

    /**
     * Get $comissaoUsuario
     *
     * @return  String
     */ 
    public function getComissaoUsuario()
    {
        return $this->comissaoUsuario;
    }

    /**
     * Set $comissaoUsuario
     *
     * @param  String  $comissaoUsuario  $comissaoUsuario
     *
     * @return  self
     */ 
    public function setComissaoUsuario(String $comissaoUsuario)
    {
        $this->comissaoUsuario = $comissaoUsuario;

        return $this;
    }

    /**
     * Get $complementoVendedor
     *
     * @return  String
     */ 
    public function getComplementoVendedor()
    {
        return $this->complementoVendedor;
    }

    /**
     * Set $complementoVendedor
     *
     * @param  String  $complementoVendedor  $complementoVendedor
     *
     * @return  self
     */ 
    public function setComplementoVendedor(String $complementoVendedor)
    {
        $this->complementoVendedor = $complementoVendedor;

        return $this;
    }

    /**
     * Get $contatoVendedor
     *
     * @return  String
     */ 
    public function getContatoVendedor()
    {
        return $this->contatoVendedor;
    }

    /**
     * Set $contatoVendedor
     *
     * @param  String  $contatoVendedor  $contatoVendedor
     *
     * @return  self
     */ 
    public function setContatoVendedor(String $contatoVendedor)
    {
        $this->contatoVendedor = $contatoVendedor;

        return $this;
    }

    /**
     * Get $emailVendedor
     *
     * @return  String
     */ 
    public function getEmailVendedor()
    {
        return $this->emailVendedor;
    }

    /**
     * Set $emailVendedor
     *
     * @param  String  $emailVendedor  $emailVendedor
     *
     * @return  self
     */ 
    public function setEmailVendedor(String $emailVendedor)
    {
        $this->emailVendedor = $emailVendedor;

        return $this;
    }

    /**
     * Get $enderecoVendedor
     *
     * @return  String
     */ 
    public function getEnderecoVendedor()
    {
        return $this->enderecoVendedor;
    }

    /**
     * Set $enderecoVendedor
     *
     * @param  String  $enderecoVendedor  $enderecoVendedor
     *
     * @return  self
     */ 
    public function setEnderecoVendedor(String $enderecoVendedor)
    {
        $this->enderecoVendedor = $enderecoVendedor;

        return $this;
    }

    /**
     * Get $fantasiaVendedor
     *
     * @return  String
     */ 
    public function getFantasiaVendedor()
    {
        return $this->fantasiaVendedor;
    }

    /**
     * Set $fantasiaVendedor
     *
     * @param  String  $fantasiaVendedor  $fantasiaVendedor
     *
     * @return  self
     */ 
    public function setFantasiaVendedor(String $fantasiaVendedor)
    {
        $this->fantasiaVendedor = $fantasiaVendedor;

        return $this;
    }

    /**
     * Get $foneRamalVendedor
     *
     * @return  String
     */ 
    public function getFoneRamalVendedor()
    {
        return $this->foneRamalVendedor;
    }

    /**
     * Set $foneRamalVendedor
     *
     * @param  String  $foneRamalVendedor  $foneRamalVendedor
     *
     * @return  self
     */ 
    public function setFoneRamalVendedor(String $foneRamalVendedor)
    {
        $this->foneRamalVendedor = $foneRamalVendedor;

        return $this;
    }

    /**
     * Get $foneVendedor
     *
     * @return  String
     */ 
    public function getFoneVendedor()
    {
        return $this->foneVendedor;
    }

    /**
     * Set $foneVendedor
     *
     * @param  String  $foneVendedor  $foneVendedor
     *
     * @return  self
     */ 
    public function setFoneVendedor(String $foneVendedor)
    {
        $this->foneVendedor = $foneVendedor;

        return $this;
    }

    /**
     * Get $numeroVendedor
     *
     * @return  String
     */ 
    public function getNumeroVendedor()
    {
        return $this->numeroVendedor;
    }

    /**
     * Set $numeroVendedor
     *
     * @param  String  $numeroVendedor  $numeroVendedor
     *
     * @return  self
     */ 
    public function setNumeroVendedor(String $numeroVendedor)
    {
        $this->numeroVendedor = $numeroVendedor;

        return $this;
    }

    /**
     * Get $observacoesVendedor
     *
     * @return  String
     */ 
    public function getObservacoesVendedor()
    {
        return $this->observacoesVendedor;
    }

    /**
     * Set $observacoesVendedor
     *
     * @param  String  $observacoesVendedor  $observacoesVendedor
     *
     * @return  self
     */ 
    public function setObservacoesVendedor(String $observacoesVendedor)
    {
        $this->observacoesVendedor = $observacoesVendedor;

        return $this;
    }

    /**
     * Get $razaoVendedor
     *
     * @return  String
     */ 
    public function getRazaoVendedor()
    {
        return $this->razaoVendedor;
    }

    /**
     * Set $razaoVendedor
     *
     * @param  String  $razaoVendedor  $razaoVendedor
     *
     * @return  self
     */ 
    public function setRazaoVendedor(String $razaoVendedor)
    {
        $this->razaoVendedor = $razaoVendedor;

        return $this;
    }

    /**
     * Get $situacaoVendedor
     *
     * @return  String
     */ 
    public function getSituacaoVendedor()
    {
        return $this->situacaoVendedor;
    }

    /**
     * Set $situacaoVendedor
     *
     * @param  String  $situacaoVendedor  $situacaoVendedor
     *
     * @return  self
     */ 
    public function setSituacaoVendedor(String $situacaoVendedor)
    {
        $this->situacaoVendedor = $situacaoVendedor;

        return $this;
    }

    /**
     * Get $tipoPessoa
     *
     * @return  String
     */ 
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }

    /**
     * Set $tipoPessoa
     *
     * @param  String  $tipoPessoa  $tipoPessoa
     *
     * @return  self
     */ 
    public function setTipoPessoa(String $tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;

        return $this;
    }

    /**
     * Get $ufVendedor
     *
     * @return  String
     */ 
    public function getUfVendedor()
    {
        return $this->ufVendedor;
    }

    /**
     * Set $ufVendedor
     *
     * @param  String  $ufVendedor  $ufVendedor
     *
     * @return  self
     */ 
    public function setUfVendedor(String $ufVendedor)
    {
        $this->ufVendedor = $ufVendedor;

        return $this;
    }

    /**
     * Get $websiteVendedor
     *
     * @return  String
     */ 
    public function getWebsiteVendedor()
    {
        return $this->websiteVendedor;
    }

    /**
     * Set $websiteVendedor
     *
     * @param  String  $websiteVendedor  $websiteVendedor
     *
     * @return  self
     */ 
    public function setWebsiteVendedor(String $websiteVendedor)
    {
        $this->websiteVendedor = $websiteVendedor;

        return $this;
    }
}