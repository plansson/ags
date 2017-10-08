<?php
require_once '../application/Conexao.php';
require_once '../application/VO/CategoriaVO.php';

class CategoriaDAO{
    
	private $sql;
    private $result = array();
    
    private static $instance;
    
    public static function getInstance() {
    
    	if (!isset(self::$instance)){
    		self::$instance = new CategoriaDAO();
    	}
    
    	return self::$instance;
    
    }
    
    public function readycategorias(){
        
        $this->sql = "select * 
        				from categorias c";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
		
		$stmt->execute();
	
		$this->result['data'] = $stmt->fetchAll();
		$this->result['total'] = count($this->result['data']);
			
		return $this->result;
        
    }
    
    public function readyCategoriasSelect(CategoriaVO $c){
    
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
    
    public function readyCategoriaCodigo(CategoriaVO $f){
        
        $this->sql = "select * 
                        from categorias 
                       where codigo = ?
                         and status = ?";
        
    }
    
    public function createCategoria(CategoriaVO $c){
        
        $this->sql = "insert into categorias(codigo, descricao, status) values (?,?,?)";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $c->getCodigo());
        $stmt->bindValue(2, $c->getDescricao());
        $stmt->bindValue(3, $c->getStatus());
        
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

