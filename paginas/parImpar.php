<?php

/*
        Objetivo: Site que permite ao usuário diferenciar números ímpares de números pares em um intervalo pré definido
        Autor: Eduardo S. Nascimento
        Data: 17/02/2022
        Versão: 1.0
    
    */

require_once("../modulo/config.php");
require_once("../modulo/gerarListaNumeros.php");
require_once("../modulo/separarImparPar.php");
//declaração de variaveis
$impares = null;
$pares = null;
$numInicial = null;
$numFinal = null;
$imparesContador = null;
$paresContador = null;
$arrayImpares = array();
$arrayPares = array();
$contadorArrayImpar = (int)0;
$contadorArrayPar = (int)0;

$num1Acumuladora = '<option>Selecione um número</option> ' . gerarLista(0, 500);
//antes de tranformar em função

// for ($i = (int)0; $i <= 500; $i++) {
//   $num1Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
// }

$num2Acumuladora = '<option>Selecione um número</option> ' . gerarLista(100, 1000);
//antes de tranformar em função

// for ($i = (int)100; $i <= 1000; $i++) {
//   $num2Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
// }

// Quando apertar o botâo btnCalcular...
if (isset($_POST['btnCalcular'])) {
  //verifica se foram selecionados números 
  if ($_POST['sltNumInicil'] == "Selecione um número" || $_POST['sltNumFinal'] == "Selecione um número")
    echo (ERRO_MSG_SELECIONE); // imprime msm de erro 
  else {
    //verifica se o segundo número é menor que o primeiro 
    if ($_POST['sltNumInicil'] > $_POST['sltNumFinal'])
      echo (ERRO_MSG_NUMERO_INICIAL_MENOR); // imprime msm de erro 
    else {
      //verifica se os números selecionados são iguais
      if ($_POST['sltNumInicil'] == $_POST['sltNumFinal'])
        echo (ERRO_MSG_NUMERO_IGUAL); // imprime msm de erro 
      else {
        //declara número inicial
        $numInicial = $_POST['sltNumInicil'];
        $numFinal = $_POST['sltNumFinal'];

        //for para separar impares e pares
        for ($i = (int)0; $i <= $numFinal; $i++) {
          if ($i % 2 != 0) {
            $arrayImpares[$contadorArrayImpar] = separar($i);
            $contadorArrayImpar++;
          } else if ($i % 2 == 0) {
            $arrayPares[$contadorArrayPar] = separar($i);
            $contadorArrayPar++;
          }
        }

        //for para armazenar os valores impares e pares do intervalo, checando cada um e se ele é impar ou par

        // for ($i = $numInicial; $i <= $numFinal; $i++) {
        //   if ($i % 2 == 0) {
        //     $pares = '<p>' . $i . '</p>';
        //     $paresContador++;
        //     $arrayPares[$paresContador] = $pares;
        //   } else {
        //     $impares = '<p>' . $i . '</p>';
        //     $imparesContador++;
        //     $arrayImpares[$imparesContador] = $impares;
        //   }
        // }

        // define a variavel imparesContador como uma mensagem que exibe da quantidade de index criados no array
        $imparesContador = '<p>O número de números impares é ' . count($arrayImpares) . '</p>';
        // define a variavel paresContador como uma mensagem que exibe da quantidade de index criados no array
        $paresContador = '<p>O número de números pares é ' . count($arrayPares) . '</p>';
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
    <h2>Par e Ímpar</h2>
    <div class="formularioGeral">
      <form name="frmTabuada" class="form" method="post" action="parImpar.php">
        <div class="sltNumInicil">
          <label>Número Inicial:</label>
          <select name="sltNumInicil" id="">
            <?php echo ($num1Acumuladora); ?>
          </select>
        </div>
        <div class="sltNumFinal">
          <label>Número Final:</label>
          <select name="sltNumFinal" id="">
            <?php echo ($num2Acumuladora); ?>
          </select>
        </div>
        <button class="botao" name="btnCalcular">Calcular</button>
      </form>
      <div class="resultados">
        <p>Resultados:</p>
        <div class="listas">
          <div class="resultadoImpar">

            <div class="numImpar">
              <?php
              foreach ($arrayImpares as $chave => $valor) {
                echo ($valor);
              }
              ?>
            </div>
            <?php echo ($imparesContador); ?>
          </div>

          <div class="resultadoPar">

            <div class="numPar">
              <?php
              foreach ($arrayPares as $chave => $valor) {
                echo ($valor);
              }
              ?>
            </div>
            <?php echo ($paresContador); ?>
          </div>
        </div>

      </div>
    </div>

  </main>
</body>

</html>