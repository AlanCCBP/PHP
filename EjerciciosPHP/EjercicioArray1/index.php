<?php


	$unArray = [10, 2, 33, 94, 25, 86, 27, 18];
	$numeroABuscar = 0;

	if (!isset($_GET['numeroBuscado'])) {
		echo "Para continuar necesitamos recibir un numero a buscar por parámetro.";
		return;
	}

	$numeroABuscar = $_GET['numeroBuscado'];

	echo "<h2>Contenido del array tal cual está definido:</h2>";
	foreach ($unArray as $unNumero) {
		echo "<h3>$unNumero</h3>";
	}

	echo "<h2>Ordenado de menor a mayor:</h2>";
	sort($unArray);

	foreach ($unArray as $unNumero) {

		echo "<h3>$unNumero</h3>";
	}

	echo "<h2>Longitud del array:</h2>";
	echo "<h3>" . count($unArray) . "</h3>";

	echo "<h2>Posición del elemento buscado por parámetro:</h2>";
	$resultado = array_search($numeroABuscar, $unArray);

	if ($resultado) {
		echo "<h4>" . $resultado . "</h4>";
	} else {
		echo "<h4>No se ha encontrado el número que estás buscando.</h4>";
	}