<?php

	echo "<h2>Tablas de multiplicar</h2>";

	echo "<table border=1><tr><th>*</th>";

	for($i=1;$i<=10;$i++){
		echo "<th>$i</th>";
	}

	echo "</tr>";

	for($i=1;$i<=10;$i++){

		echo "<tr><th>$i</th>";

		for($j=1;$j<=10;$j++){
			echo "<td>" . ($i*$j) . "</td>";
		}

		echo "</tr>";
	}

	echo "</table>";