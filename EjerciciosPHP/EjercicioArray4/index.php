<?php

	$varInt = 3;
	$varArray = array(2, 5, 2, 6, 2, 7, 9);
	$varString = "Basta chicos";
	$varBool = true;

	if(is_string($varString)){
		echo "<h3>$varString</h3>";
	}

	if(is_array($varArray)){
		echo "<h3>$varArray</h3>";
	}

	if(is_bool($varBool)){
		echo "<h3>$varBool</h3>";
	}

	if(is_int($varInt)){
		echo "<h3>$varInt</h3>";
	}