<?php

require_once '../application/DAO/CategoriaDAO.php';

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

$c = new CategoriaVO();
$c->setCodigo($codigo);
$c->setDescricao($descricao);
$c->setStatus($status);

switch ($acao) {
    case "insert":
        try {
            
            $result = CategoriaDAO::getInstance()->createCategoria($c);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "update":
        try {
            
            $result = CategoriaDAO::getInstance()->updateCategoria($c);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "disable":
        try {
            
            $result = CategoriaDAO::getInstance()->disableCategoria($c);
            
        } catch (Exception $e) {
            
            $result = $e->getMessage();
            
        };
        break;
    case "enable":
        try {
        	
            $result = CategoriaDAO::getInstance()->enableCategoria($c);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
        break;
    case "select":
    	try {
    		 
    		$result = CategoriaDAO::getInstance()->readyCategoriasSelect($c);
    	
    	} catch (Exception $e) {
    	
    		throw new \Exception($e->getCode()." - " . $e->getMessage());
    	
    	};
        break;
    default:
        try {
            
            $result = CategoriaDAO::getInstance()->readyCategorias();
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
    break;
}

echo json_encode($result);