<?php

class ProdutoVO {
    
    private $codigo;
    private $descricao;
    private $status;
    private $categoria;
    private $fornecedor;
    private $valorCompra;
    private $valorVenda;
    
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    public function getValorCompra()
    {
        return $this->valorCompra;
    }

    public function setValorCompra($valorCompra)
    {
        $this->valorCompra = $valorCompra;
    }

    public function getValorVenda()
    {
        return $this->valorVenda;
    }

    public function setValorVenda($valorVenda)
    {
        $this->valorVenda = $valorVenda;
    }

    
    
   
}

