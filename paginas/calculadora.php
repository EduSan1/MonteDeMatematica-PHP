<?php

//_once() o servidor realiza uma restrição para importar somente uma vez o arquivo (melhor opção)

//include() forma um pouco mais antiga de importar uma classe
//include_once()

//require() forma um pouco mais nova de importar uma classe
//require_once()

//importe calculos.php e config.php para index.php
require_once("../modulo/config.php");
require_once("../modulo/calculos.php");


$valor1 = (float)0;
$valor2 = (float)0;
$selecao = (string) null;
$resultado = (float)0;

// gettype();
//                                                                                                                           
// $teste = 10;
// echo(gettype($teste));
// settype($teste, "string");
// echo(gettype($teste));

if (isset($_POST['btncalc'])) {

	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	//validação para tratamento de erro para falta de dados
	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
		echo (ERRO_MSG_CAIXA_VAZIA);
	else {

		//validação para tratamento de erro para falta de seleção de operação
		if (!isset($_POST['rdocalc']))
			echo (ERRO_MSG_OPERACAO_CALCULO);
		else {

			//validação para tratamento de erro para inserção de dados não numericos
			if (!is_numeric($valor1) || !is_numeric($valor2))
				echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
			else {

				$selecao = strtolower($_POST['rdocalc']);

				$resultado = operacaoMatematica($valor1, $valor2, $selecao);

				// if ($selecao == 'somar') {
				// 	$resultado = $valor1 + $valor2;
				// } elseif ($selecao == 'subtrair')
				// 	$resultado = $valor1 - $valor2;
				// elseif ($selecao == 'multiplicar')
				// 	$resultado = $valor1 * $valor2;
				// elseif ($selecao == 'dividir') {
				// 	if ($valor2 == 0)
				// 		echo ('<script> alert("Nao pode dividir por zero");</script>');
				// 	else
				// 		$resultado = $valor1 / $valor2;
				// }
			}
		}
	}
}


?>

<html>

<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="../css/calculadora.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>

	<header>
		<div class="menu">
			<a href="calculadora.php">
				<p>Calculadora Simples</p>
			</a>
			<a href="media.php">
				<p>Média Ari</p>
			</a>
			<a href="parImpar.php">
				<p>Par e Impar</p>
			</a>
			<a href="tabuada.php">
				<p>Tabuada</p>
			</a>
		</div>
		<h1>Super treco de Matemática</h1>
	</header>
	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="post" action="calculadora.php">
				Valor 1:<input type="text" name="txtn1" value="<?= $valor1; ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?= $valor2; ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" <?= $selecao == "somar" ? "checked" : null ?>>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair" <?= $selecao == "subtrair" ? "checked" : null ?>>Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar" <?= $selecao == "multiplicar" ? "checked" : null ?>>Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir" <?= $selecao == "dividir" ? "checked" : null ?>>Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<?= $resultado; ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>