<?php

    /*
        > Objetivo: arquivo que utiliza funções matematicas que poderá ser utilizado dentro do projeto    
        > Autor: Eduardo Santos Nascimento
        > Data:04/02/2022
        > Versão:1.0
    
    */

    //CRIANDO UMA FUNÇÃO PARA AS OPRERAÇÕES MATEMATICAS

function operacaoMatematica($numero1, $numero2, $operacao)
{
	//criando variaveis internas da função para caso o alterarmos o valor passado ele ainda terá o valor de quando for enviado
	$num1 = (float) $numero1;
	$num2 = (float) $numero2;
	$tipoDeCalculo = $operacao;
	$result = (string)"";

	switch ($tipoDeCalculo) {
		case "somar":
			$result = $num1 + $num2;
			break;
		case "subtrair":
			$result = $num1 - $num2;
			break;
		case "multiplicar":
			$result = $num1 * $num2;
			break;
		case "dividir":
			if ($num2 == 0)
				echo (ERRO_MSG_DIVISAO_ZERO);
			else
				$result = $num1 / $num2;
			break;
		default:
			$result = '<p class="msgErro">COMO TU FEZ ISSO MAM?????</p>';
			break;
	}
	$result = round($result, 2);
	return $result;
}

?>
