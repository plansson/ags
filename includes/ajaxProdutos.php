<?php

require_once '../application/DAO/ProdutoDAO.php';

if($_POST){
    $acao           = isset($_POST["acao"])?$_POST["acao"]:NULL;
    $codigo         = isset($_POST["codigo"])?$_POST["codigo"]:NULL;
    $descricao      = isset($_POST["nome"])?$_POST["nome"]:NULL;
    $valorCusto     = isset($_POST["valorCusto"])?$_POST["valorCusto"]:NULL;
    $valorVenda     = isset($_POST["valorVenda"])?$_POST["valorVenda"]:NULL;
    $categoriaId    = isset($_POST["categoriaId"])?$_POST["categoriaId"]:NULL;
    $fornecedorId   = isset($_POST["fornecedorId"])?$_POST["fornecedorId"]:NULL;
    $status         = isset($_POST["status"])?$_POST["status"]:NULL;

} elseif ($_GET) {
    $acao       = isset($_GET["acao"])?$_GET["acao"]:NULL;
    $codigo     = isset($_GET["codigo"])?$_GET["codigo"]:NULL;
    $descricao  = isset($_GET["nome"]["term"])?$_GET["nome"]["term"]:NULL;
    $status     = isset($_GET["status"])?$_GET["status"]:NULL;
    $valorCusto     = isset($_GET["valorCusto"])?$_GET["valorCusto"]:NULL;
    $valorVenda     = isset($_GET["valorVenda"])?$_GET["valorVenda"]:NULL;
    $categoriaId    = isset($_GET["categoriaId"])?$_GET["categoriaId"]:NULL;
    $fornecedorId   = isset($_GET["fornecedorId"])?$_GET["fornecedorId"]:NULL;
    $status         = isset($_GET["status"])?$_GET["status"]:NULL;

} else {
    $acao       = NULL;
    $codigo     = NULL;
    $descricao  = NULL;
    $status     = NULL;
    $valorCusto     = NULL;
    $valorVenda     = NULL;
    $categoriaId    = NULL;
    $fornecedorId   = NULL;
    $status         = NULL;
}

$p = new ProdutoVO();
$p->setCodigo($codigo);
$p->setDescricao($descricao);
$p->setStatus($status);
$p->setValorCompra($valorCusto);
$p->setValorVenda($valorVenda);
$p->setCategoria($categoriaId);
$p->setFornecedor($fornecedorId);

switch ($acao) {
    case "insert":
        
        try {
            
            $result = ProdutoDAO::getInstance()->createProduto($p);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "update":
        try {
            
            $result = ProdutoDAO::getInstance()->updateProduto($p);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        }
        break;
    case "disable":
        try {
            
            $result = ProdutoDAO::getInstance()->disableProduto($p);
            
        } catch (Exception $e) {
            
            $result = $e->getMessage();
            
        };
        break;
    case "enable":
        try {
        	
            $result = ProdutoDAO::getInstance()->enableProduto($p);
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
        break;
    case "selectId":
    	$p->setStatus("A");
        try {
                
                $result = ProdutoDAO::getInstance()->readyProdutoCodigo($p);
                
            } catch (Exception $e) {
                
                throw new \Exception($e->getCode()." - " . $e->getMessage());
                
            };
        break;
    default:
        try {
            
            $result = ProdutoDAO::getInstance()->readyProdutos();
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
        break;
}

echo json_encode($result);