<?php

	$i=0;

	echo "<h3>Estos son los cuadrados de los primeros 40 números naturales:</h3>";

	while($i<=40){

		echo "<span>$i al cuadrado es: " . $i*$i . "</span>.<br>";
		$i++;
	}

	echo "<h3>Ahora codificado con FOR:</h3>";

	for($i=0;$i<=40;$i++){
		echo "<span>$i al cuadrado es: " . $i*$i . "</span>.<br>";
	}