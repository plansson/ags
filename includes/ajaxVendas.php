<?php

require_once '../application/DAO/VendaDAO.php';

if($_POST){
	$acao 				= isset($_POST["acao"])?$_POST["acao"]:NULL;
	$codigo 			= isset($_POST["codigo"])?$_POST["codigo"]:NULL;
	$formaPagamento		= isset($_POST["formaPagamento"])?$_POST["formaPagamento"]:NULL;
	$totalParcelas		= isset($_POST["totalParcelas"])?$_POST["totalParcelas"]:NULL;
	$dataParcela		= isset($_POST["dataParcela"])?$_POST["dataParcela"]:NULL;
	$cliente 			= isset($_POST["cliente"])?$_POST["cliente"]:NULL;
	$totalOriginal		= isset($_POST["totalOriginal"])?$_POST["totalOriginal"]:NULL;
	$totalDesconto		= isset($_POST["totalDesconto"])?$_POST["totalDesconto"]:NULL;
	$totalVenda			= isset($_POST["totalVenda"])?$_POST["totalVenda"]:NULL;
	$status 			= isset($_POST["status"])?$_POST["status"]:NULL;
} elseif ($_GET) {
	$acao               = isset($_GET["acao"])?$_GET["acao"]:NULL;
    $codigo             = isset($_GET["codigo"])?$_GET["codigo"]:NULL;
    $formaPagamento     = isset($_GET["formaPagamento"])?$_GET["formaPagamento"]:NULL;
    $totalParcelas      = isset($_GET["totalParcelas"])?$_GET["totalParcelas"]:NULL;
    $dataParcela        = isset($_GET["dataParcela"])?$_GET["dataParcela"]:NULL;
    $cliente            = isset($_GET["cliente"])?$_GET["cliente"]:NULL;
    $totalOriginal      = isset($_GET["totalOriginal"])?$_GET["totalOriginal"]:NULL;
    $totalDesconto      = isset($_GET["totalDesconto"])?$_GET["totalDesconto"]:NULL;
    $totalVenda         = isset($_GET["totalVenda"])?$_GET["totalVenda"]:NULL;
    $status             = isset($_GET["status"])?$_GET["status"]:NULL;
} else {
	$acao               = NULL;
    $codigo             = NULL;
    $formaPagamento     = NULL;
    $totalParcelas      = NULL;
    $dataParcela        = NULL;
    $cliente            = NULL;
    $totalOriginal      = NULL;
    $totalDesconto      = NULL;
    $totalVenda         = NULL;
    $status             = NULL;
}

$v = new VendaVO();
$v->setFormaPagamento($formaPagamento);
$v->setTotalParcelas($totalParcelas);
$v->setDataParcela($dataParcela);
$v->setCliente($cliente);
$v->setTotalOriginal($totalOriginal);
$v->setTotalDesconto($totalDesconto);
$v->setTotalVenda($totalVenda);

switch ($acao) {
    case "insert":
        try {
            $v->setCodigo(NULL);
            $result = VendaDAO::getInstance()->createVenda($v);
            
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
    		 
    		$result = VendaDAO::getInstance()->readyVendasSelect($c);
    	
    	} catch (Exception $e) {
    	
    		throw new \Exception($e->getCode()." - " . $e->getMessage());
    	
    	};
        break;
    default:
        try {
            
            $result = VendaDAO::getInstance()->readyVendas();
            
        } catch (Exception $e) {
            
            throw new \Exception($e->getCode()." - " . $e->getMessage());
            
        };
    break;
}

echo json_encode($result);