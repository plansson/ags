<?php

class VendaVO{
    
    private $codigo;
    private $formaPagamento;
    private $totalParcelas;
    private $dataParcela;
    private $cliente;
    private $totalOriginal;
    private $totalDesconto;
    private $totalVenda;
    
	public function getCodigo() {
		return $this->codigo;
	}
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
		return $this;
	}
	public function getFormaPagamento() {
		return $this->formaPagamento;
	}
	public function setFormaPagamento($formaPagamento) {
		$this->formaPagamento = $formaPagamento;
		return $this;
	}
	public function getTotalParcelas() {
		return $this->totalParcelas;
	}
	public function setTotalParcelas($totalParcelas) {
		$this->totalParcelas = $totalParcelas;
		return $this;
	}
	public function getDataParcela() {
		return $this->dataParcela;
	}
	public function setDataParcela($dataParcela) {
		$this->dataParcela = $dataParcela;
		return $this;
	}
	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($cliente) {
		$this->cliente = $cliente;
		return $this;
	}
	public function getTotalOriginal() {
		return $this->totalOriginal;
	}
	public function setTotalOriginal($totalOriginal) {
		$this->totalOriginal = $totalOriginal;
		return $this;
	}
	public function getTotalDesconto() {
		return $this->totalDesconto;
	}
	public function setTotalDesconto($totalDesconto) {
		$this->totalDesconto = $totalDesconto;
		return $this;
	}
	public function getTotalVenda() {
		return $this->totalVenda;
	}
	public function setTotalVenda($totalVenda) {
		$this->totalVenda = $totalVenda;
		return $this;
	}
	
    
    

}

