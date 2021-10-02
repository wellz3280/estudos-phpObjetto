<?php

class Carros
{
	private string $marca;
	private string $modelo;
	private string $cor;
	private string $tipo;
	private float $valor;

	public function __construct(string $marca, string $modelo, string $cor,string $tipo, float$valor)
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->tipo = $tipo;
		$this->valor = $valor;
	}

	public function parcelarCarro(float $qtd)
	{
		return $parcelas = $this->valor/$qtd;
	}

	
}