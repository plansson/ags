<?php

require_once '../application/DAO/FornecedorDAO.php';

if($_POST){
	$acao 		= isset($_POST["acao"])?$_POST["acao"]:NULL;
	$codigo 	= isset($_POST["codigo"])?$_POST["codigo"]:NULL;
	$descricao 	= isset($_POST["nome"])?$_POST["nome"]:NULL;
	$status 	= isset($_POST["status"])?$_POST["status"]:NULL;
} elseif ($_GET) {
	$acao  		= isset($_GET["acao"])?$_GET["acao"]:NULL;
	$codigo 	= isset($_GET["codigo"])?$_GET["codigo"]:NULL;
	$descricao 	= isset($_GET["nome"]["term"])?$_GET["nome"]["term"]:NULL;
	$status 	= isset($_GET["status"])?$_GET["status"]:NULL;
} else {
	$acao  		= NULL;
	$codigo 	= NULL;
	$descricao 	= NULL;
	$status 	= NULL;
}

$f = new FornecedorVO();
$f->setCodigo($codigo);
$f->setDescricao($descricao);
$f->setStatus($status);

switch ($acao) {
    case "insert":
        try {
            
            $result = FornecedorDAO::getInstance()->createFornecedor($f);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "update":
        try {
            
            $result = FornecedorDAO::getInstance()->updateFornecedor($f);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "disable":
        try {
            
            $result = FornecedorDAO::getInstance()->disableFornecedor($f);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
        break;
	case "enable":
    	try {
        		 
        	$result = FornecedorDAO::getInstance()->enableFornecedor($f);
        
        } catch (Exception $e) {
        
        	throw new \Exception($e->getCode()." - " . $e->getMessage());
        
        };
        break;
    case "select":
    	try {
    		 
    		$result = FornecedorDAO::getInstance()->readyFornecedorSelect($f);
    		 
    	} catch (Exception $e) {
    		 
    		throw new \Exception($e->getCode()." - " . $e->getMessage());
    		 
    	};
    	break;
    default:
        try {
            
            $result = FornecedorDAO::getInstance()->readyFornecedores();
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
        break;
}

echo json_encode($result);