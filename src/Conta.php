<?php

class Conta
{
	private string $cpfTitular;
	private string $nomeTitular;
	private  float $saldo;

	public function definecpfTitular( $cpf):string
	{
		return $this->cpfTitular = $cpf;
	}

	public function definenomeTitular(string $nome):string
	{
		return $this->nomeTitular = $nome;
	}


	public function sacar (float $valorAsacar):void
	{
		if($valorAsacar > $this->saldo){
			echo "saldo Insulficiente";
			return;
		}

			$this->saldo -= $valorAsacar;		
		

	}

	public function depositar (float $valorAdepositar): void
	{
		if($valorAdepositar < 0){
			echo "Não é possivel realizar essa operação.";
			return;
		}
			
			 $this->saldo += $valorAdepositar;
		
	}

	public function transferir(float $valorAtranferir, Conta $contaDestino):void
	{
		if ($valorAtranferir > $this->saldo) {
			echo "Saldo Insulficiente";
			return;
		}
			$this->sacar($valorAtranferir);
			$contaDestino->depositar($valorAtranferir);
		
	}



	public function recuperarSaldo():float
	{
		return $this->saldo;
	}
}

