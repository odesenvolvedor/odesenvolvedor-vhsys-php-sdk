<?php

namespace Vhsys\Entity;

class Cliente extends AbstractEntity
{
    /**
     * @var string
     */
    protected $razao_cliente;
    /**
     * @var string
     */
    protected $tipo_pessoa;
    /**
     * @var string
     */
    protected $tipo_cadastro;
    /**
     * @var string
     */
    protected $cnpj_cliente;
    /**
     * @var string
     */
    protected $fantasia_cliente;
    /**
     * @var string
     */
    protected $endereco_cliente;
    /**
     * @var integer
     */
    protected $numero_cliente;
    /**
     * @var string
     */
    protected $bairro_cliente;
    /**
     * @var string
     */
    protected $complemento_cliente;
    /**
     * @var string
     */
    protected $cep_cliente;
    /**
     * @var string
     */
    protected $cidade_cliente;
    /**
     * @var string
     */
    protected $uf_cliente;
    /**
     * @var string
     */
    protected $contato_cliente;
    /**
     * @var string
     */
    protected $fone_cliente;
    /**
     * @var string
     */
    protected $celular_cliente;
    /**
     * @var string
     */
    protected $email_cliente;
    /**
     * @var string
     */
    protected $insc_estadual_cliente;
    /**
     * @var string
     */
    protected $insc_municipal_cliente;
    /**
     * @var string
     */
    protected $insc_produtor_cliente;
    /**
     * @var string
     */
    protected $insc_suframa_cliente;
    /**
     * @var string
     */
    protected $situacao_cliente;
    /**
     * @var integer
     */
    protected $vendedor_cliente;
    /**
     * @var integer
     */
    protected $vendedor_cliente_id;
    /**
     * @var string
     */
    protected $data_nasc_cliente;
    /**
     * @var string
     */
    protected $observacoes_cliente;

    public function getRazaoCliente()
    {
        return $this->razao_cliente;
    }
    public function setRazaoCliente($razaoCliente)
    {
        $this->razao_cliente = $razaoCliente;
        return $this;
    }

    public function getTipoPessoa()
    {
        return $this->tipo_pessoa;
    }
    public function setTipoPessoa($tipoPessoa)
    {
        $this->tipo_pessoa = $tipoPessoa;
        return $this;
    }

    public function getTipoCadastro()
    {
        return $this->tipo_cadastro;
    }
    public function setTipoCadastro($tipoCadastro)
    {
        $this->tipo_cadastro = $tipoCadastro;
        return $this;
    }

    public function getCnpjCliente()
    {
        return $this->cnpj_cliente;
    }
    public function setCnpjCliente($cnpjCliente)
    {
        $this->cnpj_cliente = $cnpjCliente;
        return $this;
    }

    public function getFantasiaCliente()
    {
        return $this->fantasia_cliente;
    }
    public function setFantasiaCliente($fantasiaCliente)
    {
        $this->fantasia_cliente = $fantasiaCliente;
        return $this;
    }

    public function getEnderecoCliente()
    {
        return $this->endereco_cliente;
    }
    public function setEnderecoCliente($enderecoCliente)
    {
        $this->endereco_cliente = $enderecoCliente;
        return $this;
    }

    public function getNumeroCliente()
    {
        return $this->numero_cliente;
    }
    public function setNumeroCliente($numeroCliente)
    {
        $this->numero_cliente = $numeroCliente;
        return $this;
    }

    public function getBairroCliente()
    {
        return $this->bairro_cliente;
    }
    public function setBairroCliente($bairroCliente)
    {
        $this->bairro_cliente = $bairroCliente;
        return $this;
    }

    public function getComplementoCliente()
    {
        return $this->complemento_cliente;
    }
    public function setComplementoCliente($complementoCliente)
    {
        $this->complemento_cliente = $complementoCliente;
        return $this;
    }

    public function getCepCliente()
    {
        return $this->cep_cliente;
    }
    public function setCepCliente($cepCliente)
    {
        $this->cep_cliente = $cepCliente;
        return $this;
    }

    public function getCidadeCliente()
    {
        return $this->cidade_cliente;
    }
    public function setCidadeCliente($cidadeCliente)
    {
        $this->cidade_cliente = $cidadeCliente;
        return $this;
    }

    public function getUfCliente()
    {
        return $this->uf_cliente;
    }
    public function setUfCliente($ufCliente)
    {
        $this->uf_cliente = $ufCliente;
        return $this;
    }

    public function getContatoCliente()
    {
        return $this->contato_cliente;
    }
    public function setContatoCliente($contatoCliente)
    {
        $this->contato_cliente = $contatoCliente;
        return $this;
    }

    public function getFoneCliente()
    {
        return $this->fone_cliente;
    }
    public function setFoneCliente($foneCliente)
    {
        $this->fone_cliente = $foneCliente;
        return $this;
    }

    public function getCelularCliente()
    {
        return $this->celular_cliente;
    }
    public function setCelularCliente($celularCliente)
    {
        $this->celular_cliente = $celularCliente;
        return $this;
    }

    public function getEmailCliente()
    {
        return $this->email_cliente;
    }
    public function setEmailCliente($emailCliente)
    {
        $this->email_cliente = $emailCliente;
        return $this;
    }

    public function getInscEstadualCliente()
    {
        return $this->insc_estadual_cliente;
    }
    public function setInscEstadualCliente($inscEstadualCliente)
    {
        $this->insc_estadual_cliente = $inscEstadualCliente;
        return $this;
    }

    public function getInscMunicipalCliente()
    {
        return $this->insc_municipal_cliente;
    }
    public function setInscMunicipalCliente($inscMunicipalCliente)
    {
        $this->insc_municipal_cliente = $inscMunicipalCliente;
        return $this;
    }

    public function getInscProdutorCliente()
    {
        return $this->insc_produtor_cliente;
    }
    public function setInscProdutorCliente($inscProdutorCliente)
    {
        $this->insc_produtor_cliente = $inscProdutorCliente;
        return $this;
    }

    public function getInscSuframaCliente()
    {
        return $this->insc_suframa_cliente;
    }
    public function setInscSuframaCliente($inscSuframaCliente)
    {
        $this->insc_suframa_cliente = $inscSuframaCliente;
        return $this;
    }

    public function getSituacaoCliente()
    {
        return $this->situacao_cliente;
    }
    public function setSituacaoCliente($situacaoCliente)
    {
        $this->situacao_cliente = $situacaoCliente;
        return $this;
    }

    public function getVendedorCliente()
    {
        return $this->vendedor_cliente;
    }
    public function setVendedorCliente($vendedorCliente)
    {
        $this->vendedor_cliente = $vendedorCliente;
        return $this;
    }

    public function getVendedorClienteId()
    {
        return $this->vendedor_cliente_id;
    }
    public function setVendedorClienteId($vendedorClienteId)
    {
        $this->vendedor_cliente_id = $vendedorClienteId;
        return $this;
    }

    public function getDataNascCliente()
    {
        return $this->data_nasc_cliente;
    }
    public function setDataNascCliente($dataNascCliente)
    {
        $this->data_nasc_cliente = $dataNascCliente;
        return $this;
    }

    public function getObservacoesCliente()
    {
        return $this->observacoesCliente;
    }
    public function setObservacoesCliente($observacoesCliente)
    {
        $this->observacoes_cliente = $observacoesCliente;
        return $this;
    }
}