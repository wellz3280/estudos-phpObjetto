<?php
	require 'Conta.php';

	$primeiraConta = new Conta();

	$primeiraConta->definecpfTitular('333.222.555-77');
	$primeiraConta->definenomeTitular('weliton');

	$primeiraConta->depositar(5000);


	
	
