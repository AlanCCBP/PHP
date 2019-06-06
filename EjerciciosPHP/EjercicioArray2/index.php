<?php


	$unArray = Array();
	$cantidadMaxima = 120;


	for($i=0;$i<$cantidadMaxima;$i++){
		array_push($unArray, rand(0,100));
	}

	foreach ($unArray as $unNumero) {
		echo "<p>$unNumero</p>";
	}