<?php

require_once("../modulo/config.php");

$num1Acumuladora = '<option>Selecione um número</option>';
$num2Acumuladora = '<option>Selecione um número</option>';
$impares = null;
$pares = null;
$numInicial = null;
$numFinal = null;
$imparesContador = null;
$paresContador = null;
$arrayImpares = array();
$arrayPares = array();


for ($i = (int)0; $i <= 500; $i++) {

  $num1Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
}
for ($i = (int)100; $i <= 1000; $i++) {

  $num2Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
}

if (isset($_POST['btnCalcular'])) {
  if ($_POST['sltNumInicil'] == "Selecione um número" || $_POST['sltNumFinal'] == "Selecione um número")
    echo (ERRO_MSG_SELECIONE);
  else {

    if (!is_numeric($_POST['sltNumInicil']) || !is_numeric($_POST['sltNumFinal']))
      echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
    else {
      if ($_POST['sltNumInicil'] > $_POST['sltNumFinal'])
        echo (ERRO_MSG_NUMERO_INICIAL_MENOR);
      else {
        if ($_POST['sltNumInicil'] == $_POST['sltNumFinal'])
          echo (ERRO_MSG_NUMERO_IGUAL);
        else {
          $numInicial = $_POST['sltNumInicil'];
          $numFinal = $_POST['sltNumFinal'];
          $paresContador = (int)0;
          $imparesContador = (int)0;
          //for para armazenar os valores impares e pares do intervalo, checando cada um e se ele é impar ou par

          for ($i = $numInicial; $i <= $numFinal; $i++) {

            if ($i % 2 == 0) {

              $pares = '<p>' . $i . '</p>';
              $paresContador++;
              $arrayPares[$paresContador] = $pares;
            } else {

              $impares = '<p>' . $i . '</p>';

              $imparesContador++;
              $arrayImpares[$imparesContador] = $impares;
            }
          }
          $imparesContador = '<p>O número de números impares é ' . $imparesContador . '</p>';
          $paresContador = '<p>O número de números pares é ' . $paresContador . '</p>';
        }
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/parImpar.css" />
  <link rel="stylesheet" href="../css/style.css">
  <title>Par e Impar</title>
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
    <div id="form">
      <form name="frmTabuada" method="post" action="parImpar.php">
        <div>
          <label>Número Inicial:</label>
          <select name="sltNumInicil" id="">
            <?php echo ($num1Acumuladora); ?>
          </select>
        </div>
        <div>
          <label>Número Final:</label>
          <select name="sltNumFinal" id="">
            <?php echo ($num2Acumuladora); ?>
          </select>
        </div>
        <button name="btnCalcular">Calcular</button>
      </form>
      <div class="resultados">
        <div class="impar">

          <div class="numImpar">
            <?php
            foreach ($arrayImpares as $chave => $valor) {
              echo ($valor);
            }

            echo ($imparesContador);
            ?>

          </div>
        </div>
        <div class="par">

          <div class="numPar">
            <?php
            foreach ($arrayPares as $chave => $valor) {
              echo ($valor);
            }
            echo ($paresContador);
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>