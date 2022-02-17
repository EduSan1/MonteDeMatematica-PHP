<?php

/*
        Objetivo: Site que permite ao usuário gerar uma tabuáda de dois números a suaescolha 
        Autor: Eduardo S. Nascimento
        Data: 17/02/2022
        Versão: 1.0
    
    */


//import de bibliotecas
require_once("../modulo/config.php");
require_once("../modulo/calculos.php");

//ideclaração de váriaveis 

$num1 = (int)0;
$num2 = (int)0;
$resultadoCalculo = null;
$resultado = null;


// quando o botão bntCalcular for apertado...
if (isset($_POST['btnCalcular'])) {
  // se um dos valores inseridos for igual a 0
  if ($_POST['num1'] == 0 || $_POST['num2'] == 0)
    echo (ERRO_MSG_MULTIPLICACAO_ZERO);
  else {
    // se uma das caixas ou as duas estiverem vazias 
    if ($_POST['num1'] == "" || $_POST['num2'] == "")
      echo (ERRO_MSG_CAIXA_VAZIA);
    else {
      // se o valor inserido não for um número
      if (!is_numeric($_POST['num1']) || !is_numeric($_POST['num2']))
        echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
      else {

        if ($_POST['num1']) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $i = (int)1;

          while ($i <= $num2) {

            $resultadoCalculo = operacaoMatematica($num1, $i, 'multiplicar');
            $resultado .= '<p class="multiplicacao">' . $num1 . ' * ' . $i . ' = ' . $resultadoCalculo . '</p>';
            $i++;
          }
        }
      }
    }
  }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/tabuada.css" />
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
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
  <main>
    <h2>Tabuada</h2>
    <div class="formularioGeral">
      <div id="form" class="form">
        <form class="formulario" name="frmTabuada" method="post" action="tabuada.php">
          <div class="txtArea1">
            <label>Número 1:</label>
            <input type="text" name="num1" value="<?php echo ($num1) ?>" />
          </div>
          <div>
            <label class="txtArea2">Número 2:</label>
            <input type="text" name="num2" value="<?php echo ($num2) ?>" />
          </div>
          <button class="botao" name="btnCalcular">Calcular</button>
        </form>
      </div>
      <div class="resultado">
        <?php echo ($resultado) ?>
      </div>
    </div>

  </main>
  <footer></footer>
</body>

</html>