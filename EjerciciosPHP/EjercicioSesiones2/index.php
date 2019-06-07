<?php

function validarEmail($unEmail){

	$status = "<h3>NO VALIDO</h3>";

	if(!empty($unEmail) && filter_var($unEmail, FILTER_VALIDATE_EMAIL)){
		$status = "<h3>VALIDO</h3>";
	}

	return $status;

}


if(isset($_GET['email'])){
	echo validarEmail($_GET['email']);
} else {
	echo "<h3>Error. Falta el parámetro 'email' en el método GET.</h3>";
}