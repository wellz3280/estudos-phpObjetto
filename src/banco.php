<?php
	require 'Conta.php';

	$primeiraConta = new Conta('355.255.789-89','weliton');

	$primeiraConta->deposita(500);
	echo "Nome: ". $primeiraConta->recuperaNomeTitular(). PHP_EOL;
	echo "Cpf: ".$primeiraConta->recuperaCpfTitular(). PHP_EOL;
	echo "Saldo: ".$primeiraConta->recuperaSaldo(). PHP_EOL;

	$segundaConta = new Conta('355.255.789-89','ana paula');
	
	$segundaConta->deposita(1000);
	echo "Nome: ". $segundaConta->recuperaNomeTitular(). PHP_EOL;
	echo "Cpf: ".$segundaConta->recuperaCpfTitular(). PHP_EOL;
	echo "Saldo: ".$segundaConta->recuperaSaldo(). PHP_EOL;

	echo Conta::recuperaNumeroDeContas();