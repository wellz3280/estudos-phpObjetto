<?php

class Imc
{
	private float $altura;
	private float $peso;

	public function __construct(float $altura, float $peso)
	{
		$this->altura = $altura;
		$this->peso = $peso;
		$this->resolveImc($altura,$peso);
	}

	public function recuperaAltura()
	{
		return $this->altura;
	}

	public function recuperaPeso()
	{
		return $this->peso;
	}

	private function resolveImc(float $altura, float $peso)
	{
		 $imc = $peso / $altura ** 2;

		if ($imc < 18.5) {
			echo "seu imc $imc kg/m2 e você esta magro e esta abaixo do recomendado". PHP_EOL;
		}
		
		else if($imc >= 18.5 and $imc <= 24.9){
			echo "seu imc $imc kg/m2 e você esta em forma." . PHP_EOL;
		}
		
		else if ($imc > 24.9 and $imc <= 30) {
			echo "seu imc $imc kg/m2 e você esta com sobrepeso e esta abaixo do recomendado" . PHP_EOL;
		}

		else if ($imc > 30) {
			echo "seu imc $imc kg/m2 e você esta Obeso e esta abaixo do recomendado" . PHP_EOL;
		}
			

	}
}
