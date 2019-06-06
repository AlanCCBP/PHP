<?php
/*
include_once('accion.php');
include_once('aventura.php');
include_once('deportes.php');
*/

	$tabla = array(	'Acción'	=> array('GTA', 'COD', 'PUGB'),
					'Aventura' 	=> array('Assasins', 'Crash', 'Prince of Persia'),
					'Deportes' 	=> array('FIFA 19', 'PES 19', 'Moto GP 19'));

	$categorias = array_keys($tabla);
?>

<table border="1">
	<?php require_once('headers.php'); ?>
	<?php require_once('primeraFila.php'); ?>
	<?php require_once('segundaFila.php'); ?>
	<?php require_once('terceraFila.php'); ?>
</table>