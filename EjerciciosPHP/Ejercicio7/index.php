<?php

	if (isset($_GET['unNumero']) && isset($_GET['otroNumero'])){

		$primerNumero=$_GET['unNumero'];
		$segundoNumero=$_GET['otroNumero'];

		if ($primerNumero > $segundoNumero){
			echo "El primer operando debe ser menor al segundo.";
			return;
		}

		echo "<h3>Números impares que se encuentran entre $primerNumero y $segundoNumero:</h3>";

		for($i=$primerNumero;$i<=$segundoNumero;$i++){

			if($i%2 != 0){
				if($i<$segundoNumero){
					echo "<span>$i -</span>";
				} else {
					echo "<span>$i</span>";
				}
			}

		}
	} else {
		echo "No es posible determinar los números entre dos operandos, dado que uno o ambos no se han ingresado en los parámetros.";
	}