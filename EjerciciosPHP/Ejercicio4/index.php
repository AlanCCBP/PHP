<?php

	if (isset($_GET['unNumero']) && isset($_GET['otroNumero'])) {

		$primerNumero=$_GET['unNumero'];
		$segundoNumero=$_GET['otroNumero'];

		echo "<h3>Resultados de las operaciones básicas entre $primerNumero y $segundoNumero:</h3>";
		echo "<span>Suma: " . ($primerNumero+$segundoNumero) . ".</span><br>";
		echo "<span>Resta: " . ($primerNumero-$segundoNumero) . ".</span><br>";
		echo "<span>Multiplicación: " . ($primerNumero*$segundoNumero) . ".</span><br>";

		if ($segundoNumero!=0) {
			echo "<span>División: " . ($primerNumero/$segundoNumero) . ".</span><br>";
		} else {
			echo "<span>División: No es posible realizarla porque el segundo operando es 0.</span><br>";
		}
	} else {
		echo "<h4>No es posible realizar las operaciones porque no ha ingresado uno o ninguno de los operandos.</h4>";
	}
