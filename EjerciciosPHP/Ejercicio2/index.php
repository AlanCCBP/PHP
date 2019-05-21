<?php

	$numeroInferior = 1;
	$numeroSuperior = 100;

	echo "<h2>Números pares entre $numeroInferior y $numeroSuperior:</h2>";

	for($i=$numeroInferior; $i<=$numeroSuperior; $i++) {

		if ($i%2 == 0) {
			echo "<span>$i</span><br>";
		}
	}
