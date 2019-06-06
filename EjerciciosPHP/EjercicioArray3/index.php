<?php

	$unaPalabra = "";

	if(!empty($unaPalabra)){
		echo "<h3>$unaPalabra</h3>";
	} else {
		$unaPalabra = "este es un texto agregado en minusculas, para ser mostrado en mayusculas y en negrita.";
		echo "<h3><strong>" . strtoupper($unaPalabra) . "</strong></h3>";
	}