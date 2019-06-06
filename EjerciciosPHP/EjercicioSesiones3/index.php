<?php

if(isset($_POST['unNumero']) && isset($_POST['otroNumero'])){

	$resultado = false;

	if(isset($_POST['sumar'])){

		$resultado = ($_POST['unNumero'] + $_POST['otroNumero']);

	} else if(isset($_POST['restar'])){

		$resultado = ($_POST['unNumero'] - $_POST['otroNumero']);

	} else if(isset($_POST['multiplicar'])){

		$resultado = ($_POST['unNumero'] * $_POST['otroNumero']);

	} else if(isset($_POST['dividir'])){

		if($_POST['otroNumero'] != 0){

			$resultado = ($_POST['unNumero'] + $_POST['otroNumero']);

		} else {
			$resultado = false;
		}
	}
}

?>

<DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Calculadora PHP</title>
	</head>
	<body>
		<h1>Calculadora PHP</h1>
		<form method="POST">
			<label for="unNumero">Primer número</label></br>
			<input type="number" name="unNumero"></br>
			<label for="otroNumero">Segundo número</label></br>
			<input type="number" name="otroNumero"></br>
			<input type="submit" value="+" name="sumar">
			<input type="submit" value="-" name="restar">
			<input type="submit" value="*" name="multiplicar">
			<input type="submit" value="/" name="dividir">
		</form>
	</body>
</html>

<?php

	if($resultado != false){
		echo "<h2>Resultado: $resultado.</h2>";
	} else {
		echo "<h2>Por favor, revisa los operandos.</h2>";
	}