<?php
require_once '../application/Conexao.php';
require_once '../application/VO/ProdutoVO.php';

class ProdutoDAO{
    
	private $sql;
    private $result = array();
    
    private static $instance;
    
    public static function getInstance() {
    
    	if (!isset(self::$instance)){
    		self::$instance = new ProdutoDAO();
    	}
    
    	return self::$instance;
    
    }
    
    public function readyProdutos(){
        
        $this->sql = "select p.codigo
						     , p.descricao
						     , c.descricao as categoria
						     , f.descricao as fornecedor
						     , p.preco_custo
						     , p.preco_venda
						     , p.status
        					 , p.codigo_categoria
        					 , p.codigo_fornecedor
						  from produtos p
						  left join categorias c on (c.codigo = p.codigo_categoria)
						  left join fornecedores f on (f.codigo = p.codigo_fornecedor)";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
		
		$stmt->execute();
	
		$this->result['data'] = $stmt->fetchAll();
		$this->result['total'] = count($this->result['data']);
			
		return $this->result;
        
    }
    
    public function readyProdutoCodigo(ProdutoVO $p){
        
        $this->sql = "select * 
                        from produtos 
                       where codigo = ?
                         and status = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $p->getCodigo());
        $stmt->bindValue(2, $p->getStatus());
        
        $stmt->execute();
        
        $this->result['data'] = $stmt->fetchAll();
        $this->result['total'] = count($this->result['data']);
        	
        return $this->result;
        
    }
    
    public function createProduto(ProdutoVO $p){
        echo print_r($p);
        $this->sql = "insert into produtos(codigo, codigo_categoria, codigo_fornecedor, descricao, status, preco_custo, preco_venda) 
        							values (?,?,?,?,?,?,?)";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $p->getCodigo());
        $stmt->bindValue(2, $p->getCategoria());
        $stmt->bindValue(3, $p->getFornecedor());
        $stmt->bindValue(4, $p->getDescricao());
        $stmt->bindValue(5, $p->getStatus());
        $stmt->bindValue(6, $p->getValorCompra());
        $stmt->bindValue(7, $p->getValorVenda());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro inserido com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function updateProduto(ProdutoVO $p){
        
    	$this->sql = "update produtos set 
    			descricao = ? 
    			, codigo_categoria = ?
    			, codigo_fornecedor = ?
    			, preco_custo = ?
    			, preco_venda = ?
    			, status = ?
    				   where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $p->getDescricao());
        $stmt->bindValue(2, $p->getCategoria());
        $stmt->bindValue(3, $p->getFornecedor());
        $stmt->bindValue(4, $p->getValorCompra());
        $stmt->bindValue(5, $p->getValorVenda());
        $stmt->bindValue(6, $p->getStatus());
        $stmt->bindValue(7, $p->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro atualizado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function deleteCategoria(CategoriaVO $f){
        
        $this->sql = "delete from produtos
                       where codigo = ?";
        
    }
    
    public function disableProduto(ProdutoVO $p){
        
    $this->sql = "update produtos set status = 'I' where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $p->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro atualizado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
        
        
    }
    
    public function enableProduto(ProdutoVO $p){
        
        $this->sql = "update produtos set status = 'A' where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $p->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro habilitado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }

    }
    
}

