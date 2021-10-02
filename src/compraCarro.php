<?php

	require 'Carros.php';

	$carro1 = new Carros('fiat','argo','prata','sedan',65000);
	$carro2 = new Carros('volkswagem','gol','prata','hetch',45000);

	echo $carro2->parcelarCarro(1);



	

