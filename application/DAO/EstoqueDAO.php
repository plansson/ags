<?php

class EstoqueDAO{
    
    private $sql;
    
    public function readyFornecedores(){
        
        $this->sql = "select * from fornecedores";
        
    }
    
    public function readyFornecedorCodigo(FornecedorVO $f){
        
        $this->sql = "select * 
                        from fornecedores 
                       where codigo = ?
                         and status = ?";
        
    }
    
    public function createFornecedor(FornecedorVO $f){
        
        $this->sql = "insert into fornecedores()
                      values ()";
        
    }
    
    public function updateFornecedor(FornecedorVO $f){
        
        $this->sql = "select * from fornecedores";
        
    }
    
    public function deleteFornecedor(FornecedorVO $f){
        
        $this->sql = "delete from fornecedores
                       where codigo = ?";
        
    }
    
}

