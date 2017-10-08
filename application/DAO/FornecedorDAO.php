<?php
require_once '../application/Conexao.php';
require_once '../application/VO/FornecedorVO.php';

class FornecedorDAO {
    
    private $sql;
    private $result = array();
    
    private static $instance;
    
    public static function getInstance() {
    
    	if (!isset(self::$instance))
    		self::$instance = new self();
    
    		return self::$instance;
    
    }
    
    public function readyFornecedores(){
        
        $this->sql = "select * from fornecedores";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
		
		$stmt->execute();
	
		$this->result['data'] = $stmt->fetchAll();
		$this->result['total'] = count($this->result['data']);
			
		return $this->result;
        
    }
    
    public function readyFornecedorCodigo(FornecedorVO $f){
        
        $this->sql = "select * 
                        from fornecedores 
                       where codigo = ?
                         and status = ?";
        
    }
    
    public function createFornecedor(FornecedorVO $f){
        
        $this->sql = "insert into fornecedores(codigo, descricao, status) values (?,?,?)";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $f->getCodigo());
        $stmt->bindValue(2, $f->getDescricao());
        $stmt->bindValue(3, $f->getStatus());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro inserido com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function updateFornecedor(FornecedorVO $f){
        
    	$this->sql = "update fornecedores set descricao = ? 
    									  , status = ?
    				   where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $f->getDescricao());
        $stmt->bindValue(2, $f->getStatus());
        $stmt->bindValue(3, $f->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registro atualizado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }
        
    }
    
    public function deleteFornecedor(FornecedorVO $f){
        
        $this->sql = "delete from fornecedores
                       where codigo = ?";
        
    }
    
    public function disableFornecedor(FornecedorVO $f){
        
        $this->sql = "update fornecedores set status = 'I' where codigo = ?";
        
        $stmt = Conexao::getInstance()->prepare($this->sql);
        $stmt->bindValue(1, $f->getCodigo());
        
        try {
            
            $stmt->execute();
            
            return $stmt->rowCount() . " registros desabilitado com sucesso";
            
        } catch (Exception $e) {
            
            return $e->getMessage();
            
        }        
    }
    
    public function enableFornecedor(FornecedorVO $f){
    
    	$this->sql = "update fornecedores set status = 'A' where codigo = ?";
    
    	$stmt = Conexao::getInstance()->prepare($this->sql);
    	$stmt->bindValue(1, $f->getCodigo());
    
    	try {
    
    		$stmt->execute();
    
    		return $stmt->rowCount() . " registros habilitado com sucesso";
    
    	} catch (Exception $e) {
    
    		return $e->getMessage();
    
    	}
    }
    
    public function readyFornecedorSelect(FornecedorVO $f){
    
    	$this->sql = "select codigo as id, descricao as text
        				from fornecedores f
        			   where f.descricao like concat(ifnull(?,''),'%')
        				 and f.status = 'A'";
    
    	$stmt = Conexao::getInstance()->prepare($this->sql);
    	$stmt->bindValue(1, $f->getDescricao());
    
    	$stmt->execute();
    
    	$this->result['data'] = $stmt->fetchAll();
    	$this->result['total'] = count($this->result['data']);
    
    	return $this->result;
    
    }
    
}

