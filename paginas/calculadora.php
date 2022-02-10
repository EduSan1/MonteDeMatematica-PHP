<?php
$numero1 =  (float)0;;
$numero2 =  (float)0;;
$resultado = (float)0;

if (isset($_GET['btncalc'])) {

	$numero1 = $_GET['txtn1'];
	$numero2 = $_GET['txtn2'];

	if ($numero2 == "" || $numero1 == "") {
		echo ('<p class="msgErro">PREENCHE TUDO POURA</p>');
	} else {

		if (!is_numeric($numero1) || !is_numeric($numero2)) {
			echo ('<p class="msgErro">COLOCA SÓ NUMERO POURA</p>');
		} else {

			// if ($_GET['rdocalc'] == "somar") {
			// 	$resultado = $numero1 + $numero2;
			// } else if ($_GET['rdocalc'] == "subtrair") {
			// 	$resultado = $numero1 - $numero2;
			// } else if ($_GET['rdocalc'] == "multiplicar") {
			// 	$resultado = $numero1 * $numero2;
			// } else if ($_GET['rdocalc'] == "dividir") {
			// 	$resultado = $numero1 / $numero2;
			// } else {
			// 	$resultado = '<p class="msgErro">COMO TU FEZ ISSO MAM?????</p>';
			// }

			switch ($_GET['rdocalc']) {
				case "somar":
					$resultado = $numero1 + $numero2;
					break;
				case "subtrair":
					$resultado = $numero1 - $numero2;
					break;
				case "multiplicar":
					$resultado = $numero1 * $numero2;
					break;
				case "dividir":
					$resultado = $numero1 / $numero2;
					break;
				default:
					$resultado = '<p class="msgErro">COMO TU FEZ ISSO MAM?????</p>';
					break;
			}
		}
	}
}
?>

<html>
<a href="../index.php">
	<p>Voltar</p>
</a>

<head>

	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="../css/calculadora.css">
</head>

<body>

	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="get" action="index.php">
				Valor 1:<input type="text" name="txtn1" value="<?php echo ($numero1) ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?php echo ($numero2) ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair">Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar">Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir">Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<?php echo ($resultado); ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>