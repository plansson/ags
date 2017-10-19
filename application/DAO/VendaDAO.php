<?php

date_default_timezone_set('America/Bahia');

require_once '../application/Conexao.php';
require_once '../application/VO/VendaVO.php';

class VendaDAO{
    
	private $sql;
    private $result = array();
    
    private static $instance;
    
    public static function getInstance() {
    
    	if (!isset(self::$instance)){
    		self::$instance = new VendaDAO();
    	}
    
    	return self::$instance;
    
    }
    
    public function readyVendas(){
        
        $this->sql = "select v.codigo
                         , v.data_venda
                         , c.descricao cli_desc
                         , v.valorOriginal
                         , v.valorDesconto
                         , v.valorLiquido
                      from vendas v
                      left join clientes c on (c.codigo = v.codigo_cliente)";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
		
		$stmt->execute();
	
		$this->result['data'] = $stmt->fetchAll();
		$this->result['total'] = count($this->result['data']);
			
		return $this->result;
        
    }
    
    public function readyVendasSelect(CategoriaVO $c){
    
    	$this->sql = "select codigo as id, descricao as text
        				from categorias c
        			   where c.descricao like concat(ifnull(?,''),'%')
        				 and c.status = 'A'";

    	$stmt = Conexao::getInstance()->prepare($this->sql);
    	$stmt->bindValue(1, $c->getDescricao());
    
    	$stmt->execute();
    
    	$this->result['data'] = $stmt->fetchAll();
    	$this->result['total'] = count($this->result['data']);
    		
    	return $this->result;
    
    }
    
    public function readyVendasCodigo(CategoriaVO $f){
        
        $this->sql = "select * 
                        from categorias 
                       where codigo = ?
                         and status = ?";
        
    }
    
    public function createVenda(VendaVO $v){
        
        $this->sql = "insert into vendas (`codigo`,
`data_venda`,
`codigo_forma_pagamento`,
`qtde_parcelas`,
`data_parcela`,
`codigo_cliente`,
`valorOriginal`,
`valorDesconto`,
`valorLiquido`)
VALUES
(?,?,?,?,?,?,?,?,?)";
        
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $v->getCodigo());
        $stmt->bindValue(2, date('Y-m-d H:i:s'));
        $stmt->bindValue(3, $v->getFormaPagamento());
        $stmt->bindValue(4, $v->getTotalParcelas());
        $stmt->bindValue(5, $v->getDataParcela());
        $stmt->bindValue(6, $v->getCliente());
        $stmt->bindValue(7, $v->getTotalOriginal());
        $stmt->bindValue(8, $v->getTotalDesconto());
        $stmt->bindValue(9, $v->getTotalVenda());
        
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro inserido com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function updateCategoria(CategoriaVO $c){
        
    	$this->sql = "update categorias set descricao = ? 
    									  , status = ?
    				   where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $c->getDescricao());
        $stmt->bindValue(2, $c->getStatus());
        $stmt->bindValue(3, $c->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro atualizado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function deleteCategoria(CategoriaVO $f){
        
        $this->sql = "delete from categorias
                       where codigo = ?";
        
    }
    
    public function disableCategoria(CategoriaVO $c){
        
        $this->sql = "update categorias set status = 'I' where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $c->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro desabilitado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
        
        
    }
    
    public function enableCategoria(CategoriaVO $c){
        
        $this->sql = "update categorias set status = 'A' where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $c->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro habilitado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }

    }
    
}

