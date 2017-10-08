<?php

class CategoriaVO{
    
    private $codigo;
    private $descricao;
    private $status;
    /**
     * @return the $codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param field_type $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return the $descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param field_type $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return the $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param field_type $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

        
    
}